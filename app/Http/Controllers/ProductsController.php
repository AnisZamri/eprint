<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubProducts;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
   
    
    // **********************************staff function***************************************
    public function ViewProduct(){ 
        $product=Products::all();
        return view('staff.products.staff_AddProduct',compact('product'));
    } 


    public function AddProducts(Request $request)
    {
        $validatedData = $request->validate([
            'productCategory' => ['required', 'unique:products', 'max:255'],
            
        ],
        [
            'productCategory.required'=>'Please Input Product Category',
        ]);

        $productImage=$request->file('productImage');

        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($productImage->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up_location='image/products/';
        $last_img=$up_location.$img_name;
        $productImage->move($up_location,$img_name);

        Products::insert([
            'productCategory'=>$request->productCategory,
            'productImage'=>$last_img,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->back()->with('success','Category Successful Inserted');
    }

    public function EditProduct($id){
        $product=Products::find($id);
        return view ('staff.products.staff_EditProduct',compact('product'));
    }

    public function UpdateProduct(Request $request, $id){
            $update=Products::find($id)->update([

            'productName'=>$request->productName,
            'user_id'=>Auth::user()->id,
            'productType'=>$request->productType,
            'productDesc'=>$request->productDesc,
            'productPrice'=>$request->productPrice,
        ]);

        return Redirect()->route('allproducts')->with('success','Category Updated Successful');
    }

    public function DeleteProduct($id){
        $delete=Products::find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Succesfully Deleted');
    }

    // **********************************new section***************************************




    public function AllCustProduct(){
        $product=Products::all();
        return view('customers.product.productList',compact('product'));
    }


    
    public function AllStaffProduct(){ 
        $product=Products::all();
        return view('staff.products.allStaffProduct',compact('product'));
    } 


    public function ViewLatestProducts(){ 
        return view('staff.products.viewLatestProduct');
    } 

    
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }
}