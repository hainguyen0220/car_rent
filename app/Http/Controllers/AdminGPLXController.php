<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGPLXController extends Controller
{
    public function index(){
        return view('admin.gplx.index');
    }
}
