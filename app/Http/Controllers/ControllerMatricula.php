<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMatricula extends Controller
{
    public function index()
    {
        return view('matricula.index');
    }
    public function store()
    {
        return view('matricula.store');
    }
}
