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
</style>

<section id="hero" class="bgimg-1  hero d-flex align-items-center section-bg" >
      <div class="container" style="margin-top:-150px" >
      <div class=" row justify-content-between gy-5" >

        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

        <h1 class="w3-jumbo  w3-hide-small" style="margin-left:-30px" ><b>NEW PACKAGE</b></h1><br>
        <h1 class="w3-jumbo  w3-hide-small" style="margin-left:-30px"><b>STICKER </b></h1><br>

            <h5  style="margin-left:-30px"><b>STARTING RM16.65</b></h5><br>

          <p data-aos="fade-up" data-aos-delay="">THE CHEAPEST PRICE AND HIGH QUALITY YOU CAN GET</p>


          <div class="d-flex" data-aos="fade-up" data-aos-delay="">          

            <a href="{{ route ('allproducts') }}" class="btn-book-a-table">Shop Now</a>
          </div>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start" >
          <img src=" {{asset('frontend/assets/img/homepage.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

       <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">


        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

        <div class="tab-header text-center">
              <h3>Our Products</h3>
        </div>
</div>


<div class="w3-container" style="padding:-50px 16px" text-align="left" color="black">
  
  <div class="w3-row-padding " style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
        <img src="{{asset('frontend/assets/img/product/sticker.png')}}" alt="John" style="width:100%">
        <div class="w3-container">
          <h4><b>Sticker</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM15.96</p>
        </div>
      </div>
    </div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
      <img src="{{asset('frontend/assets/img/product/businesscard.png')}}" alt="Jane" style="width:100%">
        <div class="w3-container">
        <h4><b>Business Card</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM15.96</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
  <img src="{{asset('frontend/assets/img/product/flyers.png')}}" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h4><b>Flyers</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM16</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      <a href="#">
<img src="{{asset('frontend/assets/img/product/rollup.png')}}" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h4><b>Banting</b></h4>
          <p class="w3-opacity">STARTING AT</p>
          <p>RM16</p>
        </div>
      </div>
    </div>
  </div>
</div>


   

  </main><!-- End #main -->
@endsection