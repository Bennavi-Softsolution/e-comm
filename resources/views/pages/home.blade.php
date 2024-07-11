@extends('layouts.app')

@section('home')
<div class="container-fluid justify-content-start">
    <div class="row">
        <!-- Sidebar container (first column) -->
        <div class="col-md-3">
            <div class="container">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Selling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discounted</a>
                    </li>
                    
                </ul>
            </div>
        </div>

        <!-- Main content container (second column) -->
        <div class="col-md-9">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-2">
                    @foreach ($products as $product)
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
                                                <i class="fas fa-star {{ $i < $product->rating ? 'checked' : '' }}"></i>
                                            @endfor
                                        </div>
                                        <div class="col-auto">
                                            <h5>KES {{ number_format($product->price) }}</h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" id="btn-custom" class="btn btn-primary rounded-pill">
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
@endsection
