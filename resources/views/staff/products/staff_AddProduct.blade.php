@extends('staff.staffMaster')


<body>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

              <!-- Basic Modal -->
              <button type="button"  style="float:right" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Add Product
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Product</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

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
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>

                    </form> 
        </div>
      </div>
    </section>

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