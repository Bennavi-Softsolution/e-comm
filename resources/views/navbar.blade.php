<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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
            border: none; /* Remove the border */
        }
        .navbar .icons a {
            margin-left: 10px;
            color: #EE1313;
        }
        .from-custom{
            width: 40vh;
        }
        .icon-custom{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!--Main Contenet-->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                E-<span>Commerce</span>.site
            </a>
            <div class="input-group from-custom mx-auto">
                <input class="form-control "  type="search" placeholder="I am shopping for..." aria-label="Search">
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

    <!-- Bootstrap JavaScript and dependencies-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
