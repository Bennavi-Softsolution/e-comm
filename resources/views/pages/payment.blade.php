@extends('layouts.app')

@section('payment')
    <style>
        /* Custom CSS for animations and transitions */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        /* Custom modal animation */
        .modal.fade .modal-dialog {
            transform: translate(0, -50%);
            transition: transform 0.3s ease-out;
        }

        .modal.fade.show .modal-dialog {
            transform: translate(0, 0);
        }

        /* Custom button hover effect */
        .btn-custom-effect {
            transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
            background-color: #EE1313;
            /* Base button background color */
            color: #fff;
            /* Base button text color */
            border-color: #EE1313;
            /* Base button border color */
        }

        .btn-custom-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #D20C0C;
            /* Adjusted button background color on hover */
            border-color: #D20C0C;
            /* Adjusted button border color on hover */
        }

        /* Custom input focus effect */
        .form-control-custom {
            transition: border-color 0.3s ease-out, box-shadow 0.3s ease-out;
        }

        .form-control-custom:focus {
            border-color: #EE1313;
            box-shadow: 0 0 0 0.2rem rgba(238, 19, 19, 0.25);
        }
    </style>

    <div class="container mt-4">
        <!-- Your existing content -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Select Payment Method</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pay Now (M-pesa, Airtel, or Bank Cards)</h5>
                                        <p class="card-text">Pay Now Fast and Securely with Mastercard or Visa</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="payNowRadio" checked>
                                            <label class="form-check-label" for="payNowRadio">
                                                Pay Now (M-pesa, Airtel, or Bank Cards)
                                            </label>
                                        </div>
                                        <p class="mt-2">You will be redirected to our payment platform to complete your
                                            details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pay on Delivery with Mobile Money and Bank Cards</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod"
                                                id="payOnDeliveryRadio">
                                            <label class="form-check-label" for="payOnDeliveryRadio">
                                                Pay on Delivery with Mobile Money and Bank Cards
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-custom">Select Payment Method</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="container mt-4">
        <button type="button" class="btn btn-primary btn-custom-effect" data-bs-toggle="modal"
            data-bs-target="#paymentModal">
            Open Payment Modal
        </button>
    </div>
@endsection
