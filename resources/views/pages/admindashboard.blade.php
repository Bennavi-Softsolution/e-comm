@extends('layouts.app')

@section('title', 'admindashboard')


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
            padding: 10px;
            gap: 20px;
        }         
        
        .company-logo {
    height: 35px;
    margin-right: auto;
        }

.icons {
    display: flex;
    gap: 20px;
}

        .icon {
    font-size: 24px;
    cursor: pointer;
         }

         .icon:hover {
    color: #007bff;
        }
        
        .header .icons img:hover {
            background-color: grey !important;
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
        }
        .sidebar a.active {
            background-color: grey !important;
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
            <img src="{{ asset('../images/companylogo.jpg') }}" alt="Logo" class="componay-logo">   
            <div class="icons">
            <i class="bi bi-bell-fill icon" alt="Notifications"></i>
            <i class="bi bi-gear-fill icon" alt="Settings"></i>
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
                            <button class="btn btn-warning dropdown-toggle" role="button" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"  aria-expanded="false">
                               Period
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                               <li><a class="dropdown-item" href="#" onclick="showAmount('daily')">24 Hrs</a></li>
                               <li><a class="dropdown-item" href="#" onclick="showAmount('weekly')">a week</a></li>
                               <li><a class="dropdown-item" href="#" onclick="showAmount('monthly')">a month</a></li>
                               <li><a class="dropdown-item" href="#" onclick="showAmount('yearly')">One year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 id="dailyAmount" class="card-title "><b>KES 35,000/=</b></h3>
                        <h3 id="weeklyAmount" class="card-title" style="display: none;"><b>KES 234,000/=</b></h3>
                        <h3 id="monthlyAmount" class="card-title" style="display: none;"><b>KES 1,335,000/=</b></h3>
                        <h3 id="yearlyAmount" class="card-title" style="display: none;"><b>KES 10,000,000/=</b></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">
                        Total number of Orders:  
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Order Type
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" onclick="showOrder('pending')" >Pending</a>
                                <a class="dropdown-item" href="#" onclick="showOrder('processing')">Processing</a>
                                <a class="dropdown-item" href="#" onclick="showOrder('shipped')">Shipped </a>
                                <a class="dropdown-item" href="#" onclick="showOrder('delivered')">Delivered</a>
                                <a class="dropdown-item" href="#" onclick="showOrder('canceled')">Canceled</a>
                                <a class="dropdown-item" href="#" onclick="showOrder('returned')">Returned</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 id="pendingAmount" class="card-title" ><b>150</b></h3>
                        <h3 id="processingAmount" class="card-title" style="display: none;"><b>1520</b></h3>
                        <h3 id="shippedAmount" class="card-title" style="display: none;"><b>150</b></h3>
                        <h3 id="deliveredAmount" class="card-title" style="display: none;"><b>1530</b></h3>
                        <h3 id="canceledAmount"  class="card-title" style="display: none;"><b>1350</b></h3>
                        <h3 id="returnAmount" class="card-title" style="display: none;"><b>3150</b></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">
                        Number of New Customers:
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Period
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#" onclick="showPeriod('one-week')">One week</a>
                                <a class="dropdown-item" href="#" onclick="showPeriod('one-month')">One month</a>
                                <a class="dropdown-item" href="#" onclick="showPeriod('one-year')">One Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 id="week-one" class="card-title"><b>520</b></h3>
                        <h3 id="month-one" class="card-title" style="display: none;"><b>340</b></h3>
                        <h3 id="year-one" class="card-title" STYLE="display: none;"><b>720</b></h3>
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

        //Script to display sales changes based of time selection
        function showAmount(type) {
        if (type === 'daily') {
            document.getElementById('dailyAmount').style.display = 'block';
            document.getElementById('weeklyAmount').style.display = 'none';
            document.getElementById('monthlyAmount').style.display = 'none';
            document.getElementById('yearlyAmount').style.display = 'none';
        }
        else if (type === 'weekly') {
            document.getElementById('dailyAmount').style.display = 'none';
            document.getElementById('weeklyAmount').style.display = 'block';
            document.getElementById('monthlyAmount').style.display = 'none';
            document.getElementById('yearlyAmount').style.display = 'none';
        }
        else if (type === 'monthly') {
            document.getElementById('dailyAmount').style.display = 'none';
            document.getElementById('weeklyAmount').style.display = 'none';
            document.getElementById('monthlyAmount').style.display = 'block';
            document.getElementById('yearlyAmount').style.display = 'none';
        } else if (type === 'yearly') {
            document.getElementById('dailyAmount').style.display = 'none';
            document.getElementById('weeklyAmount').style.display = 'none';
            document.getElementById('monthlyAmount').style.display = 'none';
            document.getElementById('yearlyAmount').style.display = 'block';
        }
    }

    function showOrder(type) {
        if (type === 'pending') {
            document.getElementById('pendingAmount').style.display = 'block';
            document.getElementById('processingAmount').style.display = 'none';
            document.getElementById('shippedAmount').style.display = 'none';
            document.getElementById('deliveredAmount').style.display = 'none';
            document.getElementById('canceledAmount').style.display = 'none';
            document.getElementById('returnAmount').style.display = 'none';
        }
        else if (type === 'processing') {
            document.getElementById('pendingAmount').style.display = 'none';
            document.getElementById('processingAmount').style.display = 'block';
            document.getElementById('shippedAmount').style.display = 'none';
            document.getElementById('deliveredAmount').style.display = 'none';
            document.getElementById('canceledAmount').style.display = 'none';
            document.getElementById('returnAmount').style.display = 'none';
        }
        else if (type === 'shipped') {
            document.getElementById('pendingAmount').style.display = 'none';
            document.getElementById('processingAmount').style.display = 'none';
            document.getElementById('shippedAmount').style.display = 'block';
            document.getElementById('deliveredAmount').style.display = 'none';
            document.getElementById('canceledAmount').style.display = 'none';
            document.getElementById('returnAmount').style.display = 'none';
        }
        else if (type === 'delivered') {
            document.getElementById('pendingAmount').style.display = 'none';
            document.getElementById('processingAmount').style.display = 'none';
            document.getElementById('shippedAmount').style.display = 'none';
            document.getElementById('deliveredAmount').style.display = 'block';
            document.getElementById('canceledAmount').style.display = 'none';
            document.getElementById('returnAmount').style.display = 'none';
        } else if (type === 'canceled') {
            document.getElementById('pendingAmount').style.display = 'none';
            document.getElementById('processingAmount').style.display = 'none';
            document.getElementById('shippedAmount').style.display = 'none';
            document.getElementById('deliveredAmount').style.display = 'none';
            document.getElementById('canceledAmount').style.display = 'block';
            document.getElementById('returnAmount').style.display = 'none';
        }
        else if (type === 'returned') {
            document.getElementById('pendingAmount').style.display = 'none';
            document.getElementById('processingAmount').style.display = 'none';
            document.getElementById('shippedAmount').style.display = 'none';
            document.getElementById('deliveredAmount').style.display = 'none';
            document.getElementById('canceledAmount').style.display = 'none';
            document.getElementById('returnAmount').style.display = 'block';
        }
    }

    function showPeriod(type) {
        if (type === 'one-week') {
            document.getElementById('week-one').style.display = 'block';
            document.getElementById('month-one').style.display = 'none';
            document.getElementById('year-one').style.display = 'none';
        }
        else if (type === 'one-month') {
            document.getElementById('week-one').style.display = 'none';
            document.getElementById('month-one').style.display = 'block';
            document.getElementById('year-one').style.display = 'none';
        }
        else if (type === 'one-year') {
            document.getElementById('week-one').style.display = 'none';
            document.getElementById('month-one').style.display = 'none';
            document.getElementById('year-one').style.display = 'block';
        }
    }

    </script>
</body>

