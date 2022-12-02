<?php
    session_start();
    require_once 'database-connection.php';
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
        ';
        $date = $_SESSION['date'];
        $qury = "SELECT * FROM today_total_magazine WHERE date = '".$date."'";
        echo '
            <table border="1px" width="100%">
                <tr>
                    <th>Date</th>
                    <th>Magazine Name</th>
                    <th>Magazine Price</th>
                    <th>Magazine Quentity</th>
                </tr>';
                if($result = $mysqli->query($qury)) {
                    if(mysqli_num_rows($result)>0) {
                      while($row = $result->fetch_assoc()) {
                          $date = $row['date'];
                          $magazine_name = $row['magazine_name'];
                          $magazine_price = $row['magazine_price'];
                          $magazine_quentity = $row['magazine_quentity'];
                          echo '
                          <tr>
                            <td>'.$date.'</td>
                            <td>'.$magazine_name.'</td>
                            <td>'.$magazine_price.'</td>
                            <td>'.$magazine_quentity.'</td>
                          </tr>
                          ';
                        }
                    }
                }        
            echo '
            </table>
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
                <h3>Newspaper Agent</h3><br>
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
            </nav>
        </body>
        
        </html>
    ';
?>  