<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::latest()->first();

        return view(
            'home',
            ['data' => $data]
        );
    }

    public function store(Request $request)
    {
        // Retrieve query parameters from URL
        $sensor = $request->query('sensor');
        $acceleration_ns = $request->query('acceleration_ns');
        $acceleration_ew = $request->query('acceleration_ew');
        $mmi = $request->query('mmi');

        // Create a new record in the data table
        $record = Data::create(
            // Values to insert
            ['data' => $sensor, 'mmi' => $mmi, 'acceleration_ns' => $acceleration_ns, 'acceleration_ew' => $acceleration_ew]
        );

        // Return the created record as response
        return response()->json($record);
    }

    public function getData()
    {
        $latestData = Data::latest()->take(100)->get();

        return response()->json($latestData);
    }
}
