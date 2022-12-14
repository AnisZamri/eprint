@extends('customers.subproduct.layout')
    
	@section('content')
		 
	
	<div class="row">

	
<body>
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Women’s </a>
                        <span>Essential structured blazer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


	<div class="container">
    <div class="row">
		@foreach($subproduct as $subproduct)
			
				
		<div class="col-sm">
        <img src="{{asset($subproduct->subProductImage)}}" style="width:350px; heigh:350px; margin-top:50px; margin-left:10px">
        </div>

		<div class="col-sm">            
            
            <div class="product__details__text">
                    <h4>{{$subproduct->subProductName}}</h4>                        
                        <div class="product__details__price">RM{{$subproduct->subProductPrice}}<span>$ 83.0</span></div>
                            <p>{{$subproduct->subProductDesc}}</p>

                            <div class="product__details__widget">
                                <ul>
                                        <li>
                                            <span>Availability:</span>
                                            <div class="stock__checkbox">
                                                <label for="stockin">
                                                    In Stock
                                                    <input type="checkbox" id="stockin">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <span>Available color:</span>
                                            <div class="color__checkbox">
                                                <label for="red">
                                                    <input type="radio" name="color__radio" id="red" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label for="black">
                                                    <input type="radio" name="color__radio" id="black">
                                                    <span class="checkmark black-bg"></span>
                                                </label>
                                                <label for="grey">
                                                    <input type="radio" name="color__radio" id="grey">
                                                    <span class="checkmark grey-bg"></span>
                                                </label>
                                            </div>
                                        </li>

                                        <li>
                                            <span>Available size:</span>
                                            <div class="size__btn">
                                                <label for="xs-btn" class="active">
                                                    <input type="radio" id="xs-btn">
                                                    xs
                                                </label>
                                                <label for="s-btn">
                                                    <input type="radio" id="s-btn">
                                                    s
                                                </label>
                                                <label for="m-btn">
                                                    <input type="radio" id="m-btn">
                                                    m
                                                </label>
                                                <label for="l-btn">
                                                    <input type="radio" id="l-btn">
                                                    l
                                                </label>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <span>Promotions:</span>
                                            <p>Free shipping</p>
                                        </li>
                                </ul>
                            </div>   

                            <div class="product__details__button">
                                                            

                                    <div class="quantity">
                                        <span>Quantity:</span>
                                            <div class="pro-qty">
                                                <input type="number" value="1" name="quantity" id="quantity">
                                            </div>
                                    </div>


                                    <a href="{{ route('add_to_cart', $subproduct->id) }}" class="cart-btn"><span class="icon_bag_alt" role="button"></span> Add to cart</a>

                                <ul>
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                                </ul>
                            </div>
                
                        </div>   

                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <h6>Description</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed</p>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <h6>Specification</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed</p>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <h6>Reviews ( 2 )</h6>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed</p>
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


		
		@endforeach
		</div>

		</div>

	</div>
</body>

	@endsection
	