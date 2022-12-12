<?php

namespace App\Http\Controllers;
use App\Components\Recusive;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    private $category;
    

    public function __construct(Category $category)
    {
        
        $this->category = $category;

    }


    public function index()
    {
        return view('admin.car.index'); 
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentID='');

        return view('admin.car.add', compact('htmlOption')); 
    }

    public function getCategory($parentID){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption =$recusive->categoryRecusive($parentID);
        return $htmlOption;
    }
}
