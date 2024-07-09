<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body id = "signup-page">

    <form>
        <div class="form-group row" id="name">
            <div class="col"> <label class="form-label" for="customFile">Profile Picture</label> </div>
            <div class="col"> <input type="file" class="form-control" id="customFile" /></div>
        </div>
        <div class="form-group row">
            <div class="col"> <label for="inputCounty">Full Name</label> </div>
            <div class="col"> <input type="text" class="form-control" id="inputCity"> </div>
        </div>
        <div class="form-group row">
            <div class="col"> <label for="inputEmail4">Email</label> </div>
            <div class="col"> <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> </div>
        </div>
        <div class="form-group row">
            <div class="col"><label for="phonenumber">PhoneNumber</label></div>
            <div class="col"><input type="tel" class="form-control" id="phonenumber" placeholder="PhoneNumber"></div>
        </div>
        <div class="form-group row">
            <div class="col"> <label for="inputLocation">District</label></div>
            <div class="col"><select id="inputState" class="form-control"></div>
            <option selected>Choose...</option>
            <option>...</option>
            </select>
        </div>
        <div class="form-group row">
            <div class="col"> <label for="inputAddress">Address</label> </div>
            <div class="col"> <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></div>
        </div>
        <div class="form-group row">
            <div class="col"><label for="inputPassword4">Password</label></div>
            <div class="col"><input type="password" class="form-control" id="inputPassword4" placeholder="Password"></div>
        </div>
        <div class="form-group row">
            <div class="col"><label for="inputPassword4">Confirm Password</label></div>
            <div class="col"><input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password"></div>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>