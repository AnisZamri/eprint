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

   <main id="main">

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