@extends('staff.staffMaster')
 
@section('staff')

<head>
   
 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sub Products</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Sub Products</h5>

              <!-- General Form Elements -->

              <form action="{{ route('updateSubProduct', $subproduct->id) }}" method="POST" enctype="multipart/form-data">  
                        @csrf                        
                        
                        <input type="hidden" name="old_image" value="{{$subproduct->subProductImage}}">

                                          
                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Product Category</label>
                            <div class="col-sm-12">
                              <select name="productsId" class="form-select" aria-label="Default select example">
                                <option selected>Select Product Category</option>
                                @foreach($products as $products)  
                                <option value="{{ $products->id }}" {{ $products->id == $subproduct->productsId ? 'selected' : ''}} > {{  $products->productCategory}}</option>
                                @endforeach

                              
                              </select>
                            </div>
                          </div>
                          
                          <div class="mb-3"> 
                              <label for="subProductImage" class="form-label">Product Image</label> 
                              <img src="{{asset($subproduct->subProductImage)}}" style="height:40px;">

                              <input type="file" name="subProductImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductImage}}"> 
                              @error('subProductImage') 
                                  <span class="text-danger">{{$message}}</span> 
                              @enderror 
                          </div>  

                          <div class="mb-3"> 
                                <label for="subProductName" class="form-label">Product Name</label> 
                                <input type="text" name="subProductName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$subproduct->subProductName}}"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 


                          <div class="mb-3"> 
                                <label for="subProductQuantity" class="form-label">Product Quantity</label> 
                                <input type="text" name="subProductQuantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductQuantity}}"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 

                          <div class="mb-3"> 
                                <label for="subProductPrice" class="form-label">Product Price</label> 
                                <input type="text" name="subProductPrice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$subproduct->subProductPrice}}"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 



                          <div class="mb-3"> 
                                <label for="subProductDesc" class="form-label">Product Description</label> 
                                <input type="text" name="subProductDesc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductDesc}}"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 
                    
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Update</button>

                              
                          </div>
                      </form> 

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

 

</body>

</html>
@endsection

    