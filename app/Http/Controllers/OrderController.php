<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function CreateOrder(){

        Orders:insert([
            'custid'=>$request->custid,
            'orderName'=>$request->orderName,
            'orderPhone'=>$request->orderPhone,
            'orderEmail'=>$request->orderEmail,
            'orderAddress'=>$request->orderAddress,
            'orderDate'=>$request->orderDate,
            'orderTotalPrice'=>$request->orderTotalPrice,
            'orderUploadReceipt'=>$request->orderUploadReceipt,
            'orderInvoice'=>$request->orderInvoice,
            'orderStatus'=>$request->orderStatus,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->back();
    }
    
}
