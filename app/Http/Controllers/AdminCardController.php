<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCardController extends Controller
{
    public function index(){
        return view('admin.card.index');
    }
}
