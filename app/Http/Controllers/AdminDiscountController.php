<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    public function index(){
        return view('admin.discount.index');
    }
}
