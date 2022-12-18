<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;
use App\Models\OrderProducts;

use App\Models\Products;
use App\Models\SubProducts;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function CreateOrder(Request $request){

        $orderId = Orders::insertGetId([
            'custId'=>Auth::user()->id,
            'orderName'=>$request->orderName,
            'orderPhone'=>$request->orderPhone,
            'orderEmail'=>$request->orderEmail,
            'orderAddress'=>$request->orderAddress,
            'orderTotalPrice'=>$request->orderTotalPrice,
            'orderUploadReceipt'=>$request->orderUploadReceipt,
            'orderStatus'=>$request->orderStatus,
            'created_at'=>Carbon::now()
        ]);

        $cart = session()->get('cart', []);
        // echo '<pre>';
        // print_r($cart);
        // echo '<pre>';
        // die();

        $d =0;
        foreach($cart as $cart)
        // for($i=0; $i<10; $i++)
        {

            OrderProducts::insert
            ([
                'orderId'=>$orderId,
                'subProductId'=>$request->id[$d],
                'orderQuantity'=>$request->orderQuantity,
                'orderProduct'=>$request->product_name,

                'orderPrice'=>$request->orderPrice,
                'created_at'=>Carbon::now()

            ]);
            $d++;
        };

            
        return Redirect()->back();
    }

  
    public function ViewOrder(){
           
        $orders=Orders::all();
        $orderProducts=OrderProducts::all();

        return view('staff.order.viewOrder',compact('orders','orderProducts'));
    
    }

  

    
}
