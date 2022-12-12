<?php

namespace App\Http\Controllers;

use App\Models\SubProducts;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    
 public function CartStore (Request $request)
 {
    $products=SubProducts::findOrFail($request->input(key:'id'));
    Cart::add(
        $products->id,
        $products->name,
        $request->input(key:'quantity'),
        $products->price/100,
    );

    return redirect()->route(route:'custCart')->with('message','Successfully added');

 }
}
