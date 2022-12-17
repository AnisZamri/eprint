<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function CreateOrderProduct(){

        OrdersProducts:insert([
            'orderId'=>$request->orderId,
            'productsId'=>$request->productsId,
            'orderQuantity'=>$request->orderQuantity,
            'orderPrice'=>$request->orderPrice,
    
            'created_at'=>Carbon::now()
        ]);

        return redirect()->back();
    }
}
