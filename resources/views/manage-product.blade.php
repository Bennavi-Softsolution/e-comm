<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: #ffffff;
    }
    .container {
      padding: 20px;
    }
    .dashboard-title {
      background-color: #F5F5F5;
      padding: 20px;
      margin-bottom: 1px;
      text-align: center;
    }
    .add-item {
      background-color: #FFFFFF;
      padding: 10px;
      text-align: center;
      width: 100%;
      height: 90px;
      display: flex;
      flex-direction: column; 
      align-items: center;
      justify-content: center;
      position: relative;
      margin-bottom: 0px;
    }
    .add-item svg {
      width: 100%;
      height: 100%;
    }
    .add-item-button {
      background-color: #EE1313;
      color: #FFFFFF;
      border: none;
      border-radius: 80px;
      padding: 2px 20px;
      font-size: 16px;
      position: absolute;
      top: 25px;
      left: 70%;
      transform: translateX(-50%);
    }
    .main-table {
      background-color: #F5F5F5;
      padding: 20px;
      height: 100vh;
      margin-top: -50px;
    }
    .svg-text{
      color: #FFFFFF;
      font-size: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="dashboard-title">
      <h1>DASHBOARD</h1>
      <div class="add-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240" preserveAspectRatio="none">
          <path fill="#EE1313" fill-opacity="1" d="M0,96L80,106.7C160,117,320,139,480,165.3C640,192,800,224,960,224C1120,224,1280,192,1360,176L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          <text class="svg-text" x="50" y="170" fill="#FFFFFF" font-family="Gill Sans, sans-serif";>Add Item</text>
        </svg>
        <button class="add-item-button">Add Item</button>
      </div>
    </div>
    <div class="main-table">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Quantity (units)</th>
            <th>Price (unit)</th>
            <th>Manage</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
