@extends('staff.staffMaster')
 
 @section('staff')
 @section('modaledit')

 <!-- MODAL UPDATE PRODUCT -->

     <div class="modal fade" id="basicModalEdit" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>


                    <div class="modal-body">
                           
                    <form action="{{ route('addSubProducts') }}" method="POST" enctype="multipart/form-data">  
                        @csrf 

                        <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Product Category</label>
                            <div class="col-sm-12">
                              <select name="productsId" class="form-select" aria-label="Default select example">
                                <option selected>Select Product Category</option>
                                @foreach($products as $product)  
                                <option value="{{$products->id}}">{{$products->productCategory}}</option>

                                @endforeach
                              </select>
                            </div>
                          </div>
                                            
                          <div class="mb-3"> 

                              <label for="subProductImage" class="form-label">Product Image</label> 
                              <img src="{{asset($subproduct->subProductImage)}}" style="height:40px;">
                              <input type="file" name="subProductImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$subproduct->subProductImage}}"> 
                              @error('productImage') 
                                  <span class="text-danger">{{$message}}</span> 
                              @enderror 
                          </div>  
                        
                          <div class="mb-3"> 
                                <label for="subProductName" class="form-label">Product Name</label> 
                                <input type="text" name="subProductName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductName}}"> 
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
                                <label for="subProductDesc" class="form-label">Product Description</label> 
                                <input type="text" name="subProductDesc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductDesc}}"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 

                          <div class="mb-3"> 
                                <label for="subProductPrice" class="form-label">Product Price</label> 
                                <input type="text" name="subProductPrice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$subproduct->subProductPrice}}"> 
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
