<?php 
    session_start();
    require_once 'database-connection.php';
    $date = $_SESSION['date'];
    $year = $_SESSION['year'];
    $month = $_SESSION['month'];
    $newmonth = $month + 1;
    $name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $date1 = date_create($date);
    $date2 = date_create($year."-".$month."-1");
    $date3 = date_create($year."-".$newmonth."-10");
    $date_diff = date_diff($date1,$date3);
    if($date1 > $date2){
        $late_fine = 0;
    }
    if($date1 > $date3){
        $late_fine = ($date_diff->format("%a"));
    }
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $bill = 0;
    $qury = "SELECT * FROM monthly_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and payment_year = '".$year."' and payment_month = '".$month."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "SELECT SUM(bill) AS bill FROM monthly_bill WHERE customer_name = '".$name."' and mobile = '".$mobile."' and year(date) = '".$year."' and month(date) = '".$month."'";
            if($result = $mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $bill = $row['bill'];
                    display($bill,$late_fine);
                }
            }
        }
        else{
            $qury = "SELECT due_amount FROM monthly_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and payment_year = '".$year."' and payment_month = '".$month."' order by id desc";
            if($result = $mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $bill = $row['due_amount'];
                    if($bill>0)
                        display($bill,$late_fine);
                    else{
                        $_SESSION['already-payment'] = "You do not have any due for this month of ".month($month).",".$year.".";
                        header('location:employee-main-page.php');
                    }
                }
            }
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
    function display($bill,$late_fine){
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
            <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
            <title>Monthly Customer Payment</title>
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

                h2 {
                    font-family: "Trocchi", serif;
                }

                p {
                    font-family: "Work Sans", sans-serif;
                    font-size: 15px;
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
                    <a class="nav-link active dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        </nav>
        <br><br>

            <div class="text-center">
                <h2 class="text-danger">Monthly Customer Payment</h2>
            </div>
            <div class="text-danger ml-4">
                <p>Mandatory fields are marked with an asterisk(*)</p>
            </div>
            <form action="employee-input-next-monthly-customer-payment.php" method="post">
                <div class="row mx-5 p-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="bill_amount" class="mb-0"><b>Bill Amount</b><span class="text-danger">*</span></label>
                    <input type="text" name="bill_amount" id="bill_amount" class="form-control" placeholder="Enter Bill Amount"
                        title="Enter Bill Amount" onkeyup="numberonly(this)" value="'.$bill.'"  required readonly>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="amount" class="mb-0"><b>Payment Amount</b><span class="text-danger">*</span></label>
                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount"
                        title="Enter Amount" onkeypress="numberonly(this)" onkeyup="dueamount()" required>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="due_amount" class="mb-0"><b>Due Amount</b><span class="text-danger">*</span></label>
                    <input type="text" name="due_amount" id="due_amount" class="form-control" placeholder="Enter Due Amount"
                        title="Enter Due Amount" onkeyup="numberonly(this)" onfocus="dueamount()" required readonly>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="late_fine" class="mb-0"><b>Late Fine</b><span class="text-danger">*</span></label>
                    <input type="text" name="late_fine" id="late_fine" class="form-control" placeholder="Enter Late Fine"
                        title="Enter Late Fine" onkeyup="numberonly(this)" onfocus="dueamount()" value="'.$late_fine.'" required readonly>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="transaction_type" class="mb-0"><b>Transaction Type</b><span class="text-danger">*</span></label>
                    <select name="transaction_type" id="transaction_type" class="form-control" title="Select Transaction Type" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cash">Cash</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Others Online">Others Online</option>
                    </select>
                </div> 
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="transaction_number" class="mb-0"><b>Transaction Number</b><span class="text-danger">*</span></label>
                    <input type="text" name="transaction_number" id="transaction_number" class="form-control text-capitalize" placeholder="Enter Transaction Number"
                        title="Enter Transaction Number" maxlength="100" onkeyup="numbeletteronly(this)" required> 
                </div>
                <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                    <input type="reset" name="" id="" class="btn btn-danger text-light ml-4" value="Reset">
                </div><br>
                </form>
            </div>
              <script>
                function numberonly(input) {
                    var number = /[^0-9\.]/gi;
                    input.value = input.value.replace(number, "");
                }
                function numbeletteronly(input) {
                    var numbeletter = /[^a-z0-9]/gi;
                    input.value = input.value.replace(numbeletter, "");
                }
                function dueamount(){
                    var bill_amount = document.getElementById("bill_amount").value;
                    var amount = document.getElementById("amount").value;
                    var due_amount = document.getElementById("due_amount");
                    var late_fine = Number(document.getElementById("late_fine").value);
                    due_amount = (bill_amount - amount) + late_fine;
                    document.getElementById("due_amount").value = due_amount;
                }
            </script>

        </body>

        </html>
    ';
    }
?>