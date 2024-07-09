<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <div class="container">
        <div class="row mb-5">
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p1.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">StrideMax Pro Running Shoes</h5>
                      <p class="card-text">Lightweight, breathable, and built for performance. Your go-to choice for running with style and comfort.</p>
                      
                        <div class="row justify-content-end">

                            <div class="col-auto justify-content-start">
                                <h5> KES 1,999</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p2.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">GripMax Trail Hiking Boots</h5>
                      <p class="card-text">ombine waterproof durability with high-traction soles, ideal for conquering rugged terrain and exploring new heights comfortably.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 1,799</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p3.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">UrbanFlex Casual Sneakers</h5>
                      <p class="card-text">UrbanFlex Casual Sneakers offer sleek style and all-day comfort, perfect for navigating city streets with ease</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 1,499</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p4.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">PeakPro Trail Running Shoes</h5>
                      <p class="card-text">PeakPro Trail Running Shoes: Lightweight, rugged, and designed for peak performance on any terrain.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 5,999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p5.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">SwiftGlide Slip-On Sneakers</h5>
                      <p class="card-text">SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these versatile slip-ons, perfect for everyday wear.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p6.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">ActiveStride Fitness Shoes</h5>
                      <p class="card-text">ActiveStride Fitness Shoes: Engineered for performance, these shoes provide comfort and support for your active lifestyle</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 4,999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p7.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">SummitVenture Trekking Sandals</h5>
                      <p class="card-text">SummitVenture Trekking Sandals: Designed for adventure, these sandals offer comfort and durability for exploring both land and water.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 9,999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p8.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">VentureTrack Trail Running Shoes</h5>
                      <p class="card-text">Lightweight, durable, and engineered for superior grip on challenging trails, perfect for avid runners.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 7,999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/p9.jpg') }}" alt="Description of the image">
                    <div class="card-body">
                      <h5 class="card-title">SwiftGrip Cross Training Shoes</h5>
                      <p class="card-text">Versatile and supportive, these shoes are designed to enhance stability and performance during diverse workout routines.</p>
                      <div class="row justify-content-end">

                        <div class="col-auto justify-content-start">
                            <h5> KES 10,999</h5>
                        </div>
                        <div class="col-auto">
                            <a href="#" id="btn-custom" class="btn rounded-pill"><i class="bi bi-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
