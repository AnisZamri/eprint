<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $products = Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::all();
  
        return view('frontend.index',compact('subproduct','products'));
    }

    public function CustViewSubProduct(){

        $products=Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::all();
        return view('customers.subproduct.cust_viewSubProduct.blade',compact('subproduct','products'));
    }
}
