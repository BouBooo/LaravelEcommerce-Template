@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Contact Us</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Contact</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<div class="container mt-5">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Browse Categories</div>
				<ul class="main-categories">
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="#">
							Category Name<span class="number">( 5 )</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sidebar-categories mb-5">
				<div class="head">Price</div>
				<ul class="main-categories">
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="">
							< $5
						</a>
					</li>
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="#">
							$6 - $10
						</a>
					</li>
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="#">
							$11 - $15
						</a>
					</li>
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="#">
							$16 - $20
						</a>
					</li>
					<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable">
						<a href="#">
							> $20
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="dropdown">
						<a class="btn" href="#">Low to high</a>
						<a class="btn" href="#">High to low</a>
				</div>
				<div class="pagination ml-auto">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<!-- single product -->
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<a href="#">
								<img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="">
							</a>
							<div class="product-details">
								<h6>Product Name</h6>
								<div class="price">
									<h6>$ 6</h6>
								</div>
								<div class="prd-bottom">
									<button class="btn btn-outline-primary social-info" type="submit">
										<i class="fas fa-plus"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Best Seller -->
		</div>
	</div>
</div>

@stop