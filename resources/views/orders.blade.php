@extends('layouts.master')

@section('content')

{!! Breadcrumbs::render('orders') !!}

<div class="container my-5">
    <div class="orders">
        <h2 class="text-center">Orders Details</h2>
        @foreach($orders as $order)
        <div class="table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <i class="fas fa-receipt"></i>
                    Order #{{ $order->id }}
                </h4>
                <h4>Date : {{ $order->created_at }}</h4>
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
                    @foreach($order->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>x {{ $product->pivot->quantity }}</td>
                        <td>$ {{ round($product->price * $product->pivot->quantity, 2) }}</td>
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
        @endforeach
    </div>
</div>
@stop