<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;



class SubProductsController extends Controller
{

    //****************************STAFF******************************** */


    public function AddSubProducts(Request $request)
    {
        $validatedData = $request->validate([
            //'productName' => ['required', 'unique:products', 'max:255'],
            
        ],
        [
            //'productName.required'=>'Please Input Product Name',
        ]);

        $subProductImage=$request->file('subProductImage');

        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($subProductImage->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up_location='image/products/';
        $last_img=$up_location.$img_name;
        $subProductImage->move($up_location,$img_name);


             SubProducts::insert([
            'productsId'=>$request->productsId,
            'subProductImage'=>$last_img,
            'subProductName'=>$request->subProductName,
            'subProductQuantity'=>$request->subProductQuantity,
            'subProductDesc'=>$request->subProductDesc,
            'subProductPrice'=>$request->subProductPrice,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->back()->with('success','Category Successful Inserted');
    }

       public function ViewSubProduct(){

        $products=Products::orderBy('productCategory','ASC')->get();
        $subproduct=SubProducts::all();
        return view('staff.subproducts.staff_AddSubProduct',compact('subproduct','products'));
    }

         public function EditSubProduct($id){
        $products=Products::orderBy('productCategory')->get();
        $subproduct=SubProducts::findOrFail($id);
        return view('staff.subproducts.staff_EditSubProduct',compact('subproduct','products'));
    }

    public function UpdateSubProduct(Request $request,$id){
        
        $old_image=$request->old_image;

        $subProductImage=$request->file('subProductImage');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($subProductImage->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/products/';
        $last_img = $up_location.$img_name;
        $subProductImage->move($up_location,$img_name);

        unlink($old_image);
        SubProducts::find($id)->update([
            'productsId'=>$request->productsId,
            'subProductImage'=>$last_img,
            'subProductName'=>$request->subProductName,
            'subProductQuantity'=>$request->subProductQuantity,
            'subProductDesc'=>$request->subProductDesc,
            'subProductPrice'=>$request->subProductPrice,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->route('ViewSubProduct')->with('success','Category Updated Successful');

    }   

    public function DeleteSubProduct($id){
        $delete=SubProducts::find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Succesfully Deleted');
    }

    //****************************CUSTOMER******************************** */

      

    //cust view subproduct details
    public function CustViewSubProductsDetails()
    {

    return view('customers.subproduct.cust_viewSubProductDetails');
    }


    //cust view cart 
    public function CustCart()
    {

    return view('customers.subproduct.cart');
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
    
    
    
    

    

    



};
