<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;



class SubProductsController extends Controller
{

     //cust view subproduct
    public function ViewSubProduct(){

        $products=Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::all();
        return view('staff.subproducts.staff_AddSubProduct',compact('subproduct','products'));
    }

    public function SubProductsView(){

        $products=Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::all();
        return view('staff.products.viewSubProducts',compact('subproduct','products'));
    }

    
    //cust view subproduct
    public function SubProductsCustView(){

        return view('customers.product.allCustSubProduct');
    }
    
    public function CreateOrder(){

        return view('staff.order.createOrder');
    }
    
       
    public function DesignOrder(){

        return view('staff.order.designOrder');
    }
    
    //cust view subproduct
    public function ViewStaffOrder(){

        return view('staff.order.viewStaffOrder');
    }

  

     //staff delete order

    public function StaffDeleteOrder(){
        $delete=SubProducts::find()->forceDelete();
        return Redirect()->back()->with('success','Category Succesfully Deleted');
    }
    
    
     //cust add cart

     public function ViewCart(){
        return view('staff.order.viewCart');
    }
    
       //cust checkout

       public function Checkout(){
        return view('staff.order.checkout');
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

    public function DeleteSubProduct($id){
        $delete=SubProducts::find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Succesfully Deleted');
    }


};
