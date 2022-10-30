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

 <section id="hero" class="bgimg-1  hero d-flex align-items-center section-bg">
  
  
    <div class="container">
      <div class=" row justify-content-between gy-5">

        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">

        <h1 class="w3-jumbo  w3-hide-small"><b>NEW PACKAGE STICKER </b></h1><br>
        <div class="font-size: 200%;">
            <h5><b>4CM 530PCS <br>RM53</b></h5><br>
         </div>

          <p data-aos="fade-up" data-aos-delay="">THE CHEAPEST PRICE AND HIGH QUALITY YOU CAN GET</p>


          <div class="d-flex" data-aos="fade-up" data-aos-delay="">
            <a href="#book-a-table" class="btn-book-a-table">Shop Now</a>
          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
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


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection