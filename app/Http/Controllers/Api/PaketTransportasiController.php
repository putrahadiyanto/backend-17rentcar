<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaketTransportasi;

class PaketTransportasiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return response()->json(PaketTransportasi::all());
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $data = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'type' => 'required|string',
            'price_per_day' => 'required|integer',
            'include' => 'required|array',
            'exclude' => 'required|array',
            'is_showing' => 'boolean',
        ]);
        $data['include'] = json_encode($data['include']);
        $data['exclude'] = json_encode($data['exclude']);
        $paket = PaketTransportasi::create($data);
        return response()->json($paket, 201);
    }

    // Display the specified resource.
    public function show($id)
    {
        $paket = PaketTransportasi::findOrFail($id);
        return response()->json($paket);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $paket = PaketTransportasi::findOrFail($id);
        $data = $request->validate([
            'car_id' => 'sometimes|exists:cars,id',
            'type' => 'sometimes|string',
            'price_per_day' => 'sometimes|integer',
            'include' => 'sometimes|array',
            'exclude' => 'sometimes|array',
            'is_showing' => 'boolean',
        ]);
        if (isset($data['include'])) $data['include'] = json_encode($data['include']);
        if (isset($data['exclude'])) $data['exclude'] = json_encode($data['exclude']);
        $paket->update($data);
        return response()->json($paket);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $paket = PaketTransportasi::findOrFail($id);
        $paket->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
