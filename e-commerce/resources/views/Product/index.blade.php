@extends('index')

@section('content')
 <div>	
	<link rel="stylesheet" type="text/css" href="css/product_list.css">
<div class="wrapper">


	<div class="content">
		<!-- content here -->
		<div class="product-grid product-grid--flexbox">
			<div class="product-grid__wrapper">
				<!-- Product list start here -->

				<!-- Single product -->
				@foreach($products as $key=>$value)
				<div class="product-grid__product-wrapper">
					<div class="product-grid__product">
						<div class="product-grid__img-wrapper">			
							<img src="{{$value->image_url}}" alt="Img" class="product-grid__img" />
						</div>
						<span class="product-grid__title">{{$value->name}}</span>
						<span class="product-grid__price">{{$value->price}}</span>
						<div class="product-grid__extend-wrapper">
							<div class="product-grid__extend">
								<p class="product-grid__description">{{$value->description}}</p>

								
								<a href="		" >
												<span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>	

								</a>
									
								
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- end Single product -->



	<footer>
		<a target="_blank" href="https://twitter.com/ricardpanades">@ricardpanades</a>
	</footer>
</div>

 </div>

@endsection

