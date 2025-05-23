<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Car::all(),
        ]);
    }

    public function show($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'success' => false,
                'message' => 'Car not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $car,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'merk' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'tahun' => 'required|integer',
                'transmisi' => 'required|string|max:255',
                'kapasitas' => 'required|integer',
                'bahan_bakar' => 'required|string|max:255',
                'warna' => 'required|string|max:255',
                'ac' => 'required|boolean',
                'harga' => 'required|numeric',
                'url_gambar' => 'nullable|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }

        $car = Car::create($validatedData);

        return response()->json([
            'success' => true,
            'data' => $car,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'success' => false,
                'message' => 'Car not found',
            ], 404);
        }

        try {
            $validatedData = $request->validate([
                'merk' => 'sometimes|required|string|max:255',
                'model' => 'sometimes|required|string|max:255',
                'tahun' => 'sometimes|required|integer',
                'transmisi' => 'sometimes|required|string|max:255',
                'kapasitas' => 'sometimes|required|integer',
                'bahan_bakar' => 'sometimes|required|string|max:255',
                'warna' => 'sometimes|required|string|max:255',
                'ac' => 'sometimes|required|boolean',
                'harga' => 'sometimes|required|numeric',
                'url_gambar' => 'sometimes|nullable|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }
        $car->update($validatedData);
        return response()->json([
            'success' => true,
            'data' => $car,
        ]);
    }

    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'success' => false,
                'message' => 'Car not found',
            ], 404);
        }

        $car->delete();

        return response()->json([
            'success' => true,
            'message' => 'Car deleted successfully',
        ]);
    }
}
