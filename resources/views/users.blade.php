<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-comm</title>

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
  
<div class="container text-center">
<div class="row">
    <div class="col-8">
          <div class="search-container">
              <input type="text" class="search-input" placeholder="Search">
              <button class="search-button"><i class="fas fa-search"></i></button>
          </div>

     
    </div>
    <div class="col-4">

      <img src="{{asset('assets/images/logo.jpg')}}" alt="Logo">
    </div>
  </div>
</div>
              
    <div>
    <table class="table">
  <thead class="custom-tablehead tablehead">
    <tr>
      <th class="custom-th" scope="col" class="tablehead">Name</th>
      <th class="custom-th" scope="col">Passwords</th>
      <th class="custom-th" scope="col">Email</th>
      <th class="custom-th" scope="col">City</th>
      <th class="custom-th" scope="col">Status</th>
      <th class="custom-th" scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-light">
    <tr>
      <td> <img src="{{asset('assets/images/male avator.png')}}" alt="status image"> Harrry Potter</td>
      <td>QRT4567</td>
      <td>harry@gmail.com</td>
      <td>Nairobi</td>
      <td> <img src="{{asset('assets/images/Red star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/images/Female avator.png')}}" alt="status image">Hermione Granger</td>
      <td>QRT4568</td>
      <td>Hermione@gmail.com</td>
      <td>Nakuru</td>
      <td> <img src="{{asset('assets/images/Green star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/images/male avator.png')}}" alt="status image"> Draco Malfoy</td>
      <td>QRT4769</td>
      <td>draco@gmail.com</td>
      <td>Mombasa</td>
      <td> <img src="{{asset('assets/images/Green star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/images/Female avator.png')}}" alt="status image"> Katrine Dhyre</td>
      <td>QRT4269</td>
      <td>avator@gmail.com</td>
      <td>Berlin</td>
      <td> <img src="{{asset('assets/images/Red star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td> <img src="{{asset('assets/images/male avator.png')}}" alt="status image"> Ron</td>
      <td>QRT3768</td>
      <td>Ron@gmail.com</td>
      <td>New Orleans</td>
      <td> <img src="{{asset('assets/images/Green star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/images/male avator.png')}}" alt="status image"> Stiles mark</td>
      <td>QRT47329</td>
      <td>stiles@gmail.com</td>
      <td>Mumbai</td>
      <td> <img src="{{asset('assets/images/Green star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td><img src="{{asset('assets/images/Female avator.png')}}" alt="status image"> Faith Wanjiku</td>
      <td>QRT4269</td>
      <td>d.annyor@gmail.com</td>
      <td>Denver</td>
      <td> <img src="{{asset('assets/images/Red star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
    <tr>
      <td> <img src="{{asset('assets/images/male avator.png')}}" alt="status image">Ian Fortune</td>
      <td>QGT3768</td>
      <td>fortune@gmail.com</td>
      <td>Nyeri</td>
      <td> <img src="{{asset('assets/images/Green star.png')}}" alt="status image"></td>
      <td><img src="{{asset('assets/images/refresh.png')}}" alt="refresh image"> <img src="{{asset('assets/images/delete.png')}}" alt="status image"></td>
    </tr>
  </tbody>
    
   
</table>
</div>

    <div>
    <div class="container text-center">
  <div class="row">
    <div class="col">
    <button type="button" class="btn btn-danger">Showing page 1 of 10</button>
    </div>
    <div class="col">

    <button type="button" class="btn borderstyle">- 1 +</button>
      
    </div>
  </div>
    </div>
</div>
</body>
</html>