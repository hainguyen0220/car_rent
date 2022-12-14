<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index'); 
    }

    public function create()
    {
        return view('admin.blog.add'); 
    }
}
