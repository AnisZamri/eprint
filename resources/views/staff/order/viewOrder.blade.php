@extends('staff.staffMaster')
 
@section('staff')


<body>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Order</h1>
      
    </div><!-- End Page Title -->

    

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
                  <h5 class="card-title">All  Orders <span>| </span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                    <tr> 
                      <th scope="col">No</th> 
                      <th scope="col">Date/Time</th> 
                      <th scope="col">Name</th> 
                      <th scope="col">Product </th> 
                      <th scope="col">Total Price</th> 
                      <th scope="col">Action</th> 


                    </tr> 

                    </thead>
                    @php($i=1)

                    <tbody>

                    @foreach($orders as $orders) 
                    
                      <tr>
                      
                        <th scope="row">{{$i++}}</th> 
                        <td>{{$orders->created_at}}</td>
                        <td>{{$orders->orderName}}</td>
                        <td>{{ $orderProducts['sub_products']['orderProduct'] }}  </td>

                        <td>{{$orders->orderProduct}}</td>
                        <td>{{$orders->orderTotalPrice}}</td>

                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      @endforeach

                      <tr>
                        <th scope="row">3</a></th>
                        <td>15/11/2022</td>
                        <td>Atikah</td>
                        <td>T-shirt</td>
                        <td>RM99</td>

                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row">4</a></th>
                        <td>11/11/2022</td>
                        <td>Syira</td>
                        <td>Banner</td>
                        <td>RM78</td>

                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row">5</a></th>
                        <td>1/3/2022</td>
                        <td>Amani</td>
                        <td>Sticker</td>
                        <td>RM147</td>

                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>

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


