@extends('layouts.app')

@section('home')
    <div class="container">
        <div class="row mb-5 gx-1">
            @foreach ($products as $product)
                <div class="col-sm mt-5 px-0">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="row justify-content-end mt-auto">
                                <div class="rating-stars">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star {{ $i < $product->rating ? 'checked' : '' }}"></i>
                                    @endfor
                                </div>
                                <div class="col-auto justify-content-start">
                                    <h5>KES {{ number_format($product->price) }}</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="#" id="btn-custom" class="btn rounded-pill">
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
@endsection
