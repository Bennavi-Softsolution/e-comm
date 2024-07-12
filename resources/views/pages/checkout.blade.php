@extends('layouts.app')

<style>
    /* Custom CSS for animations */
    @keyframes slideInFromLeft {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .slide-in-from-left {
        animation: slideInFromLeft 0.5s ease-out;
    }

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
    }

    .btn-custom-effect:hover {
        transform: scale(1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
</head>

<body>
    <div class="container mt-4">
        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <h2 class="card-title fw-bold">ORDER SUMMARY</h2>
                <div class="row mb-2">
                    <div class="col-md-6">Items’ total (x)</div>
                    <div class="col-md-6 text-md-end">Kshs. x</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">Delivery Fees</div>
                    <div class="col-md-6 text-md-end">Kshs. x</div>
                </div>
            </div>
        </div>

        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold">Total:</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <h2 class="fw-bold">Kshs. x</h2>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-9">
                        <input type="text" placeholder="Enter Code Here" class="form-control form-control-custom">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-danger w-100 btn-custom-effect">APPLY</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="fw-bold">PAYMENT METHOD</h2>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-danger btn-custom-effect" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">
                            CHANGE
                        </button>
                    </div>
                </div>
                <div class="row mt-2 p-2 border rounded">
                    <div class="col-auto">
                        <img src="images/Get Cash.png" alt="payment-method" class="me-2">
                    </div>
                    <div class="col">
                        <span>Pay Now (M-pesa, Airtel, or Bank Cards)</span>
                    </div>
                </div>

                <!-- Modal for Payment Options -->
                <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="paymentModalLabel">Payment Options</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Modal content can be added here -->
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="fw-bold">ADDRESS</h2>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-danger btn-custom-effect">CHANGE YOUR ADDRESS</button>
                    </div>
                </div>
                <div class="row mt-2 p-2 border rounded">
                    <div class="col-auto">
                        <img src="images/Place Marker.png" alt="address" class="me-2">
                    </div>
                    <div class="col">
                        <p>Lista Mng’ei</p>
                        <p>2500-30100</p>
                        <p>Eldoret</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <h2 class="fw-bold">DELIVERY</h2>
                <div class="p-4 border rounded">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img src="images/Get Cash.png" alt="delivery" class="me-2">
                        </div>
                        <div class="col">
                            <p class="fw-bold">Pick-up Station</p>
                            <p>Delivery between 09-Jul and 10-Jul</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 p-4 border rounded">
                    <div class="row align-items-center">
                        <div class="col">
                            <span>Pick-up station</span>
                        </div>
                        <div class="col text-end">
                            <button class="btn btn-danger btn-custom-effect">Select Pick-up station &gt;</button>
                        </div>
                    </div>
                    <div class="row mt-2 p-2 border rounded">
                        <div class="col-auto">
                            <img src="images/Palm Up Hand.png" alt="pick-up-station" class="me-2">
                        </div>
                        <div class="col">
                            <p>Eldoret Station</p>
                            <p>Eldoret Station Daima towers 5th floor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4 slide-in-from-left fade-in">
            <div class="card-body">
                <h2 class="fw-bold">Modify CART</h2>
                <p class="text-center"><a href="#" class="text-primary"> &lt; Go back & continue Shopping</a>
                </p>
            </div>
        </div>

        <div class="card slide-in-from-left fade-in">
            <div class="card-body">
                <button class="btn btn-danger p-4 rounded-lg w-100 fw-bold btn-custom-effect">CONFIRM ORDER</button>
            </div>
        </div>
    </div>


</body>
