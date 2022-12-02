<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $date = $_POST['date'];
    $magazine_name = $_POST['magazinename'];
    $qury = "SELECT magazine_name FROM daily_basis_magazine NATURAL JOIN monthly_basis_magazine  WHERE magazine_name = '".$magazine_name."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($date);
            session_unset();
        } 
        else{
            $_SESSION['no-details-magazine'] = "There are no payment entry on ".$date.".";
           # header("location:main-page.php");
           echo 'no';
        }
    }
    function display($date){
        require_once 'database-connection.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        echo '
        <!doctype html>
        <html lang="en">
        
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
            <title>Arup Kumar Saha</title>
            <link rel="icon" href="arup-img.png" type="image/icon">
        </head>
        
        <body>
        
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        
            <style>
                body {
                    background-color: bisque;
                    font-size: 18px;
                    font-family: "Work Sans", sans-serif;
                }
        
                h1 {
                    font-family: "Niconne", cursive;
                    color: white;
                }
        
                h3 {
                    font-family: "Reggae One", cursive;
                    color: white;
                }
            </style>
        
            <div class="text-center" style="background-color: blue;">
                <h1 class="font-weight-bold">Arup Kumar Saha</h1>
                <h3>A Newspaper Distrubution Agency</h3><br>
            </div>
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="#">
                    <img src="arup-img.png" width="50" height="30" class="d-inline-block align-top" alt="arupkumarsaha"> Arup
                    Kumar Saha</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainpage"
                    aria-controls="mainpage" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse text-center" id="mainpage">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="new-entry" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                New Entry
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="customer-entry.php">Customer</a>
                                <a class="dropdown-item" href="employee-entry.php">Employee</a>
                                <a class="dropdown-item" href="magazine-entry.php">Magazine</a>
                                <a class="dropdown-item" href="newspaper-entry.php">Newspaper</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="data-entry" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Data Entry
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="today-total-collection.php">Today Total Collection</a>
                                <a class="dropdown-item" href="today-total-magazine.php">Today Total Magazine</a>
                                <a class="dropdown-item" href="today-total-newspaper.php">Today Total Newspaper</a>
                                <a class="dropdown-item" href="daily-basis-magazine.php">Daily Basis Magazine</a>
                                <a class="dropdown-item" href="daily-basis-newspaper.php">Daily Basis Newspaper</a>
                                <a class="dropdown-item" href="monthly-basis-magazine.php">Monthly Basis Magazine</a>
                                <a class="dropdown-item" href="monthly-basis-newspaper.php">Monthly Basis Newspaper</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Payment
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="company-payment.php">Company Payment</a>
                                <a class="dropdown-item" href="daily-customer-payment.php">Daily Customer Payment</a>
                                <a class="dropdown-item" href="https://www.indianbank.net.in/jsp/startIB.jsp"
                                    target="_blank">Indian Bank</a>
                                <a class="dropdown-item" href="https://retail.onlinesbi.com/retail/login.htm"
                                    target="_blank">State Bank Of India</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="customer" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Customer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="#">Bill Check</a>
                                <a class="dropdown-item" href="today-bill.php">Today Bill</a>
                                <a class="dropdown-item" href="monthly-bill.php">Monthly Bill</a>
                                <a class="dropdown-item" href="#">Due Bill</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Details Check
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="details-customer-name.php">Customer Name</a>
                                <a class="dropdown-item" href="details-employee-name.php">Employee Name</a>
                                <a class="dropdown-item" href="details-magazine-name.php">Magazine Name</a>
                                <a class="dropdown-item" href="details-newspaper-name.php">Newspaper Name</a>
                                <a class="dropdown-item" href="details-today-total-collection.php">Today Total Collection</a>
                                <a class="dropdown-item" href="details-today-total-magazine.php">Today Total Magazine</a>
                                <a class="dropdown-item" href="details-today-total-newspaper.php">Today Total Newspaper</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                                <a class="dropdown-item" href="#">My Account</a>
                                <a class="dropdown-item" href="#">Update Mobile Number</a>
                                <a class="dropdown-item" href="#">Update Email</a>
                                <a class="dropdown-item" href="#">Reset Username</a>
                                <a class="dropdown-item" href="#">Reset Password</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav><br><br>
            <div class="text-center">
                <h2 class="text-danger">Today All Payment View</h2>
            </div><br><br>
            ';
            $qury = "SELECT * FROM daily_basis_magazine NATURAL JOIN monthly_basis_magazine  WHERE magazine_name = '".$magazine_name."'";
            echo '
            <div style="overflow-x:auto">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Magazine Name</th>
                            <th scope="col">Magazine Price</th>
                            <th scope="col">Magazine Quentity</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>';
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $date = $row['date'];
                                $customer_name = $row['customer_name'];
                                $mobile = $row['mobile'];
                                $magazine_name = $row['magazine_name'];
                                $magazine_price = $row['magazine_price'];
                                $magazine_quentity = $row['magazine_quentity'];
                                $percentage = $row['percentage'];
                                $total = $row['total'];
                                echo '
                                <thead>
                                    <tr>
                                        <th scope="col">'.$date.'</th>
                                        <th scope="col">'.$customer_name.'</th>
                                        <th scope="col">'.$mobile.'</th>
                                        <th scope="col">'.$magazine_name.'</th>
                                        <th scope="col">'.$magazine_price.'</th>
                                        <th scope="col">'.$magazine_quentity.'</th>
                                        <th scope="col">'.$percentage.'</th>
                                        <th scope="col">'.$total.'</th>
                                    </tr>
                                </thead>';
                            }
                        }
                    }        
                echo '
                </table>
            </div>    
        </body>
        
        </html>
    ';
    }
?>  