<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CarController extends Controller
{
   
    public function index()
    {
    $cars = Car::orderBy('position','asc')->paginate(10);
    return view('car.index', compact('cars'));
    }

    public function store(Request $request)
{
    try {
        $rules = [
            'id' => 'nullable|exists:cars,id',
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|integer|max:255',
            'price_per_hour' => 'required|integer|max:255',
            'slug' => 'required|string|max:255|unique:cars,slug,' . $request->id,
            'short_description' => 'required|string',
            'main_image' => $request->filled('id') 
                ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' 
                : 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    
        $messages = [
            'main_image.required' => 'Please upload an image.',
            'main_image.image' => 'File must be an image.',
            // other custom messages if needed
        ];
        $validator = Validator::make($request->all(), $rules, $messages);


    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422);
    }

    if ($request->filled('id')) {
        $car = Car::findOrFail($request->id);
    } else {
        $car = new Car();
    }

    $car->name = $request->name;
    $car->slug = $request->slug;
    $car->model = $request->model;
    $car->price = $request->price;
    $car->price_per_hour = $request->price_per_hour;
    $car->short_description = $request->short_description;

    if ($request->hasFile('main_image')) {
        if (!empty($car->main_image) && \Storage::disk('public')->exists($car->main_image)) {
            \Storage::disk('public')->delete($car->main_image);
        }
        $imagePath = $request->file('main_image')->store('uploads/cars', 'public');
        $car->main_image = $imagePath;
    }

    $car->save();

    // Set position only for new records
    if (!$request->filled('id')) {
        $car->position = $car->id;
        $car->save();
    }

    return response()->json([
        'success' => true,
        'message' => $request->filled('id') ? 'Car updated successfully' : 'Car added successfully'
    ]);
} catch (\Exception $e) {
    Log::error('Car Store Error: ' . $e->getMessage());
    return response()->json([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage(),
    ], 500);
}
}
    

   public function destroy($id)
    {
        $skill = Car::findOrFail($id); // Fetch skill or fail with 404
        $skill->delete();

        return response()->json(['success' => true, 'message' => 'Car Deleted successfully']);
    }
    public function sort(Request $request)
    {
        foreach ($request->order as $item) {
            Car::where('id', $item['id'])->update([
                'position' => $item['position']
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Car Sorted successfully']);
    }
    public function carDetail($slug)
    {
        $car = Car::with([
            'features' => function ($query) {
                $query->orderBy('position', 'asc');
            },
            'luggageGuideline' => function ($query) {
                $query->orderBy('position', 'asc');
            },
            'luggageOption' => function ($query) {
                $query->orderBy('position', 'asc');
            }
        ])
        ->where("slug", $slug)
        ->first();
    
        return view('pages.carDetail', compact('car'));
    }
    
    
}
