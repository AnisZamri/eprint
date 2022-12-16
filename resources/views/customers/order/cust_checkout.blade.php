@extends ('frontend.main_master')
@section('content')

<!DOCTYPE html>
<html lang="zxx">

<body>
  
   
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class=""></span> <a href="#"></a> </h6>
                </div>
            </div>

           
                                            

            
                        <form action="#" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">



                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p><b>Full Name <span></span></b></p>
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                                                     
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                <p><b>Phone Number <span></span></b></p>
                                    <p>+60</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                <br><p><b>Email <span></span></b></p>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>

                          
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                <br><p><b>Address <span></span></b></p>
                                <p>No 1, Jalan Ipoh,51200 Wilayah Persekutuan Kuala Lumpur</p>
                                </div>
                               
                            </div>
                          
                                               
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox"><br><br>
                                        <label for="acc">Ship to a different address?
                                            <input type="checkbox" id="acc" onclick="myFunction()" >
                                            <span class="checkmark"></span>
                                        </label>
                                    
                                </div>
                                    
                            </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div id="text" style="display:none" class="checkout__form__input">

                                        <p>First Name <span>*</span></p>
                                        <input type="text">

                                        <p>Phone Number <span>*</span></p>
                                        <input type="text">
                                
                                        <p>Email <span></span></b></p>
                                        <input type="text">

                                        <br><p>Address <span>*</span></p>
                                        <input type="text">
                            </div>
                        </div>

                    </div>
                </div>


                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Your order</h5>
                                <div class="checkout__order__product">

                                
                                    <ul>
                                        <li>
                                            <span class="top__text">Product</span>
                                            <span class="top__text__right">Total</span>
                                        </li>

                                        @if(session('cart'))
                                             @foreach(session('cart') as $id => $details)

                                            <li>{{ $details['product_name'] }}<span>RM{{ $details['price'] * $details['quantity'] }}</span></li>
                                                                        
                                            @endforeach
                                         @endif

                                   
                                    </ul>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>

                                    @php $total = 0 @endphp

                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                
                                    <li>Subtotal <span>RM{{ $total }}</span></li>
                                <li>Total <span>RM{{ $total }}</span></li>

                                
                                    </ul>
                                </div>
                                <div class="checkout__order__widget">
                                        <p class="text-dark"><b>Upload Receipt</b></p>

                                    <p>Please make your payment directly into our bank account before checkout. Your order status will not be change to "In Process" until the funds have cleared in our account.</p>
                                 <input type="file" name="productImage"  id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                </div>
                                <br><button type="submit" class="site-btn">Place order</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>
        <!-- Checkout Section End -->

     

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            cilisis.</p>
                            <div class="footer__payment">
                                <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                                <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                                <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                                <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                                <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer__widget">
                            <h6>Quick links</h6>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="footer__widget">
                            <h6>Account</h6>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Orders Tracking</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="footer__newslatter">
                            <h6>NEWSLETTER</h6>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Search Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search End -->


        <script>
function myFunction() {
  var checkBox = document.getElementById("acc");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
    </body>

    </html>

                                      

@endsection
 