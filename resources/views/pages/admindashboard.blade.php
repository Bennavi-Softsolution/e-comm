<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: #FF0000;
            color: white;
            padding: 1% 2%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .left-section {
            display: flex;
            align-items: center;
        }         
        .header img {
            height: 50px;
        }
        .header .icons img {
            width: 25px;
            height: 25px;
            margin-left: 15px;
        }
        .header .icons img:hover {
            background-color: #4B4B4B !important;
        }
        .header .right-section {
            display: flex;
            align-items: center;
        }
        .sidebar {
            background-color: #4B4B4B;
            color: white;
            width: 100%;
            padding: 10px 20px;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: grey !important;
            padding: 10px;
        }
        .sidebar a.active {
            background-color: blue !important;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-sizing: border-box;
        }
        .card {
            margin-bottom: 20px;
        }
        .card h5 {
            font-size: 1.2rem;
        }
        .chart-container {
            height: 40vh;
        }
        .section-color {
            background-color: #D3D3D3;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="left-section">
            <img src="{{ asset('../images/companylogo.jpg') }}" alt="Logo">   
            <div class="icons">
                <img src="{{ asset('../images/notification.jpg') }}" alt="Notifications">
                <img src="{{ asset('../images/settings.jpg') }}" alt="Settings">
            </div>
        </div>
        <div class="right-section">
            <button class="btn btn-light ml-3">Logout</button>
        </div>
    </div>
    <div class="sidebar">
        <a href="#" class="active">Dashboard</a>
        <a href="#">Orders</a>
        <a href="#">Products</a>
        <a href="#">Customers</a>
        <a href="#">Analytics</a>
        <a href="#">Marketing</a>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">
                        Total Revenue in:
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                24 HRS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">a week</a>
                                <a class="dropdown-item" href="#">a month</a>
                                <a class="dropdown-item" href="#">One year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><b>KES 35,000/=</b></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">
                        Total number of Orders:  
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pending
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Processing</a>
                                <a class="dropdown-item" href="#">Shipped</a>
                                <a class="dropdown-item" href="#">Delivered</a>
                                <a class="dropdown-item" href="#">Canceled</a>
                                <a class="dropdown-item" href="#">Returned</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><b>150</b></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        Number of New Customers:
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Today
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="#">One week</a>
                                <a class="dropdown-item" href="#">One month</a>
                                <a class="dropdown-item" href="#">One Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><b>50</b></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Conversion Rate</div>
                    <div class="card-body">
                        <h3 class="card-title"><b>68%</b></h3>
                        <p class="card-text">of visitors completed a purchase</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-color">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Sales Over Time</div>
                        <div class="card-body chart-container">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Order Status Pie Chart</div>
                        <div class="card-body chart-container">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Top Products</div>
                        <div class="card-body chart-container">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Chart.js for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart.js example charts
        var ctxLine = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [120, 150, 300, 200, 500, 700],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });

        var ctxPie = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Completed Orders', 'Pending Orders', 'Canceled Orders'],
                datasets: [{
                    data: [60, 30, 10],
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
                }]
            }
        });

        var ctxBar = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Product A', 'Product B', 'Product C', 'Product D'],
                datasets: [{
                    label: 'Orders',
                    data: [50, 75, 100, 125],
                    backgroundColor: ['#007bff', '#17a2b8', '#28a745', '#ffc107']
                }]
            }
        });
    </script>
</body>
</html>