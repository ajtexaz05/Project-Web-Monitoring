<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class HomeScreen extends Controller
{
    public function index()
    {
        // $data = Data::latest()->first();

        // return view(
        //     'home',
        //     ['data' => $data]
        // );

        return view('HomeScreen/homeScreen'); // Ganti 'home' dengan nama view Anda
    }
}
