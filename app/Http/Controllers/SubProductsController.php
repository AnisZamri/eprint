<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;



class SubProductsController extends Controller
{
    public function SubProductsView(){

        $products=Products::orderBy('productName','ASC')->get();
        $subproduct=SubProducts::all();
        return view('staff.products.viewSubProducts',compact('subproduct','products'));
    }

    public function AddSubProducts(Request $request)
    {
        $validatedData = $request->validate([
            //'productName' => ['required', 'unique:products', 'max:255'],
            
        ],
        [
            //'productName.required'=>'Please Input Product Name',
        ]);

        SubProducts::insert([
            'productsId'=>$request->productsId,
            'subProductSticker'=>$request->subProductSticker,
            'subProductBanner'=>$request->subProductBanner,
            'subProductBanting'=>$request->subProductBanting,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->back()->with('success','Category Successful Inserted');
    }

    public function EditSubProduct($id){
        $products=Products::orderBy('productName','ASC')->get();
        $subproduct=SubProducts::findOrFail($id);
        return view('staff.products.editSubProduct',compact('products','subproduct'));
    }

    public function UpdateSubProduct(Request $request, $id){
        $update=SubProducts::find($id)->update([
            'productsId'=>$request->productsId,
                'subProductSticker'=>$request->subProductSticker,
                'subProductBanner'=>$request->subProductBanner,
                'subProductBanting'=>$request->subProductBanting,
                'created_at'=>Carbon::now()
        ]);

    }

};
