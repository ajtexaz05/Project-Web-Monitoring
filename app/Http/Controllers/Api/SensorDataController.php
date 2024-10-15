<?php

namespace App\Http\Controllers\Api;

use App\Models\SensorData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SensorDataController extends Controller
{
    // GET
    public function index()
    {
        return response()->json(SensorData::all(), 200);
    }

    // POST
    public function store(Request $request)
    {
        $request->validate([
            'sensor_value' => 'required|numeric',
        ]);

        $sensorData = SensorData::create($request->all());

        return response()->json($sensorData, 201);
    }

    // GET
    public function show(string $id)
    {
        $sensorData = SensorData::find($id);

        if (!$sensorData) {
            return response()->json(['message' => 'Data Sensor Tidak Ditemukan '], 404);
        }

        return response()->json($sensorData, 200);
    }

    // PUT
    public function update(Request $request, string $id)
    {
        $sensorData = SensorData::find($id);

        if (!$sensorData) {
            return response()->json(['message' => 'Data Sensor Tidak Ditemukan'], 404);
        }

        $request->validate([
            'sensor_value' => 'sometimes|required|numeric',
        ]);

        $sensorData->update($request->all());

        return response()->json($sensorData, 200);
    }

    // DELETE
    public function destroy(string $id)
    {
        $sensorData = SensorData::find($id);

        if (!$sensorData) {
            return response()->json(['message' => 'Data Sensor Tidak Ditemukan'], 404);
        }

        $sensorData->delete();

        return response()->json(['message' => 'Data Sensor Sukses Dihapus'], 200);
    }
}
