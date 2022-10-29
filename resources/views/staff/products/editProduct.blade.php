<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Edit Product') }} 
             
        </h2> 
     </x-slot> 
 
     <div class="py-12"> 
     <div class="container"> 
     <div class="row"> 
 
      
 
    <div class="col-md-8"> 
    <div class="card"> 
          <div class="card-header">Edit product </div> 
         <div class="card-body"> 
    
    <form action="{{url('products/update/'.$product->id)}}" method="POST"> 
        @csrf 
  
   <div class="mb-3"> 
    <label for="productName" class="form-label">Product Name</label> 
    <input type="text" name="productName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->productName}}"> 
     
    @error('productName') 
        <span class="text-danger">{{$message}}</span> 
    @enderror 
</div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Product Type</label> 
    <input type="text" name="productType" class="form-control" id="exampleInputPassword1" value="{{$product->productType}}"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Description</label> 
    <input type="text" name="productDesc" class="form-control" id="exampleInputPassword1" value="{{$product->productDesc}}"> 
  </div> 
 
  <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Price</label> 
    <input type="text" name="productPrice" class="form-control" id="exampleInputPassword1" value="{{$product->productPrice}}"> 
  </div> 
 
  
   <button type="submit" class="btn btn-primary ">Update Product</button> 
</form> 
 
</div> 
     </div> 
    </div> 
 
          </div> 
    </div> 
</x-app-layout>