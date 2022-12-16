
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href=""><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href=""><span class="icon_bag_alt"></span>
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

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('/dashboard') }}">Home</a></li>
                            <li><a href="{{ route ('allproducts') }}">Products</a></li>
                            <li><a href="{{ route ('subProductTest') }}">Sub Products</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.html">Product Details</a></li>
                                    <li><a href="./shop-cart.html">Shop Cart</a></li>
                                    <li><a href="./checkout.html">Checkout</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3">
                    <div class="header__right"> 
                        <div class="offcanvas__widget"> 
                            <div class="container">
                                <div class="row">
                                <li>
              <a  href="{{route('logout')}}" >
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
                                    <div class="header__right__auth">
                                        <a href="#">Login</a>
                                         <a href="#">Register</a>
                                    </div>

                                    <div class="header__right__widget">

                                        <ul class="offcanvas__widget">
                                                        <li><span class="icon_search search-switch"></span></li>

                                                        <div class="dropdown">
                                                    
                                                            <i class="icon_bag_alt" data-toggle="dropdown"aria-hidden="true"></i>  
                                                            <span class="tip">{{ count((array) session('cart')) }}</span>
                                                        

                                                            <div class="dropdown-menu">
                                                                <div class="row total-header-section">
                                                                    @php $total = 0 @endphp
                                                                    @foreach((array) session('cart') as $id => $details)
                                                                        @php $total += $details['price'] * $details['quantity'] @endphp

                                                                        
                                                                    @endforeach
                                                                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                                                        <p>Total Price: <span class="text-info">RM {{ $total }}</span></p>
                                                                    </div>
                                                                
                                                                </div>

                                                                @if(session('cart'))
                                                                    @foreach(session('cart') as $id => $details)
                                                                        <div class="row cart-detail">
                                                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                                            <img src="{{asset($details['photo'])}}" />
                                                                            </div>
                                                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                                                <p>{{ $details['product_name'] }}</p>
                                                                                <span class="price text-info">RM{{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif

                                                                <div class="row">
                                                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                                        <a href="{{ route('viewCartTest') }}" class="btn btn-primary btn-block">View all</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                            

                    </div>
                </div>

            </div>
        </div>
    </header>
