<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function data()
    {
        return view('Grafik.data');
    }
}
