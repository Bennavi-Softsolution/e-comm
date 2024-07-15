@extends('layouts.app')


<style>
    .navbar-custom {
        background-color: #D9D9D9 !important;
        border-radius: 10px;
        margin: 10px;
    }

    .navbar-brand span {
        color: #EE1313;
    }

    .input-group .form-control {
        border-radius: 10px 0 0 10px !important;
        background-color: white;
    }

    .input-group .btn-search {
        background-color: black;
        border-radius: 0 10px 10px 0 !important;
        color: #EE1313;
        border: none;
        /* Remove the border */
    }

    .navbar .icons a {
        margin-left: 10px;
        color: #EE1313;
    }

    .from-custom {
        width: 40vh;
    }

    .icon-custom {
        margin-left: 20px;
    }
</style>


<!--Main Contenet-->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">
            E-<span>Commerce</span>.site
        </a>
        <div class="input-group from-custom mx-auto">
            <input class="form-control " type="search" placeholder="I am shopping for..." aria-label="Search">
            <button class="btn btn-search" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="icons icon-custom">
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>

@yield('home')
@yield('cart')
@yield('checkout')
@yield('product')
@yield('location')