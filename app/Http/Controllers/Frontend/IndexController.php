<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Products;
use App\Models\SubProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class IndexController extends Controller
{
    public function index(){
        $products = Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::orderBy('id','DESC')->get();
        return view('frontend.index',compact('subproduct','products'));        

    }

    public function ViewCustSubProduct($id){
        $subproduct=SubProducts::where('productsId',$id)->get();
        return view('customers.subproduct.cust_viewSubProduct',compact('subproduct'));
    }
    
     //cust view subproduct details
     public function CustViewSubProductsDetails($id){
        $subproduct=SubProducts::where('id',$id)->get();
        return view('customers.subproduct.cust_viewSubProductDetails',compact('subproduct'));
     }

   
    //cust view cart 
    public function CustCart()
    {
    return view('customers.subproduct.cust_cart');
    }

   

    
}
