<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGaraController extends Controller
{
    public function index()
    {
        return view('admin.gara.index'); 
    }

    public function create()
    {
        return view('admin.gara.add'); 
    }
}
