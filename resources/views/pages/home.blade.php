@extends('layouts.app')

@section('home')
    <style>
        /* Custom style for active nav-link */
        .nav-pills .nav-link.active {
            background-color: red;
            /* Change background color */
            color: white;
            /* Change text color */
            border-color: red;
            /* Change border color (optional) */
        }

        .sidebar {
            width: 200px;
        }

        .container {
            margin-left: 10px;
        }

        .nav-link {
            color: inherit;
        }

        .rating-stars {
            color: #FFD700;
            /* Default color for stars */
        }

        /* Custom animations */
        /* Custom animations */
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

        .nav-pills {
            animation: slideInFromLeft 0.5s ease;
        }

        .nav-pills .nav-link {
            position: relative;
            color: inherit;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            margin-bottom: 10px;
            text-decoration: none;
            line-height: normal;
        }

        .nav-pills .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: rgba(238, 19, 19, 0);
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .nav-pills .nav-link:hover::before,
        .nav-pills .nav-link.active::before {
            width: 100%;
            background-color: rgba(238, 19, 19, 1);
            /* Darker red for active and hover */
        }
    </style>
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Sidebar container (first column) -->
            <div class="col-md-3 sidebar">
                <div class="container">
                    <ul id="myTab" class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#shoes"><i class="bi bi-bag"></i> Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#watches"><i class="bi bi-watch"></i> Watches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#accessories"><i class="bi bi-headphones"></i> Accessories</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main content container (second column) -->
            <div class="col-md-9">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div id="shoes" class="tab-pane fade show active">
                            <div class="row row-cols-1 row-cols-xl-4 g-2">
                                @foreach ($shoes as $product)
                                    <div class="col mb-1">
                                        <div class="card h-100">
                                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top"
                                                alt="{{ $product->title }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $product->title }}</h5>
                                                <p class="card-text">{{ $product->description }}</p>
                                                <div class="row justify-content-between align-items-end mt-auto">
                                                    <div class="rating-stars">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <i
                                                                class="bi bi-star{{ $i < $product->rating ? '-fill' : '' }}"></i>
                                                        @endfor
                                                    </div>
                                                    <div class="col-auto">
                                                        <h5>KES {{ number_format($product->price) }}</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-custom rounded-pill">
                                                            <i class="bi bi-cart-plus"></i> Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="watches" class="tab-pane fade">
                            <div class="row row-cols-1 row-cols-xl-4 g-2">
                                @foreach ($watches as $product)
                                    <div class="col mb-1">
                                        <div class="card h-100">
                                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top"
                                                alt="{{ $product->title }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $product->title }}</h5>
                                                <p class="card-text">{{ $product->description }}</p>
                                                <div class="row justify-content-between align-items-end mt-auto">
                                                    <div class="rating-stars">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <i
                                                                class="bi bi-star{{ $i < $product->rating ? '-fill' : '' }}"></i>
                                                        @endfor
                                                    </div>
                                                    <div class="col-auto">
                                                        <h5>KES {{ number_format($product->price) }}</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-custom rounded-pill">
                                                            <i class="bi bi-cart-plus"></i> Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="accessories" class="tab-pane fade">
                            <div class="row row-cols-1 row-cols-xl-4 g-2">
                                @foreach ($accessories as $product)
                                    <div class="col mb-1">
                                        <div class="card h-100">
                                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top"
                                                alt="{{ $product->title }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $product->title }}</h5>
                                                <p class="card-text">{{ $product->description }}</p>
                                                <div class="row justify-content-between align-items-end mt-auto">
                                                    <div class="rating-stars">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <i
                                                                class="bi bi-star{{ $i < $product->rating ? '-fill' : '' }}"></i>
                                                        @endfor
                                                    </div>
                                                    <div class="col-auto">
                                                        <h5>KES {{ number_format($product->price) }}</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-custom rounded-pill">
                                                            <i class="bi bi-cart-plus"></i> Add to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize Bootstrap tabs
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection
