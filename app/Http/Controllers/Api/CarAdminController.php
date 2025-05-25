<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarAdminController extends Controller
{
    // List all cars (admin view)
    public function index()
    {
        $cars = Car::all();
        return CarResource::collection($cars);
    }

    // Store a new car
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|unique:cars,id',
            'name' => 'required|string',
            'brand' => 'required|string',
            'type' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
            'capacity' => 'required|integer',
            'transmission' => 'required|string',
            'fuelType' => 'required|string',
            'year' => 'required|integer',
            'shortDescription' => 'required|string',
            'description' => 'required|string',
            'features' => 'required|array',
            'isShowing' => 'boolean',
        ]);
        $validated['features'] = json_encode($validated['features']);
        $car = Car::create($validated);
        return new CarResource($car);
    }

    // Show a single car (admin view)
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return new CarResource($car);
    }

    // Update a car
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'brand' => 'sometimes|required|string',
            'type' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
            'image' => 'sometimes|required|string',
            'capacity' => 'sometimes|required|integer',
            'transmission' => 'sometimes|required|string',
            'fuelType' => 'sometimes|required|string',
            'year' => 'sometimes|required|integer',
            'shortDescription' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'features' => 'sometimes|required|array',
            'isShowing' => 'sometimes|boolean',
        ]);
        if (isset($validated['features'])) {
            $validated['features'] = json_encode($validated['features']);
        }
        $car->update($validated);
        return new CarResource($car);
    }

    // Delete a car
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(['message' => 'Car deleted successfully']);
    }
}
