<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve query parameters from URL
        $sensor = $request->query('sensor');
        $mmi = $request->query('mmi');

        // Create a new record in the data table
        $record = Data::create(
            // Values to insert
            ['data' => $sensor, 'mmi' => $mmi]
        );

        // Return the created record as response
        return response()->json($record);
    }
}
