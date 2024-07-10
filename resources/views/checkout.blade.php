<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Order Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .bg-custom-red {
            background-color: #EE1313;
        }
        .text-custom-red {
            color: #EE1313;
        }
        .section-bg-gray {
            background-color: #f0f0f0; /* Light gray background for sections */
            padding-bottom: 1rem; /* Bootstrap's pb-4 equivalent */
            margin-bottom: 1rem; /* Bootstrap's mb-4 equivalent */
            border-bottom: 1px solid #ccc; /* Bootstrap's border-b border-gray-300 equivalent */
        }
    </style>
</head>
<body class="bg-white">
    <div class="container mx-auto px-4 py-4">

        <div class="section-bg-gray">
            <h2 class="text-lg font-bold">ORDER SUMMARY</h2>
            <div class="d-flex justify-content-between mt-2">
                <span>Items’ total (x)</span>
                <span>Kshs. x</span>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <span>Delivery Fees</span>
                <span>Kshs. x</span>
            </div>
        </div>

        <div class="section-bg-gray">
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-lg font-bold">Total:</span>
                <span class="text-lg font-bold">Kshs. x</span>
            </div>
            <div class="d-flex mt-2">
                <input type="text" placeholder="Enter Code Here" class="flex-1 form-control border border-gray-300 rounded-start">
                <button class="bg-custom-red text-white p-2 rounded-end">APPLY</button>
            </div>
        </div>

        <div class="section-bg-gray">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-lg font-bold">PAYMENT METHOD</h2>
                <button class="text-custom-red">CHANGE</button>
            </div>
            <div class="d-flex align-items-center mt-2 p-2 border border-gray-300 rounded">
                <img aria-hidden="true" alt="payment-method" src="images/Get Cash.png" class="me-2">
                <span>Pay Now (M-pesa, Airtel, or Bank Cards)</span>
            </div>
        </div>

        <div class="section-bg-gray">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-lg font-bold">ADDRESS</h2>
                <button class="text-custom-red">CHANGE YOUR ADDRESS</button>
            </div>
            <div class="d-flex align-items-center mt-2 p-2 border border-gray-300 rounded">
                <img aria-hidden="true" alt="address" src="images/Place Marker.png" class="me-2">
                <div>
                    <p>Lista Mng’ei</p>
                    <p>2500-30100</p>
                    <p>Eldoret</p>
                </div>
            </div>
        </div>

        <div class="border-bottom border-gray-300 pb-4 mb-4">
            <h2 class="text-lg font-bold">DELIVERY</h2>
            <div class="section-bg-gray d-flex align-items-center mt-2 p-2 border border-gray-300 rounded">
                <img aria-hidden="true" alt="delivery" src="images/Get Cash.png" class="me-2">
                <div>
                    <p class="font-bold">Pick-up Station</p>
                    <p>Delivery between 09-Jul and 10-Jul</p>
                </div>
            </div>
            <div class="mt-2 p-2 border border-gray-300 rounded">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Pick-up station</span>
                    <button class="text-custom-red">Select Pick-up station &gt;</button>
                </div>
                <div class="d-flex align-items-center mt-2 p-2 border border-gray-300 rounded">
                    <img aria-hidden="true" alt="pick-up-station" src="images/Palm Up Hand.png" class="me-2">
                    <div>
                        <p>Eldoret Station</p>
                        <p>Eldoret Station Daima towers 5th floor</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-bg-gray mt-4 text-center">
            <h2 class="text-lg font-bold">Modify CART</h2>
            <a href="#" class="text-primary">&lt; Go back & continue Shopping</a>
        </div>

        <div class="section-bg-gray mt-4 text-center">
            <button class="bg-custom-red text-white p-4 rounded-lg w-100 text-lg font-bold">CONFIRM ORDER</button>
        </div>
    </div>
</body>
</html>
