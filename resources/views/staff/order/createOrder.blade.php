@extends ('frontend.main_master')
@section('content')


<head>

<style>
body {
  background-color: #DCDCDC;
}
</style>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <title>Bootstrap Form Tutorial</title>
</head>

<body class="container bg-secondary">
  <!-- Start Header form -->
  <div style=" margin-top: 200px">
    

  <!-- End Header form -->

  <!-- Start Card -->
  <div class="card">
    <!-- Start Card Body -->

    <div class="card-header">1. Choose Your Options </div> 

    <div class="card-body">
      <!-- Start Form -->
      <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">
       
      
      <!-- Start Input Name -->
      <div class="form-group">
          <label for="inputName">Format</label>
          <select class="form-select" aria-label="Default select example">
                      <option selected>2x2 cm</option>
                      <option value="1">3x3 cm</option>
                      <option value="2">4x4 cm</option>
                      <option value="3">5x5 cm</option>
                      <option value="3">Others</option>

                    </select>   
         </div>
        <!-- End Input Name -->

             
      <!-- Start Input Name -->
        <div class="form-group">
          <label for="inputName">Material Type</label>
          <select class="form-select" aria-label="Default select example">
                      <option selected>Simili Sticker</option>
                      <option value="1">Miracoat Sticker</option>
                     

            </select>      
      </div>        

        <!-- End Input Name -->

        <!-- Start Input Email -->
        <div class="form-group">
          <label for="inputEmail">Finishing</label>
          <select class="form-select" aria-label="Default select example">
                      <option selected>None</option>
                      <option value="1">Glossy</option>         

            </select> 
            </div>
        <!-- End Input Email -->

 
        <!-- Start Input Telephone -->
        <div class="form-group">
          <label for="inputPhone">Sticker Shape</label>
          <select class="form-select" aria-label="Default select example">
                      <option selected>Circle</option>
                      <option value="1">Square</option>         

            </select> 
        </div>

         <!-- Start Input Remark -->
         <div class="form-group">
          <label for="textAreaRemark">Notes</label>
          <textarea class="form-control" name="remark" id="textAreaRemark" rows="2" placeholder="Tell us you want more..."></textarea>
        </div>
        <!-- End Input Remark -->
        <!-- End Input Telephone -->

      
        <hr />      
      </form>
      <!-- End Form -->
    </div>
    <!-- End Card Body -->
  </div>
  </div>











  <body class="container bg-secondary">

  <!-- Start Header form -->
  <div style=" margin-top: 50px">
      <!-- End Header form -->

  <!-- Start Card -->
  <div class="card">
    <!-- Start Card Body -->

    <div class="card-header">2. Select Option Below to Check Price </div> 

    <div class="card-body">
      <!-- Start Form -->
      <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">
       
       <!-- Start Check Room Type -->
       <div class="form-group">
          <legend class="col-form-label pt-0">Choose a Design Type</legend>

          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType" value="type1" required />
            <img src="{{asset('frontend/assets/img/uploaddesign.png')}}" alt="John" style="width:60%">
          </div>


          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType" value="type2" required />
            <img src="{{asset('frontend/assets/img/letusdesign.png')}}" alt="John" style="width:60%">
          </div>
          
        </div>
        <!-- End Check Room Type -->
      
       

      
       

        <hr />


        <!-- Start Submit Button -->
        <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
        <!-- End Submit Button -->
      </form>
      <!-- End Form -->
    </div>
    <!-- End Card Body -->
  </div>
  </div>









  <!-- End Card -->
  <footer>
    <div class="my-4 text-muted text-center">
      <p>© My Company</p>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Start Scritp for Form -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();

  </script>
  <!-- End Scritp for Form -->

  
</body>



        @endsection