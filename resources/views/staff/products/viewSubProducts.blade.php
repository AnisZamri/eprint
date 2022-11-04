@extends('staff.staffMaster')

@section('staff')
<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('SubProduct') }} 
             
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
    @foreach($subproduct as $subproduct) 
  <tr> 
      <td>{{$subproduct->id}}</td> 
      <td>{{$subproduct->productsId}}</td> 
      <td>{{$subproduct->subProductSticker}}</td> 
      <td>{{$subproduct->subProductBanner}}</td> 
      <td>{{$subproduct->subProductBanting}}</td> 
      
 
 
    </tr> 
    @endforeach 
     
  </tbody> 
</table> 
    </div> 
        </div> 
 
    <div class="col-md-4"> 
    <div class="card"> 
          <div class="card-header">Add Sub Product </div> 
         <div class="card-body"> 
    
         
    <form action="{{ route('addSubProducts')}}" method="POST">  
        @csrf 
  
        <!-- <div class="mb-3"> 
            <label for="exampleInputPassword1" class="form-label">Product Type</label> 
            <select class="form-select" name="productsId" aria-label="Default select example">
                      <option selected="">Select Product</option>
                      <option value="1">Sticker</option>
                      <option value="2">Banner</option>
                      <option value="3">Three</option>
          </select>
        </div>     -->
           
        <div class="mb-3"> 
            <label for="exampleInputPassword1" class="form-label">Product Type</label> 
           <select class="form-select" name="productsId" aria-label="Default select example">
                      <option value="" selected="" disabled="">Select Product</option>
                      
                      @foreach($products as $products)
                      <option style="color: black" value="{{$products->id}}">{{$products->subProductSticker}}</option>
                      @endforeach
            </select>
          </div>    


           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Sticker</label> 
            <input type="text" name="subProductSticker" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
            
            @error('subProductSticker') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
           </div> 

           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Banner</label> 
            <input type="text" name="subProductBanner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
            
            @error('subProductBanner') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
           </div> 

           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Banting</label> 
            <input type="text" name="subProductBanting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
            
            @error('subProductBanting') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
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