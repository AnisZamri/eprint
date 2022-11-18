<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abagus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="  {{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="  {{asset('frontend/assets/css/main.css')}} " rel="stylesheet">

  
  <!-- Asher CSS Files -->
  <link href="  {{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/elegant-icons.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/owl.corousel.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/slicknav.min.css')}}" rel="stylesheet">
  <link href="  {{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

 
</head>

<body>

   <!-- Offcanvas Menu Begin -->
   <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->
    
    
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href=" {{asset('frontend/assets/img/ablogo.png')}}"><img src=" {{asset('frontend/assets/img/ablogo.png')}}" width="25%" style="margin-top:-30px" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                        <li><a href='/dashboard'>Home</a></li>
                       <li><a href="{{ route ('allproducts') }}">Products</a></li>

                                    <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                                <span>Profile</span>
                            </a>
                            </li>

                        <li><a href="{{ route('logout') }}">Logout</a></li>


                                            <!-- <li><a href="#">Men’s</a></li>
                            <li class="active"><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="./shop-cart.html">Shop Cart</a></li>
                                    <li><a href="./checkout.html">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul> -->
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
@yield('content')
 

  


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="  {{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="  {{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    <!-- Asher Template Main JS File -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>

    


</body>

</html>