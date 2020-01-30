@extends('layouts.master')

@section('content')

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>New flavor</h1>
									<h3>Product name</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis condimentum dapibus. Suspendisse pharetra sem lectus, a interdum eros pellentesque nec. Cras lacus neque, ultrices vitae iaculis quis, imperdiet non quam.</p>
										<div class="add-bag d-flex align-items-center">
										<button class="primary-btn" type="submit">
											<i class="fas fa-plus"></i>
											<span class="add-text text-uppercase text-white">Add to Bag</span>
										</button>
										</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="w-50" src="{{ asset('img/logo.png')}}" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>New flavor</h1>
									<h3>Product name</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis condimentum dapibus. Suspendisse pharetra sem lectus, a interdum eros pellentesque nec. Cras lacus neque, ultrices vitae iaculis quis, imperdiet non quam.</p>
										<div class="add-bag d-flex align-items-center">
										<button class="primary-btn" type="submit">
											<i class="fas fa-plus"></i>
											<span class="add-text text-uppercase text-white">Add to Bag</span>
										</button>
										</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="w-50" src="{{ asset('img/logo.png')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="">
							<div class="product-details">
								<h6 class="text-center">Product name</h6>
								<div class="price text-center">
									<h6>$ 6</h6>
								</div>
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.</small></p>
								<div class="prd-bottom d-flex justify-content-around">
									<button class="btn btn-outline-primary" type="submit">
										<i class="fas fa-plus"></i>
									</button>
									<a href="#" class="btn btn-outline-info">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Best Sellers</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="">
							<div class="bestseller-details">
								<h6 class="text-center">Product name</h6>
								<div class="price text-center">
									<h6>$ 8</h6>
								</div>
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
									dolore
									magna aliqua.</small></p>
								<div class="prd-bottom d-flex justify-content-around">
									<button class="btn btn-outline-primary" type="submit">
										<i class="fas fa-plus"></i>
									</button>
									<a href="#" class="btn btn-outline-info">
										<i class="fas fa-eye"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->
@endsection
