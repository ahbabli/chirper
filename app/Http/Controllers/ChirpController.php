<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [['author' => 'Ahmed Babli', 'message' => 'Just deployed my fisrt laravel app!', 'time' => '5 minutes ago'], ['author' => ' abo babel', 'message' => 'Laravel is so fun!', 'time' => '1 minutes ago']];
        return view('home', ['chirps' => $chirps]);
    }
}
