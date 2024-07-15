@extends('layouts.app')

@section('title', 'address')

    <style>
        .bg-custom-red {
            background-color: #EE1313;
        }
        .bg-custom-black {
            background-color: #000000;
        }
        .placeholder-white::placeholder {
            color: #FFFFFF;
        }
        .text-white {
            color: #FFFFFF;
        }
        .custom-input {
            background-color: #EE1313;
            color: white;
            margin-bottom: 1rem;
        }
        .save-button {
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="p-4">
        <input type="text" placeholder="First Name" class="form-control custom-input placeholder-white" />
        <input type="text" placeholder="Last Name" class="form-control custom-input placeholder-white" />
        <div class="row mb-3">
            <div class="col-auto">
                <input type="text" value="+254" class="form-control custom-input text-center" readonly />
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn bg-custom-black btn-custom text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <input type="text" placeholder="Phone Number" class="form-control custom-input placeholder-white" />
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-auto">
                <input type="text" value="+254" class="form-control custom-input text-center" readonly />
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn bg-custom-black btn-custom text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <input type="text" placeholder="Additional Phone Number" class="form-control custom-input placeholder-white" />
            </div>
        </div>
        <input type="text" placeholder="Address" class="form-control custom-input placeholder-white" />
        <input type="text" placeholder="Additional information" class="form-control custom-input placeholder-white" />
        <div class="row mb-3">
            <div class="col">
                <input type="text" placeholder="Region" class="form-control custom-input placeholder-white" />
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn bg-custom-black btn-custom text-white dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" placeholder="City" class="form-control custom-input placeholder-white" />
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn bg-custom-black  btn-custom text-white dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn bg-custom-red btn-custom text-white font-bold save-button">SAVE</button>
    </div>
</div>
