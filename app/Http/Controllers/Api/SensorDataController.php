<?php

namespace App\Http\Controllers\Api;

use App\Models\SensorData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SensorDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Menampilkan data (GET)
    public function index()
    {
        $dataSensor = SensorData::all();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $dataSensor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Untuk Input Data (POST)
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sensor_name' => 'required',
            'sensor_value' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        $dataSensor = SensorData::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dimasukan',
            'data' => $dataSensor
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    // Menampilkan sesuai ID (GET)
    public function show(string $id)
    {
        $dataSensor = SensorData::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $dataSensor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // Untuk Update Data (PUT)
    public function update(Request $request, string $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'sensor_name' => 'required',
            'sensor_value' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Temukan data berdasarkan ID
        $dataSensor = SensorData::findOrFail($id);

        // Update data yang ditemukan
        $dataSensor->update($request->all());

        // Kembalikan response sukses
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $dataSensor
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataSensor = SensorData::findOrFail($id);
        $dataSensor->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil Dihapus'
        ], 204);
    }
}
