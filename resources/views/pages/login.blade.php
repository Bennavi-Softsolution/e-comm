@extends('layouts.app')

@section('title', 'address')

<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-input {
            background-color: #f7f7f7;
            border: none;
            border-radius: 5px;
            height: 45px;
            margin-bottom: 1rem;
            font-size: 16px;
            padding: 0 15px;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        .login-button {
            background-color: #EE1313;
            color: #ffffff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            height: 45px;
            font-size: 18px;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <input type="text" class="form-control login-input" placeholder="Enter email or phone number">
        <input type="password" class="form-control login-input" placeholder="Enter Password">
        <div class="button-container">
            <button class="btn btn-custom login-button">LOGIN</button>
        </div>
    </div>

    