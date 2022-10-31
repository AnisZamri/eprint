
    <div class="col-md-4"> 
    <div class="card"> 
          <div class="card-header">Add product </div> 
         <div class="card-body"> 
    
    <form action="{{route('addProducts')}}" method="POST"> 
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