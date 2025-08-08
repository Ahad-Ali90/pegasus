<?php

namespace App\Http\Controllers;

use App\Models\LuggageGuideline;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LuggageGuidelineController extends Controller
{
   
    public function index()
    {
    $LuggageGuidelines = LuggageGuideline::with('car')->orderBy('position','asc')->paginate(10);
    $cars = Car::all();
    // return $LuggageGuidelines;
    return view('LuggageGuideline.index', compact('LuggageGuidelines','cars'));
    }

    public function store(Request $request)
{
    try {
        $rules = [
            'car_id'      => 'required|exists:cars,id',
            'type'        => 'required|string|max:255',
            'max_dimensions_cm'       => 'required|string|max:255',
            'max_dimensions_inches' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $feature = LuggageGuideline::updateOrCreate(
            ['id' => $request->id],
            $request->only(['car_id', 'type', 'max_dimensions_cm', 'max_dimensions_inches'])
        );
    // Set position only for new records
    if (!$request->filled('id')) {
        $feature->position = $feature->id;
        $feature->save();
    }

    return response()->json([
        'success' => true,
        'message' => $request->filled('id') ? 'Luggage Guidelines updated successfully' : 'Luggage Guidelines added successfully'
    ]);
} catch (\Exception $e) {
    Log::error('Luggage Guidelines Store Error: ' . $e->getMessage());
    return response()->json([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage(),
    ], 500);
}
}
    

   public function destroy($id)
    {
        $skill = LuggageGuideline::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Luggage Guidelines Deleted successfully']);
    }
    public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            LuggageGuideline::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Luggage Guidelines Sorted successfully']);
    }

}
