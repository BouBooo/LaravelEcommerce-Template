@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="#" method="POST" id="payment-form">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email Address" readonly>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="province" name="province" placeholder="Country" required>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address line 01" required>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Town/City" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="Postcode/ZIP" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Payement</h3>
                                <!-- Credit Card -->
                            </div>
                        </div>
                        <button id="complete-order" type="submit" class="primary-btn my-3">Proceed to Paiement</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>
                                <li>
                                    <a href="#">
                                        Product Name 
                                        <span class="middle">x 1</span> 
                                        <span class="last">$ 6.00</span>
                                    </a>
                                </li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$ 6.00</span></a></li>
                            <li>
                                <a href="#">Discount (NEWYEAR2020)<span>- $ 1.50</span></a>
                                <form action="#" method="POST">
                                    <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </li>
                            <li><a href="#">New subtitle <span>$ 4.50</span></a></li>
                             
                            <li><a href="#">Tax <span>$ 0.36</span></a></li> 
                            <hr>
                            <li><a href="#">Total <span>$ 4.86</span></a></li>
                        </ul>
                    </div>
                    <div class="coupon my-3">
                        <div class="code">
                            <p>Have a code ?</p>
                            <form action="#" method="POST">
                                <div class="d-flex  align-items-center contact_form">
                                    <input type="text" name="coupon_code" id="coupon_code" class="form-control" placeholder="Coupon Code">
                                    <button class="primary-btn my-3" type="submit">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->

@stop