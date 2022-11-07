 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Abagus Printing<span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href='/dashboard'>Home</a></li>
          <li><a href="{{ route ('allproducts') }}">Products</a></li>

           <!--<li><a href="#about">Product</a></li>-->
           <!-- <li><a href="#menu">Menu</a></li>-->
           <!--<li><a href="#events">Events</a></li>-->
           <!--<li><a href="#chefs">Chefs</a></li>-->
           <!--<li><a href="#gallery">Gallery</a></li>-->
           <!--<li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('allproducts') }}">All</a></li>
               
                <li><a href="#">Sticker</a></li>

                  <li><a href="#">Banner</a></li>
                  <li><a href="#">Banting</a></li>
                  <li><a href="#">Business Card</a></li>
                  <li><a href="#">Flyers</a></li>
                </li>
             
            </ul>
          </li>-->
          <!-- <li><a href="{{ route ('viewLatestProduct') }}">Contact</a></li> -->
          <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                <span>Profile</span>
              </a>
            </li>

          <li><a href="{{ route('logout') }}">Logout</a></li>

          <!--<li><a href="{{ route('profile.show') }}">Profile</a></li></li>-->
        

          
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
