<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\SubProducts;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    
   
    public function index()
    {
        $subproduct = SubProducts::all();
        return view('customers.subproduct.cust_subProductTest',compact('subproduct'));
    }

     public function viewCartTest()
    {
        return view('customers.subproduct.cust_cart');
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

    public function CustCheckout()
    {  
        $users=User::all();
       return view ('customers.order.cust_checkout',compact('users'));

           
    }
}