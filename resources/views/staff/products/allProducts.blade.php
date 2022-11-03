@extends('staff.staffMaster')

@section('staff')
<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Product') }} 
             
        </h2> 
     </x-slot> 
 
     <div class="py-12"> 
        </div> 
 
     <div class="container"> 
         <div class="row"> 
 
         <div class="col-md-8"> 
            <div class="card"> 

            @if (session('success'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

            <div class="card-header">All Category </div> 
       
         <table class="table"> 
  <thead> 
    <tr> 
      <th scope="col">No</th> 
      <th scope="col"> Name</th> 
      <th scope="col">Product Name</th> 
      <th scope="col">Type</th> 
      <th scope="col">Description</th> 
      <th scope="col">Price</th> 
      <th scope="col">Action</th> 
 
 
    </tr> 
  </thead> 
 
  <tbody> 
    @foreach($product as $product) 
  <tr> 
      <td>{{$product->id}}</td> 
      <td>{{$product->user->name}}</td> 
      <td>{{$product->productName}}</td> 
      <td>{{$product->productType}}</td> 
      <td>{{$product->productDesc}}</td> 
      <td>{{$product->productPrice}}</td> 
      <td> 
        <a href="{{url('products/edit/'.$product->id)}}"class="btn btn-info">Edit</a> 
        <a href="{{url('products/delete/'.$product->id)}}"class="btn btn-danger">Delete</a> 
 
      </td> 
 
 
    </tr> 
    @endforeach 
     
  </tbody> 
</table> 
    </div> 
        </div> 
 
    <div class="col-md-4"> 
    <div class="card"> 
          <div class="card-header">Add product </div> 
         <div class="card-body"> 
    
    <form action="{{ route('addProducts')}}" method="POST">  
        @csrf 
  
   <div class="mb-3"> 
    <label for="productName" class="form-label">Product Name</label> 
    <input type="text" name="productName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
     
    @error('productName') 
        <span class="text-danger">{{$message}}</span> 
    @enderror 
</div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Product Type</label> 
    <input type="text" name="productType" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Description</label> 
    <input type="text" name="productDesc" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Price</label> 
    <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1"> 
  </div> 
 
  
   <button type="submit" class="btn btn-primary ">Add Product</button> 
</form> 
 
</div> 
     </div> 
    </div> 
 
          </div> 
    </div> 
</x-app-layout>

@endsection