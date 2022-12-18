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

            

            <form action="{{ route('createOrder')}}" method="POST" enctype="multipart/form-data"  class="checkout__form">

            @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p><b>Full Name <span></span></b></p>
                                    <input type="text" name="orderName"  id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name }}" > 
                                 
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                <p><b>Phone Number <span></span></b></p>
                                    <input type="text" name="orderPhone"  id="exampleInputEmail1" aria-describedby="emailHelp" value="60"> 

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                <br><p><b>Email <span></span></b></p>
                                    <input type="text" name="orderEmail"  id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}"> 

                                </div>
                            </div>
                          
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                <br><p><b>Address <span></span></b></p>
                                <input type="text" name="orderAddress"  id="exampleInputEmail1" aria-describedby="emailHelp" value="No 1, Jalan Ipoh,51200 Wilayah Persekutuan Kuala Lumpur"> 

                                </div>
                               
                            </div>

                            <input type="text" name="orderStatus"  id="exampleInputEmail1" aria-describedby="emailHelp" value="pending" hidden> 

                                               
                         

                       

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

                                            <input type="text" name="subProductId"  id="subProductId" aria-describedby="emailHelp" value="{{$id}}" > 

                          
                                            @endforeach
                                         @endif


                                    </ul>
                                </div>



                              

                                <div class="checkout__order__total">
                                    <ul>

                                        @php $total = 0 @endphp

                                        @foreach((array) session('cart') as $id => $details)
                                        <input type="text" name="orderQuantity"  id="orderQuantity" aria-describedby="emailHelp" value="{{$details['quantity']}}" hidden>                                
                                 <input type="text" name="orderPrice"  id="orderPrice" aria-describedby="emailHelp" value="{{$details['price']}}" hidden> 

                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach
                                    
                                        
                                        <li>Subtotal <span>RM{{ $total }}</span></li>
                                        <input type="text" name="orderTotalPrice"  id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $total }}" hidden> 
                                     
                                        <li>Total <span>RM{{ $total }}</span></li>
                                
                                    </ul>
                                </div>

                                <div class="checkout__order__widget">
                                    <p class="text-dark"><b>Upload Receipt</b></p>

                                    <p>Please make your payment directly into our bank account before checkout. Your order status will not be change to "In Process" until the funds have cleared in our account.</p>
                                    <input type="file" name="orderUploadReceipt"  id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                </div>
                            
                               






                                <br><button type="submit" class="site-btn">Place order</button>
                                
                            </div>
                        </div>
                    </div>
            </form>

            </div>
        </section>
        <!-- Checkout Section End -->

     

    



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
 