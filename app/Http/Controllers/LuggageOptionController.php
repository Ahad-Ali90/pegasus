<?php

namespace App\Http\Controllers;

use App\Models\LuggageOption;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LuggageOptionController extends Controller
{
   
    public function index()
    {
    $LuggageOptions = LuggageOption::with('car')->orderBy('position','asc')->paginate(10);
    $cars = Car::all();
    // return $carFeatures;
    return view('LuggageOption.index', compact('LuggageOptions','cars'));
    }

    public function store(Request $request)
{
    try {
        $rules = [
            'car_id'      => 'required|exists:cars,id',
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $options = LuggageOption::updateOrCreate(
            ['id' => $request->id],
            $request->only(['car_id', 'title', 'description'])
        );
    // Set position only for new records
    if (!$request->filled('id')) {
        $options->position = $options->id;
        $options->save();
    }

    return response()->json([
        'success' => true,
        'message' => $request->filled('id') ? 'Luggage Option updated successfully' : 'Luggage Option added successfully'
    ]);
} catch (\Exception $e) {
    Log::error('Luggage Option Store Error: ' . $e->getMessage());
    return response()->json([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage(),
    ], 500);
}
}
    

   public function destroy($id)
    {
        $skill = LuggageOption::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Luggage Option Deleted successfully']);
    }
    public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            LuggageOption::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Luggage Option Sorted successfully']);
    }

}
