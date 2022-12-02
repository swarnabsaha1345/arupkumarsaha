<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $year = $_POST['year'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $qury = "SELECT * FROM monthly_customer_payment WHERE payment_year = '".$year."' and payment_month = '".$month."' and customer_name = '".$name."' and mobile = '".$mobile."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($name);
            session_unset();
        }
        else{
            $_SESSION['no-details'] = "There are no Customer payment in the month of ".month($month).",".$year.".";
            header("location:employee-main-page.php");
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

    function display($name){
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
            <title>View Monthly Customer Payment</title>
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
                <a class="nav-link" href="employee-main-page.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="data-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Entry
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="employee-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="employee-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="employee-today-total-newspaper.php">Today Total Newspaper</a>
                        <a class="dropdown-item" href="employee-daily-basis-magazine.php">Daily Basis Magazine</a>
                        <a class="dropdown-item" href="employee-daily-basis-newspaper.php">Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="employee-unsold-daily-basis-magazine.php">Unsold Daily Basis Magazine</a>
                        <a class="dropdown-item" href="employee-unsold-daily-basis-newspaper.php">Unsold Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="employee-monthly-basis-magazine.php">Monthly Basis Magazine</a>
                        <a class="dropdown-item" href="employee-monthly-basis-newspaper.php">Monthly Basis Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Payment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="employee-daily-customer-payment.php">Daily Customer Payment</a>
                        <a class="dropdown-item" href="employee-monthly-customer-payment.php">Monthly Customer Payment</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="customer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="employee-today-bill.php">Today Bill</a>
                        <a class="dropdown-item" href="employee-monthly-bill.php">Monthly Bill</a>
                        <a class="dropdown-item" href="employee-due-daily-bill.php">Due Daily Bill</a>
                        <a class="dropdown-item" href="employee-due-monthly-bill.php">Due Monthly Bill</a>
                        <a class="dropdown-item" href="employee-all-payment-today.php">View All Payment Today</a>
                        <a class="dropdown-item" href="employee-all-magazine-daily.php">View All Magazine Daily</a>
                        <a class="dropdown-item" href="employee-all-magazine-monthly.php">View All Magazine Monthly</a>
                        <a class="dropdown-item" href="employee-all-newspaper-daily.php">View All Newspaper Daily</a>
                        <a class="dropdown-item" href="employee-all-newspaper-monthly.php">View All Newspaper Monthly</a>
                        <a class="dropdown-item" href="employee-all-magazine-unsold.php">View All Magazine Unsold</a>
                        <a class="dropdown-item" href="employee-all-newspaper-unsold.php">View All Newspaper Unsold</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Details Check
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="employee-details-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="employee-details-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="employee-details-today-total-newspaper.php">Today Total Newspaper</a>   
                        <a class="dropdown-item" href="employee-view-all-dailly-customer-payment.php">View All Daily Customer Payment</a>    
                        <a class="dropdown-item" href="employee-view-all-monthly-customer-payment.php">View All Monthly Customer Payment</a>    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">  
                        <a class="dropdown-item" href="employee-my-account.php">My Account</a>
                        <a class="dropdown-item" href="employee-update-mobile-number.php">Update Mobile Number</a>
                        <a class="dropdown-item" href="employee-update-email.php">Update Email</a>
                        <a class="dropdown-item" href="employee-reset-username.php">Reset Username</a>
                        <a class="dropdown-item" href="employee-reset-password.php">Reset Password</a>
                    </div>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
            </div>
        </nav><br><br>
            <div class="text-center">
                <h2 class="text-danger">View Monthly Customer Payment</h2>
            </div><br><br>
            ';
            $year = $_POST['year'];
            $month = $_POST['month'];
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $qury = "SELECT * FROM monthly_customer_payment WHERE payment_year = '".$year."' and payment_month = '".$month."' and customer_name = '".$name."' and mobile = '".$mobile."'";
            echo '
            <div style="overflow-x:auto">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Payment Date</th>
                            <th scope="col">Payment Year</th>
                            <th scope="col">Payment Month</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Mobile</th>
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
                                $customer_name = $row['customer_name'];
                                $mobile = $row['mobile'];
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
                                        <td scope="col">'.$customer_name.'</td>
                                        <td scope="col">'.$mobile.'</td>
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