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
 
 public function index()
 {
     $subproduct = SubProducts::all();
     return view('customers.subproduct.cust_subProductTest',compact('subproduct'));

 }

     public function viewCartTest()
    {
        return view('customers.subproduct.cust_cartTest');
    }
    public function addToCart($id)
    {
        $subproduct = SubProducts::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                'product_name' => $subproduct->subProductName,
                'photo' => $subproduct->subProductImage,
                'price' => $subproduct->subProductPrice,
                'quantity' => 1
            ];
        }

 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}