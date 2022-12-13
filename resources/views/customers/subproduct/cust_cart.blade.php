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
 
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
 
                            <tbody id="cartPage">
                           
@foreach($subproduct as $subproduct)
 
 <tr>
     <td class="cart__product__item">
         <img src="{{asset($subproduct->subProductImage)}}" style="height:80px;">
     </td>
     <td class="cart__product__item">
         <div class="cart__product__item__title">
             <h6>{{$subproduct->subProductName}}</h6>
             <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
             </div>
         </div>
     </td>
     <td class="cart__price">RM{{$subproduct->subProductPrice}}</td>
     <td class="cart__quantity">
         <div class="pro-qty">
             <input type="text" value="1">
         </div>
     </td>
     <td class="cart__total">$ 300.0</td>
     <td class="cart__close"><span class="icon_close"></span></td>
 </tr>
 
 
 
 @endforeach
 
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="#">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a href="#"><span class="icon_loading"></span> Update cart</a>
                    </div>
                </div>
            </div>
 
                </div>
               
                <div class="col-lg-4">
                    <div class="discount__content">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>
 
                    <br><div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 750.0</span></li>
                            <li>Total <span>$ 750.0</span></li>
                        </ul>
                        <a href="{{ route('custCheckout')}}" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
               
               
            </div>
 
         
           
           
        </div>
    </section>
    <!-- Shop Cart Section End -->
 
 
 
 
   
   
</body>
 
</html>@endsection
 
 