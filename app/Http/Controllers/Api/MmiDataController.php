<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\mmiData;
use Illuminate\Support\Facades\Validator;

class MmiDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Menampilkan data (GET)
    public function index()
    {
        $dataMmi = mmiData::all();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $dataMmi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Untuk Input Data (POST)
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data_mmi' => 'required',
            'level' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        $dataMmi = mmiData::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil dimasukan',
            'data' => $dataMmi
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    // Menampilkan sesuai ID (GET)
    public function show(string $id)
    {
        $dataMmi = mmiData::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $dataMmi
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
            'data_mmi' => 'required',
            'level' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Temukan data berdasarkan ID
        $dataMmi = mmiData::findOrFail($id);

        // Update data yang ditemukan
        $dataMmi->update($request->all());

        // Kembalikan response sukses
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $dataMmi
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataMmi = mmiData::findOrFail($id);
        $dataMmi->delete();
        return response()->json([
            'status' => true,
            'message' => 'Data berhasil Dihapus'
        ], 204);
    }
}
