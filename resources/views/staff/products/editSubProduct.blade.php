<x-app-layout> 
 
 
     <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Edit Sub Product') }} 
             
        </h2> 
     </x-slot> 
 
     <div class="py-12"> 
     <div class="container"> 
     <div class="row"> 
 
      
 
    <div class="col-md-8"> 
    <div class="card"> 
          <div class="card-header">Edit product </div> 
         <div class="card-body"> 
    
         <form action="{{url('sub/update/'.$subproduct->id)}}"  method="POST">  

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
                      <option style="color: black" value="{{$products->id}}" {{$products->productCategory}}</option>
                      @endforeach
            </select>
          </div>    


           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Sticker</label> 
            <input type="text" name="subProductSticker" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductSticker}}"> 
            
            @error('subProductSticker') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
           </div> 

           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Banner</label> 
            <input type="text" name="subProductBanner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductBanner}}"> 
            
            @error('subProductBanner') 
                <span class="text-danger">{{$message}}</span> 
            @enderror 
           </div> 

           <div class="mb-3"> 
            <label for="productName" class="form-label">Product Banting</label> 
            <input type="text" name="subProductBanting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductSticker}}">
            
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