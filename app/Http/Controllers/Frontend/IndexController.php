<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $products = Products::all();
        $subproduct=SubProducts::all();
  
        return view('frontend.index',compact('subproduct','products'));
    }

    
}
