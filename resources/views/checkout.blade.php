@extends('layouts.master')

@section('content')

{!! Breadcrumbs::render('checkout') !!}

<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                        {{ csrf_field() }}
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="Email Address" readonly>
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
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" placeholder="Name on card">
                                </div>
                                <div class="form-group">
                                    <label for="card-element">Credit card</label>
                                </div>
                                <div id="card-element">
                                </div>
                                <div id="card-errors" role="alert"></div>
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
                            @foreach (Cart::content() as $element)
                                <li>
                                    <a href="#">
                                        {{ $element->name }} 
                                        <span class="middle">x {{ $element->qty }}</span> 
                                        <span class="last">$ {{ $element->price * $element->qty }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$ {{ Cart::subtotal()}}</span></a></li>      
                            @if (session()->has('coupon'))
                            <li>
                                <a href="#">Discount ({{ session()->get('coupon')['name']}})<span>- $ {{ $discount }}</span></a>
                                <form action="{{ route('coupon.destroy') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </li>
                            <li><a href="#">New subtitle <span>$ {{ $subtotal }}</span></a></li>
                            @endif
                             
                            <li><a href="#">Tax <span>$ {{ $newTax }}</span></a></li> 
                            <hr>
                            <li><a href="#">Total <span>$ {{ $total }}</span></a></li>
                        </ul>
                    </div>
                    <div class="coupon my-3">
                        <div class="code">
                            <p>Have a code ?</p>
                            <form action="{{ route('coupon.store') }}" method="POST">
                                {{ csrf_field() }}
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


@section('js')

    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_08twkYsI7DmVczbeuoKND5n800lZG3KdU6');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('complete-order').disabled = true;

        var options = {
            name: document.getElementById('name_on_card').value,
            address_line1: document.getElementById('address').value,
            address_city: document.getElementById('city').value,
            address_state: document.getElementById('province').value,
            address_zip: document.getElementById('postalcode').value,
        }

        stripe.createToken(card, options).then(function(result) {
            if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            document.getElementById('complete-order').disabled = false;
            
            } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
            }
        });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
        }
    </script>

@stop