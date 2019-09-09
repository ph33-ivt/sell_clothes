@extends('layouts.app')
@section('content')
<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Single Product Page</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="category.html">Category</a>
						<a href="single-product.html">Product Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<!-- <ol class="carousel-indicators">
								@foreach($product->images as $image)
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
									<img src="{{asset($image->path)}}" alt="">
								</li>
								@endforeach
							</ol> -->
							<div class="carousel-inner">
								@foreach($product->images as $image)
								<div class="carousel-item active">
									<img class="d-block w-100" src="{{asset($image->path)}}" alt="First slide">
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$product->name}}</h3>
						<h2>{{number_format($product->price)}} <u>đ</u></h2>
						<ul class="list">
							<li>
								<a class="active" href="#">
									<span>Hãng</span> :{{$product->brand}}</a>
							</li>
							<li>
			
								<span>Size</span>

									@foreach($productSizes as $productSize)
										<input type="radio" name="productSize" value="{{$productSize->id}}" >
										<!-- <input type="hidden" name="id"> -->
										<label for="">{{$productSize->size}}</label>
									@endforeach
								
							</li>
						</ul>
						<p>{{$product->description}}</p>
						<div class="product_count">
							<label for="qty">Số lượng:</label>
							<input type="number" name="qty" id="sst" min="1" max="10" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button">
								<i class="lnr lnr-chevron-up"></i>
							</button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button">
								<i class="lnr lnr-chevron-down"></i>
							</button>
						</div>
						<div class="card_area">
							<a class="main_btn" href="{{route('cart.index')}}">Thêm vào giỏ</a>
							<a class="icon_btn" href="#">
								<i class="lnr lnr lnr-diamond"></i>
							</a>
							<a class="icon_btn" href="#">
								<i class="lnr lnr lnr-heart"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection