@extends('layouts.master')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Orders</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Orders</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<div class="container my-5">
    <div class="orders">
        <h2 class="text-center">Orders Details</h2>
        <div class="table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <i class="fas fa-receipt"></i>
                    Order #5412
                </h4>
                <h4>Date : 22/12/2020</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td>x 1</td>
                        <td>$ 6</td>
                    </tr>
                    <tr>
                        <td><b>Subtotal</b></td>
                        <td></td>
                        <td>$ 6</td>
                    </tr>
                    <tr>
                        <td><b>Tax</b></td>
                        <td></td>
                        <td>$ 0.85</td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td></td>
                        <td>$ 6.85</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop