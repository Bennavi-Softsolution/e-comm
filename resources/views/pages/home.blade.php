@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'Home Page')

@section('home')
    <style>
        /* Custom sidebar and nav-pills styles */
        .sidebar {
            width: 240px;
            padding: 20px;
            border-right: 1px solid #ddd;
            /* Light border on the right */
            transition: width 0.3s ease, padding 0.3s ease;
            /* Transition for width and padding */
        }

        .sidebar:hover {
            width: 260px;
            padding: 25px;
        }

        .scrollable-sidebar {
            overflow-y: auto;
            max-height: calc(100vh - 120px);
            /* Adjust based on your layout */
        }

        .nav-pills .nav-link {
            color: #495057;
            padding: 10px 20px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-pills .nav-link i {
            margin-right: 10px;
        }

        .nav-pills .nav-link:hover {
            background-color: #e9ecef;
            color: #3b3b3b;
        }

        .nav-pills .nav-link.active {
            background-color: #474747;
            color: #fff;
            border-color: #007bff;
        }

        #myTab.nav-pills {
            display: flex;
            flex-direction: column;
        }



        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                padding: 10px;
            }

            #myTab.nav-pills {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                /* Ensures items do not wrap on smaller screens */
            }


        }

        .rating-stars {
            color: #ffd700;
            /* Default color for stars */
        }

        .scrollable-sidebar {
            overflow-x: auto;
            /* Enable horizontal scrolling */
            white-space: nowrap;
            /* Prevent wrapping of nav items */
            -webkit-overflow-scrolling: touch;
            /* Enable smooth scrolling on iOS */
        }
    </style>
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Sidebar container (first column) -->
            <div class="col-md-3 col-12 sidebar">
                <div class="scrollable-sidebar">
                    <ul id="myTab" class="nav nav-pills gap-2">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#shoes"><i class="fas fa-shoe-prints"></i>
                                Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#watches"><i class="fas fa-clock"></i> Watches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#accessories"><i class="fas fa-headphones"></i> Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#other"><i class="bi bi-shuffle"></i></i> Other</a>
                        </li>
                        <!-- Add more items as needed -->
                    </ul>
                </div>
            </div>



            <!-- Main content container (second column) -->
            <div class="col-md-9">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div id="shoes" class="tab-pane fade show active">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-5 g-2">
                                @foreach ($shoes as $product)
                                    <div class="col mb-3">
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
                                                        <h5 class="mt-2">KES {{ number_format($product->price) }}</h5>
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
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-5 g-2">
                                @foreach ($watches as $product)
                                    <div class="col mb-3">
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
                                                        <h5 class="mt-2">KES {{ number_format($product->price) }}</h5>
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
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-5 g-2">
                                @foreach ($accessories as $product)
                                    <div class="col mb-3">
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
                                                        <h5 class="mt-2">KES {{ number_format($product->price) }}</h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-outline-custom rounded-pill">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

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
