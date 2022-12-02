<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $year = $_POST['year'];
    $month = $_POST['month'];
    $papername = $_POST['papername'];
    $qury = "SELECT * FROM newspaper_company_payment WHERE payment_year = '".$year."' and payment_month = '".$month."' and newspaper_name = '".$papername."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($papername);
            session_unset();
        }
        else{
            $_SESSION['no-details'] = "There are no Newspaper company payment in the month of ".month($month).",".$year.".";
            header("location:owner-main-page.php");
        }
    }

    function month($month){
        switch($month){
            case 1:
                return 'January';
                break;
            case 2:
                return 'February';
                break;
            case 3:
                return 'March';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'May';
                break;
            case 6:
                return 'June';
                break;
            case 7:
                return 'July';
                break;
            case 8:
                return 'August';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'October';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'December';
                break;
        }
    }

    function display($papername){
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
            <title>View Newspaper Company Payment</title>
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
                <h3>Newspaper Agent</h3><br>
            </div>
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">
            <img src="arup-img.png" width="50" height="30" class="d-inline-block align-top" alt="arupkumarsaha"> Arup Kumar Saha</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainpage" aria-controls="mainpage"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse text-center" id="mainpage">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="owner-main-page.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="new-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    New Entry
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-customer-entry.php">Customer</a>
                        <a class="dropdown-item" href="owner-employee-entry.php">Employee</a>
                        <a class="dropdown-item" href="owner-magazine-entry.php">Magazine</a>
                        <a class="dropdown-item" href="owner-newspaper-entry.php">Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="data-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Entry
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="owner-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="owner-today-total-newspaper.php">Today Total Newspaper</a>
                        <a class="dropdown-item" href="owner-daily-basis-magazine.php">Daily Basis Magazine</a>
                        <a class="dropdown-item" href="owner-daily-basis-newspaper.php">Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="owner-unsold-daily-basis-magazine.php">Unsold Daily Basis Magazine</a>
                        <a class="dropdown-item" href="owner-unsold-daily-basis-newspaper.php">Unsold Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="owner-monthly-basis-magazine.php">Monthly Basis Magazine</a>
                        <a class="dropdown-item" href="owner-monthly-basis-newspaper.php">Monthly Basis Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Payment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-magazine-company-payment.php">Magazine Company Payment</a>
                        <a class="dropdown-item" href="owner-newspaper-company-payment.php">Newspaper Company Payment</a>
                        <a class="dropdown-item" href="owner-daily-customer-payment.php">Daily Customer Payment</a>
                        <a class="dropdown-item" href="owner-monthly-customer-payment.php">Monthly Customer Payment</a>
                        <a class="dropdown-item" href="https://www.indianbank.net.in/jsp/startIB.jsp" target="_blank">Indian Bank</a>
                        <a class="dropdown-item" href="https://retail.onlinesbi.com/retail/login.htm" target="_blank">State Bank Of India</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="customer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-count-total-customer.php">Count Total Customer</a>
                        <a class="dropdown-item" href="owner-update-customer-mobile-number.php">Update Customer Mobile Number</a>
                        <a class="dropdown-item" href="owner-today-bill.php">Today Bill</a>
                        <a class="dropdown-item" href="owner-monthly-bill.php">Monthly Bill</a>
                        <a class="dropdown-item" href="owner-due-daily-bill.php">Due Daily Bill</a>
                        <a class="dropdown-item" href="owner-due-monthly-bill.php">Due Monthly Bill</a>
                        <a class="dropdown-item" href="owner-view-all-customer.php">View All Customer</a>
                        <a class="dropdown-item" href="owner-all-payment-today.php">View All Payment Today</a>
                        <a class="dropdown-item" href="owner-all-magazine-daily.php">View All Magazine Daily</a>
                        <a class="dropdown-item" href="owner-all-magazine-monthly.php">View All Magazine Monthly</a>
                        <a class="dropdown-item" href="owner-all-newspaper-daily.php">View All Newspaper Daily</a>
                        <a class="dropdown-item" href="owner-all-newspaper-monthly.php">View All Newspaper Monthly</a>
                        <a class="dropdown-item" href="owner-all-magazine-unsold.php">View All Magazine Unsold</a>
                        <a class="dropdown-item" href="owner-all-newspaper-unsold.php">View All Newspaper Unsold</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Details Check
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-details-customer-name.php">Customer Name</a>
                        <a class="dropdown-item" href="owner-details-employee-name.php">Employee Name</a>
                        <a class="dropdown-item" href="owner-details-magazine-name.php">Magazine Name</a>
                        <a class="dropdown-item" href="owner-details-newspaper-name.php">Newspaper Name</a>
                        <a class="dropdown-item" href="owner-details-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="owner-details-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="owner-details-today-total-newspaper.php">Today Total Newspaper</a>
                        <a class="dropdown-item" href="owner-view-all-magazine-company-payment.php">View All Magazine Company Payment</a>    
                        <a class="dropdown-item" href="owner-view-all-newspaper-company-payment.php">View All Newspaper Company Payment</a>    
                        <a class="dropdown-item" href="owner-view-all-dailly-customer-payment.php">View All Daily Customer Payment</a>    
                        <a class="dropdown-item" href="owner-view-all-monthly-customer-payment.php">View All Monthly Customer Payment</a>    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Delete Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="owner-delete-customer-name.php">Customer Name</a>
                        <a class="dropdown-item" href="owner-delete-employee-name.php">Employee Name</a>
                        <a class="dropdown-item" href="owner-delete-magazine-name.php">Magazine Name</a>
                        <a class="dropdown-item" href="owner-delete-newspaper-name.php">Newspaper Name</a>
                        <a class="dropdown-item" href="owner-delete-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="owner-delete-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="owner-delete-today-total-newspaper.php">Today Total Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">  
                        <a class="dropdown-item" href="owner-my-account.php">My Account</a>
                        <a class="dropdown-item" href="owner-update-mobile-number.php">Update Mobile Number</a>
                        <a class="dropdown-item" href="owner-update-email.php">Update Email</a>
                        <a class="dropdown-item" href="owner-reset-username.php">Reset Username</a>
                        <a class="dropdown-item" href="owner-reset-password.php">Reset Password</a>
                    </div>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
            </div>
        </nav><br><br>
            <div class="text-center">
                <h2 class="text-danger">View Newspaper Company Payment</h2>
            </div><br><br>
            ';
            $year = $_POST['year'];
            $month = $_POST['month'];
            $papername = $_POST['papername'];
            $qury = "SELECT * FROM newspaper_company_payment WHERE payment_year = '".$year."' and payment_month = '".$month."' and newspaper_name = '".$papername."'";
            echo '
            <div style="overflow-x:auto">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Payment Date</th>
                            <th scope="col">Payment Year</th>
                            <th scope="col">Payment Month</th>
                            <th scope="col">Newspaper Name</th>
                            <th scope="col">Bill Amount</th>
                            <th scope="col">Payment Amount</th>
                            <th scope="col">Due Amount</th>
                            <th scope="col">Transaction Type</th>
                            <th scope="col">Transaction Number</th>
                        </tr>
                    </thead>';
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $payment_date = $row['payment_date'];
                                $payment_year = $row['payment_year'];
                                $payment_month = $row['payment_month'];
                                $newspaper_name = $row['newspaper_name'];
                                $bill_amount = $row['bill_amount'];
                                $payment_amount = $row['payment_amount'];
                                $due_amount = $row['due_amount'];
                                $transaction_type = $row['transaction_type'];
                                $transaction_number = $row['transaction_number'];
                                echo '
                                <thead>
                                    <tr>
                                        <td scope="col">'.$payment_date.'</td>
                                        <td scope="col">'.$payment_year.'</td>
                                        <td scope="col">'.month($payment_month).'</td>
                                        <td scope="col">'.$newspaper_name.'</td>
                                        <td scope="col">'.$bill_amount.'</td>
                                        <td scope="col">'.$payment_amount.'</td>
                                        <td scope="col">'.$due_amount.'</td>
                                        <td scope="col">'.$transaction_type.'</td>
                                        <td scope="col">'.$transaction_number.'</td>
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