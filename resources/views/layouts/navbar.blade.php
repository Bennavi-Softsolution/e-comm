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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalSignin">
            Login
        </button>
    </div>
</nav>

<!-- Sign in modal starts here -->
<div class="modal modal-signin py-5" data-bs-backdrop="static" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                <h1 class="fw-bold mb-0 fs-2">Sign In</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form class="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-custom" type="submit">Sign in</button>
                    <small class="text-muted">Forgot password? <a href="#">Click here</a></small>
                    <hr class="my-4">
                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                    <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                        <i class="bi bi-twitter"></i>
                        <use xlink:href="#twitter" /></svg>
                        Sign in with Twitter
                    </button>
                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                        <i class="bi bi-facebook"></i>
                        <use xlink:href="#facebook" /></svg>
                        Sign in with Facebook
                    </button>
                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                        <i class="bi bi-github"></i>
                        <use xlink:href="#github" /></svg>
                        Sign in with GitHub
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign in modal ends here -->

@yield('cart')
@yield('checkout')
@yield('product')
@yield('location')