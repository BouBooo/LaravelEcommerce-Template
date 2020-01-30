@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">    
            <h2>1 item(s) in shopping cart</h2> 
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="dol">About</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <a href="#">
                                            <img class="img-thumbnail w-20" src="{{ asset('img/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media-body">
                                    <h4>Product Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum lacinia sem in laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec sed tortor quis neque pharetra venenatis. Curabitur vehicula fermentum placerat. Maecenas rhoncus augue ac erat pharetra ultrices. Sed consectetur in eros sit amet scelerisque.</p>
                                </div>
                            </td>
                            <td>
                            <h5>$ 6</h5>
                            </td>
                            <td>
                                <div class="product_count"> 
                                <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-link">Remove</button>
                                <button type="submit" class="btn btn-link">Save for later</button>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td class="border">
                                <h5>Subtotal</h5>
                                <p>Taxe</p>
                                <h4>Total</h4>
                            </td>
                            <td class="border">
                                <h5>6.00</h5>
                                <p>0.85</p>
                                <h4>6.85</h4>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="checkout_btn_inner d-flex align-items-center justify-content-around mb-3">
                    <a class="gray_btn" href="#">Continue Shopping</a>
                    <a class="primary-btn" href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-slider">
        <div class="container">
            <h2 class="text-center my-5">1 item(s) saved for later !</h2> 
            <div class="row">
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="">
                            <div class="product-details">
                                <h6>Product Name</h6>
                                <div class="price">
                                    <h6>$ 8</h6>
                                </div>
                                <div class="prd-bottom">
                                    <button type="submit" class="btn btn-link">Remove</button>
                                    <button type="submit" class="btn btn-link">Move to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->

@stop