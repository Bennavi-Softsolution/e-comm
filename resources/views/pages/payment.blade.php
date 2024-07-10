@extends('layouts.app')

@section('payment')
    <div class="container">
        <div class="child-container mt-5">

            <div class="form-check">
                <input class="form-check-input mt-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pay Now(M-pesa, Airtel, or Bank Cards)
                </label>
                <p class="mt-2" >Pay Now Fast and Securely with Mastercard of Visa</p>
                <div class="container">
                    <div class="row">
                        <div class="col-3 mt-5 accept-text">
                            <h1>We Accept</h1>
                        </div>
                        <div class="col">
                            <img src="{{ asset('images/payment-forms.png') }}" class="img-fluid" alt="Payment methods Amex, M-pesa, Mastercard and Visa">
                        </div>
                    </div>
                    
                </div>
                <p>You will be redirected to our payment platform to complete your details</p>
            </div>

            <div class="form-check">
                <input class="form-check-input mt-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pay on Delivery with Mobile Money and Bank Cards
                </label>
            </div>

        </div>


    </div>
@endsection
