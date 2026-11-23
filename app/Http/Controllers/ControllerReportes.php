<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerReportes extends Controller
{
    public function index()
    {
        return view('reportes.index');
    }
}
