@extends('customers.subproduct.layout')
    
	@section('content')
		 
	<div class="row">
		@foreach($subproduct as $subproduct)
			<div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
				<div class="img_thumbnail productlist">
				<img src="{{asset($subproduct->subProductImage)}}">
					<div class="caption">
						<h4>{{ $subproduct->subProductName }}</h4>
						<p>{{ $subproduct->subProductDesc}}</p>
						<p><strong>Price: </strong> {{ $subproduct->subProductPrice }}</p>
						<p class="btn-holder"><a href="{{ route('add_to_cart', $subproduct->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
		 
	@endsection