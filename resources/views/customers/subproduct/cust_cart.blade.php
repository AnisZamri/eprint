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
                                    <th style="width:15%"></th>
                                    <th style="width:15%">Product</th>
                                    <th>Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
 
                            <tbody id="cartPage">
                            @php $total = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr data-id="{{ $id }}">
                                                <td data-th="Image">
                                                    <div class="row">
                                                        <div class=""><img src="{{asset($details['photo'])}}" style="height:80px" /></div>
                                                       
                                                    </div>
                                                </td>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-9">
                                                            <h6 class="nomargin">{{ $details['product_name'] }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">RM{{ $details['price'] }}</td>

                                                <td data-th="Quantity">
                                                    
                                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                                                </td>

                                                <td data-th="Subtotal" class="text-center">RM{{ $details['price'] * $details['quantity'] }}</td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                        
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

@section('scripts')
<script type="text/javascript">
   
    $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>
@endsection
 
 