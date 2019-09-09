@extends('layouts.app')
@section('content')
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Product Checkout</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="checkout.html">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
						<h3>Chi tiết thanh toán</h3>
						<form class="row contact_form" action="#" method="post" novalidate="novalidate">
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" id="first" name="name">
								<span class="placeholder" data-placeholder="Họ"></span>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" id="last" name="name">
								<span class="placeholder" data-placeholder="Tên"></span>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" id="number" name="number">
								<span class="placeholder" data-placeholder="Số điện thoại"></span>
							</div>
							<div class="col-md-6 form-group p_star">
								<input type="text" class="form-control" id="email" name="compemailany">
								<span class="placeholder" data-placeholder="Địa chỉ Email"></span>
							</div>
							<div class="col-md-12 form-group p_star">
								<select class="country_select">
									<option value="1">Country</option>
									<option value="2">Country</option>
									<option value="4">Country</option>
								</select>
							</div>
							<div class="col-md-12 form-group p_star">
								<input type="text" class="form-control" id="add1" name="add1">
								<span class="placeholder" data-placeholder="Address line 01"></span>
							</div>
							<div class="col-md-12 form-group p_star">
								<input type="text" class="form-control" id="add2" name="add2">
								<span class="placeholder" data-placeholder="Address line 02"></span>
							</div>
							<div class="col-md-12 form-group p_star">
								<input type="text" class="form-control" id="city" name="city">
								<span class="placeholder" data-placeholder="Town/City"></span>
							</div>
							<div class="col-md-12 form-group p_star">
								<select class="country_select">
									<option value="1">District</option>
									<option value="2">District</option>
									<option value="4">District</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
							</div>
							<!-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Create an account?</label>
								</div>
							</div> -->
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<h3>Chi tiết phí vận chuyển</h3>
									<input type="checkbox" id="f-option3" name="selector">
									<label for="f-option3">Gửi hàng đến một địa điểm khác?</label>
								</div>
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
							</div>
						</form>
					</div>
					<div class="col-lg-4">
						<div class="order_box">
							<h2>Đơn hàng</h2>
							<ul class="list">
								<li>
									<a href="#">Sản phẩm
										<span>Tổng</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Blackberry
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Tomatoes
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
								<li>
									<a href="#">Fresh Brocoli
										<span class="middle">x 02</span>
										<span class="last">$720.00</span>
									</a>
								</li>
							</ul>
							<ul class="list list_2">
								<li>
									<a href="#">Subtotal
										<span>$2160.00</span>
									</a>
								</li>
								<li>
									<a href="#">Shipping
										<span>Flat rate: $50.00</span>
									</a>
								</li>
								<li>
									<a href="#">Total
										<span>$2210.00</span>
									</a>
								</li>
							</ul>
							<div class="payment_item">
								<div class="radion_btn">
									<input type="radio" id="f-option5" name="selector">
									<label for="f-option5">Kiểm tra thanh toán</label>
									<div class="check"></div>
								</div>
								<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
							</div>
							<div class="payment_item active">
								<div class="radion_btn">
									<input type="radio" id="f-option6" name="selector">
									<!-- <label for="f-option6">Paypal </label>
									<img src="img/product/single-product/card.jpg" alt="">
									<div class="check"></div> -->
								</div>
								<p>Vui lòng gửi séc đến Tên Cửa hàng, Phố Cửa hàng, Cửa hàng Thị trấn, Cửa hàng Bang / Quận, Mã bưu điện.</p>
							</div>
							<div class="creat_account">
								<input type="checkbox" id="f-option4" name="selector">
								<label for="f-option4">Tôi đã đọc và chấp nhận các </label>
								<a href="#">điều khoản & điều kiện *</a>
							</div>
							<a class="main_btn" href="#">Thanh toán</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
