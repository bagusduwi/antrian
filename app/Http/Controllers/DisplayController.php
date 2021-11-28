<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
    {
        return view('navigate');
    }

    function antrian()
    {
        return view('antrian.antrian');
    }

    function poli()
    {
        return view('poli.poli');
    }
}
