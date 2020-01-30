@extends('layouts.master')

@section('content')

{!! Breadcrumbs::render('confirmation') !!}

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Thank you. Your order has been received.</h3>
        <div class="row order_d_inner">
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Order Info</h4>
                    <ul class="list">
                        <li><a href="#"><span>Order number</span> : {{ $order->id }}</a></li>
                        <li><a href="#"><span>Date</span> : {{ $order->created_at }}</a></li>
                        <li><a href="#"><span>Total</span> : USD {{ round($order->paiement_total, 2) }}</a></li>
                        <li><a href="#"><span>Payment method</span> : Stripe</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Billing Address</h4>
                    <ul class="list">
                        <li><a href="#"><span>Address</span> : {{ $order->paiement_address }}</a></li>
                        <li><a href="#"><span>City</span> : {{ $order->paiement_city }}</a></li>
                        <li><a href="#"><span>Country</span> : {{ $order->paiement_country }}</a></li>
                        <li><a href="#"><span>Postcode </span> : {{ $order->paiement_postalcode }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Shipping Address</h4>
                    <ul class="list">
                        <li><a href="#"><span>Address</span> : {{ $order->paiement_address }}</a></li>
                        <li><a href="#"><span>City</span> : {{ $order->paiement_city }}</a></li>
                        <li><a href="#"><span>Country</span> : {{ $order->paiement_country }}</a></li>
                        <li><a href="#"><span>Postcode </span> : {{ $order->paiement_postalcode }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>Order Details</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->model->name }}</td>
                            <td>x {{ $product->qty }}</td>
                            <td>$ {{ round($product->model->price * $product->qty, 2) }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td><b>Subtotal</b></td>
                            <td></td>
                            <td>$ {{ round($order->paiement_subtotal, 2) }}</td>
                        </tr>
                        <tr>
                            <td><b>Tax</b></td>
                            <td></td>
                            <td>$ {{ round($order->paiement_tax, 2) }}</td>
                        </tr>
                        <tr>
                            <td><b>Total</b></td>
                            <td></td>
                            <td>$ {{ round($order->paiement_total, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->

@stop