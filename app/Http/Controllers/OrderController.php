<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;

use App\Models\Products;
use App\Models\SubProducts;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function CreateOrder(Request $request){

        Orders::insert([
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

       

        return Redirect()->back();
    }
    
}
