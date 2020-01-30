@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Product</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Product</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>Product Name</h3>
                    
                    <h2>$ 6</h2>
                    <ul class="list">
                    <li><a href="#"><span>Category</span> : Category Name</a></li>
                        <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque diam quis lorem dictum tempus ac ac urna. Etiam eros magna, molestie quis bibendum quis, efficitur at est. Curabitur id suscipit lacus. Quisque vehicula placerat erat nec tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean tempor aliquet dui, sed fringilla urna egestas vitae. Suspendisse ut iaculis ipsum, vitae interdum nunc.</p>
                    <div class="card_area d-flex align-items-center">
                            <button class="primary-btn" type="submit">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                 aria-selected="false">Specification</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque diam quis lorem dictum tempus ac ac urna. Etiam eros magna, molestie quis bibendum quis, efficitur at est. Curabitur id suscipit lacus. Quisque vehicula placerat erat nec tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean tempor aliquet dui, sed fringilla urna egestas vitae. Suspendisse ut iaculis ipsum, vitae interdum nunc.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque diam quis lorem dictum tempus ac ac urna. Etiam eros magna, molestie quis bibendum quis, efficitur at est. Curabitur id suscipit lacus. Quisque vehicula placerat erat nec tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean tempor aliquet dui, sed fringilla urna egestas vitae. Suspendisse ut iaculis ipsum, vitae interdum nunc.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque diam quis lorem dictum tempus ac ac urna. Etiam eros magna, molestie quis bibendum quis, efficitur at est. Curabitur id suscipit lacus. Quisque vehicula placerat erat nec tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean tempor aliquet dui, sed fringilla urna egestas vitae. Suspendisse ut iaculis ipsum, vitae interdum nunc.</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Width</h5>
                                </td>
                                <td>
                                    <h5>128mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Height</h5>
                                </td>
                                <td>
                                    <h5>508mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Depth</h5>
                                </td>
                                <td>
                                    <h5>85mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Weight</h5>
                                </td>
                                <td>
                                    <h5>52gm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Quality checking</h5>
                                </td>
                                <td>
                                    <h5>yes</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Freshness Duration</h5>
                                </td>
                                <td>
                                    <h5>03days</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>When packeting</h5>
                                </td>
                                <td>
                                    <h5>Without touch of hand</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Each Box contains</h5>
                                </td>
                                <td>
                                    <h5>60pcs</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->

@stop