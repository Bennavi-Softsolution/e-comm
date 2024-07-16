@extends('layouts.app')


<style>
    

    .navbar-brand span {
        color: #EE1313;
    }

    

    .input-group .btn-search {
        
        border-radius: 0 10px 10px 0 !important;
        
        border: none;
        /* Remove the border */
    }

    .navbar .icons a {
        
    }

    .from-custom {
        width: 40vh;
    }

    .icon-custom {
        margin-left: 20px;
    }
</style>


<!--Main Contenet-->
<nav class="navbar navbar-expand-lg border-bottom border-body">
    <div class="container">
        <a class="navbar-brand" href="#">
            E-<span>Commerce</span>.site
        </a>
        <div class="input-group from-custom mx-auto">
            <input class="form-control " type="search" placeholder="I am shopping for..." aria-label="Search">
            <button class="btn btn-custom btn-search" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="icons icon-custom">
            <a href="#"><i class="fas fa-user"></i></a>
            
        </div>
        <div class="icons icon-custom">
            
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</nav>

@yield('home')
@yield('cart')
@yield('checkout')
@yield('product')
@yield('location')