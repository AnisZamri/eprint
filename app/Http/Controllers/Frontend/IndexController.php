<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index($id){
        $products = Products::orderBy('productCategory','ASC')->get();
        
        return view('frontend.index',compact('products'));
    }
}
