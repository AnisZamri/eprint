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

    <div class="card-header">3. Select our design package </div> 

    <div class="card-body">
      <!-- Start Form -->
      <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">
       
      <!-- Start Check Room Type -->
      <div class="form-group">

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType" value="type1" required />
  <img src="{{asset('frontend/assets/img/designbasic.png')}}" alt="John" style="width:47%">
</div>

<br><br>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType" value="type2" required />
  <img src="{{asset('frontend/assets/img/designstandard.png')}}" alt="John" style="width:46%">
</div>

<br>
<br>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType" value="type2" required />
  <img src="{{asset('frontend/assets/img/designpremium.png')}}" alt="John" style="width:45%">
</div>

</div>
<!-- End Check Room Type -->

        <!-- Start Submit Button -->
        <button style="float:right" class="btn btn-primary btn-block col-lg-2" type="submit">Next</button>
        <!-- End Submit Button -->
      </form>

      
        <hr />      
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