@extends ('frontend.main_master')
@section('content')
 <!-- ======= Hero Section ======= 

.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url(" {{asset('frontend/assets/img/header.jpeg')}}");
  min-height: 200%;
}

w3-grayscale-min
-->

 <style>
h1 {font-family: "Open Sans"; font-size: 500%;}
h5 {font-family: "Open Sans"; font-size: 310%;}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  padding-left: 400px; /* Location of the box */
  padding-right: 400px; /* Location of the box */
  left: 10;
  top: 10;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}




</style>

   <main id="main">

   
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


       <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">


        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

        <div class="tab-header text-center">
              <h3>Our Products</h3>
        </div>

<div class="w3-container" style="padding:-50px 16px" text-align="left" color="black">
  
  <div class="w3-row-padding " style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">

      <a href="{{ route('createOrder')}}" >

        <img src="{{asset('frontend/assets/img/product/stickerbiasa.png')}}" alt="John" style="width:100%">
        <div class="w3-container">
          <h4><b>Sticker Sheet</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM15.96</p>
        </div>
      </div>
    </div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
      <img src="{{asset('frontend/assets/img/product/stickerdiecut.png')}}" alt="Jane" style="width:100%">
        <div class="w3-container">
        <h4><b>Sticker Die Cut</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM15.96</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
  <img src="{{asset('frontend/assets/img/product/stickercar.png')}}" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h4><b>Car Window Sticker</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM16</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
<img src="{{asset('frontend/assets/img/product/stickerroll.png')}}" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h4><b>Sticker Roll</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM16</p>
        </div>
      </div>
    </div>
  </div>
</div>


  </main><!-- End #main -->

  
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection