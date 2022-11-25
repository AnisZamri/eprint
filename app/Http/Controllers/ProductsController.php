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
        $products=Products::all();
        return view('staff.products.staff_AddProduct',compact('products'));
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

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($productImage->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/products/';
        $last_img = $up_location.$img_name;
        $productImage->move($up_location,$img_name);

        Products::insert([
            'productCategory'=>$request->productCategory,
            'productImage'=>$last_img,
            'created_at'=>Carbon::now()
        ]);

        return Redirect()->back()->with('success','Category Successful Inserted');
    }

    public function EditProduct($id){
        $products=Products::findOrFail($id);

       return view('staff.products.edit',compact('products'));
    }

    public function UpdateProduct(Request $request, $id){
            
        $validatedData = $request->validate([
            'productCategory' => 'required|max:255',
        ],

        [
            'productCategory.required'=>'Please Input Product Category',
        ]);

        $old_image=$request->old_image;


        $productImage=$request->file('productImage');

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($productImage->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/products/';
        $last_img = $up_location.$img_name;
        $productImage->move($up_location,$img_name);

        unlink($old_image);
        Products::find($id)->update([

            'productCategory'=>$request->productCategory,
            'productImage'=>$last_img,
            'created_at'=>Carbon::now()
            ]);

        return Redirect()->route('ViewProduct')->with('success','Category Updated Successful');
    }

    public function DeleteProduct($id){
        $delete=Products::find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Succesfully Deleted');
    }

    // **********************************new section***************************************

    // **********************************customer function***************************************



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