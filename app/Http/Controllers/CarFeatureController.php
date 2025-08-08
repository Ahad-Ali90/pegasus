<?php

namespace App\Http\Controllers;

use App\Models\CarFeature;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CarFeatureController extends Controller
{
   
    public function index()
    {
    $carFeatures = CarFeature::with('car')->orderBy('position','asc')->paginate(10);
    $cars = Car::all();
    // return $carFeatures;
    return view('CarFeature.index', compact('carFeatures','cars'));
    }

    public function store(Request $request)
{
    try {
        $rules = [
            'car_id'      => 'required|exists:cars,id',
            'icon'        => 'required|string|max:255',
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

        $feature = CarFeature::updateOrCreate(
            ['id' => $request->id],
            $request->only(['car_id', 'icon', 'title', 'description'])
        );
    // Set position only for new records
    if (!$request->filled('id')) {
        $feature->position = $feature->id;
        $feature->save();
    }

    return response()->json([
        'success' => true,
        'message' => $request->filled('id') ? 'Car Feature updated successfully' : 'Car Feature added successfully'
    ]);
} catch (\Exception $e) {
    Log::error('Car Feature Store Error: ' . $e->getMessage());
    return response()->json([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage(),
    ], 500);
}
}
    

   public function destroy($id)
    {
        $skill = CarFeature::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Car Feature Deleted successfully']);
    }
    public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            CarFeature::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Car Feature Sorted successfully']);
    }

}
