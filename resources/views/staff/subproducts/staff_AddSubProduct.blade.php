@extends('staff.staffMaster')
 
@section('staff')


<body>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sub Products</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="">


               <!-- Add Modal -->
               <div style="float:right">
                <button type="button"  style="margin-bottom:10px" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                  Add Sub Product
                </button>
              </div>


              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Sub Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">

                      <form action="{{ route('addSubProducts')}}" method="POST" enctype="multipart/form-data">  
                          @csrf 
                                          
                          <div class="row mb-3">
                            <label class="col-sm-12 col-form-label">Product Category</label>
                            <div class="col-sm-12">
                              <select name="productsId" class="form-select" aria-label="Default select example">
                                <option selected>Select Product Category</option>
                                @foreach($products as $products)  
                                     <option value="{{$products->id}}">{{$products->productCategory}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          
                          <div class="mb-3"> 
                              <label for="subProductImage" class="form-label">Sub Product Image</label> 
                              <input type="file" name="subProductImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                              
                              @error('productImage') 
                                  <span class="text-danger">{{$message}}</span> 
                              @enderror 
                          </div>  
                                                                         
                          <div class="mb-3"> 
                                <label for="subProductName" class="form-label">Product Name</label> 
                                <input type="text" name="subProductName" class="form-control" id="subProductName" aria-describedby="emailHelp" > 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 
                       
                                    
                          <div class="mb-3"> 
                                <label for="subProductQuantity" class="form-label">Product Quantity</label> 
                                <input type="text" name="subProductQuantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 

                          <div class="mb-3"> 
                                <label for="subProductPrice" class="form-label">Product Price</label> 
                                <input type="text" name="subProductPrice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 

                
                                                
                          <div class="mb-3"> 
                                <label for="subProductDesc" class="form-label">Product Description</label> 
                                <input type="text" name="subProductDesc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                @error('productName') 
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                          </div> 

                     
                                              
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Add Product</button>
                          </div>

                      </form> 
                    </div>
                  </div>
                </div>
              </div>
    </section>


            @if (session('success'))

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong> 

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                </div>

            @endif


         

           


          <!-- Recent Sales -->
    <div class="col-12">
              <div class="card recent-sales overflow-auto">

               

                <div class="card-body">
                  <h5 class="card-title">All Sub Products <span>| </span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                    <tr> 
                      <th scope="col">No</th> 
                      <th scope="col">Product Category</th> 
                      <th scope="col">Product Image</th> 
                      <th scope="col">Product Name</th> 
                      <th scope="col">Product Description</th> 
                      <th scope="col">Product Price</th> 
                      <th scope="col">Action</th> 


                    </tr> 

                    </thead>
                    @php($i=1)

                    <tbody> 
                        @foreach($subproduct as $subproduct) 
                          <tr> 
                          <td>{{$i++}}</td> 
                            <td>{{ $subproduct['products']['productCategory'] }}  </td>
                            <td><img src="{{asset($subproduct->subProductImage)}}" style="height:40px;"></td> 
                            <td>{{$subproduct->subProductName}}</td> 
                            <td>{{$subproduct->subProductDesc}}</td> 
                            <td>{{$subproduct->subProductPrice}}</td> 
                            
                            <td>
                              <a href=" {{ route('editSubProduct', $subproduct->id ) }}"class="btn btn-secondary">Edit</a> 
                                <a href="{{url('sub/delete/'.$subproduct->id)}}"class="btn btn-danger">Delete</a> 
                            </td> 

                          </tr> 
                        @endforeach 
                    </tbody>

                      
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

  </main><!-- End #main -->

    

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

@endsection
