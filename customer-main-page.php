<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $mobile = $_SESSION['mobile'];
    $msg = "";
    if(isset($_SESSION['today-bill'])){
        $msg = $_SESSION['today-bill'];
        unset($_SESSION['today-bill']);
    }
    $msg1 = "";
    if(isset($_SESSION['null-today-bill'])){
        $msg1 = $_SESSION['null-today-bill'];
        unset($_SESSION['null-today-bill']);
    }
    $msg2 = "";
    if(isset($_SESSION['monthly-bill'])){
        $msg2 = $_SESSION['monthly-bill'];
        unset($_SESSION['monthly-bill']);
    }
    $msg3 = "";
    if(isset($_SESSION['null-monthly-bill'])){
        $msg3 = $_SESSION['null-monthly-bill'];
        unset($_SESSION['null-monthly-bill']);
    }
    $msg4 = "";
    if(isset($_SESSION['today-due'])){
        $msg4 = $_SESSION['today-due'];
        unset($_SESSION['today-due']);
    }
    $msg5 = "";
    if(isset($_SESSION['null-today-due'])){
        $msg5 = $_SESSION['null-today-due'];
        unset($_SESSION['null-today-due']);
    }
    $msg6 = "";
    if(isset($_SESSION['monthly-due'])){
        $msg6 = $_SESSION['monthly-due'];
        unset($_SESSION['monthly-due']);
    }
    $msg7 = "";
    if(isset($_SESSION['count'])){
        $msg7 = $_SESSION['count'];
        unset($_SESSION['count']);
    }
    $msg8 = "";
    if(isset($_SESSION['null-monthly-due'])){
        $msg8 = $_SESSION['null-monthly-due'];
        unset($_SESSION['null-monthly-due']);
    }
    $msg9 = "";
    if(isset($_SESSION['no-payment'])){
        $msg9 = $_SESSION['no-payment'];
        unset($_SESSION['no-payment']);
    }
    $msg10 = "";
    if(isset($_SESSION['no-magazine'])){
        $msg10 = $_SESSION['no-magazine'];
        unset($_SESSION['no-magazine']);
    }
    $msg11 = "";
    if(isset($_SESSION['no-newspaper'])){
        $msg11 = $_SESSION['no-newspaper'];
        unset($_SESSION['no-newspaper']);
    }
    $msg12 = "";
    if(isset($_SESSION['update-oldemail'])){
        $msg12 = $_SESSION['update-oldemail'];
        unset($_SESSION['update-oldemail']);
    }
    $msg13 = "";
    if(isset($_SESSION['update-email'])){
        $msg13 = $_SESSION['update-email'];
        unset($_SESSION['update-email']);
    }
    $msg14 = "";
    if(isset($_SESSION['update-oldmobile'])){
        $msg14 = $_SESSION['update-oldmobile'];
        unset($_SESSION['update-oldmobile']);
    }
    $msg15 = "";
    if(isset($_SESSION['update-mobile'])){
        $msg15 = $_SESSION['update-mobile'];
        unset($_SESSION['update-mobile']);
    }
    $bill_amount = 0;
    $payment_amount = 0;
    $due_amount = 0;
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
        <title>Home</title>
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
                <a class="nav-link active" href="customer-main-page.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Payment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="indianbank.php">Indian Bank</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="views" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Views
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="customer-today-bill.php">Today Bill</a>
                        <a class="dropdown-item" href="customer-monthly-bill.php">Monthly Bill</a>
                        <a class="dropdown-item" href="customer-due-daily-bill.php">Due Daily Bill</a>
                        <a class="dropdown-item" href="customer-due-monthly-bill.php">Due Monthly Bill</a>
                        <a class="dropdown-item" href="customer-payment-today.php">View Payment Today</a>
                        <a class="dropdown-item" href="customer-magazine-daily.php">View Magazine Daily</a>
                        <a class="dropdown-item" href="customer-magazine-monthly.php">View Magazine Monthly</a>
                        <a class="dropdown-item" href="customer-newspaper-daily.php">View Newspaper Daily</a>
                        <a class="dropdown-item" href="customer-newspaper-monthly.php">View Newspaper Monthly</a>
                        <a class="dropdown-item" href="customer-magazine-unsold.php">View Magazine Unsold</a>
                        <a class="dropdown-item" href="customer-newspaper-unsold.php">View Newspaper Unsold</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="customer-owner-mobile-number.php">Mobile number</a>
                        <a class="dropdown-item" href="customer-owner-email.php">Email id</a>
                        <a class="dropdown-item" href="business-location.php">Business Location</a>   
                        <a class="dropdown-item" href="house-location.php">House Location</a>    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">  
                        <a class="dropdown-item" href="customer-my-account.php">My Account</a>
                        <a class="dropdown-item" href="customer-update-mobile-number.php">Update Mobile Number</a>
                        <a class="dropdown-item" href="customer-update-email.php">Update Email</a>
                        <a class="dropdown-item" href="customer-reset-username.php">Reset Username</a>
                        <a class="dropdown-item" href="customer-reset-password.php">Reset Password</a>
                    </div>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="container mw-100 my-5">
            <div class="row h-100 pl-4 pr-4">
                <div class="col-sm mx-3 mb-3">
                <div class="card h-100 p-3 text-center">
                <h4 class="card-title text-danger">
                    Today Bill
                </h4>
                <p class="card-text" id="">';
                $qury = "SELECT purchase_date FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY purchase_date DESC";
                if($result = $mysqli->query($qury)) {
                    if(mysqli_num_rows($result)>0) {
                        while($row = $result->fetch_assoc()) {
                            $date = $row['purchase_date'];
                        }
                    }
                }
                echo '
                Date : '.$date.'
                </p>
                <p class="card-text" id="">';
                $qury = "SELECT bill_amount FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY purchase_date DESC";
                if($result = $mysqli->query($qury)) {
                    if(mysqli_num_rows($result)>0) {
                        while($row = $result->fetch_assoc()) {
                            $bill_amount = $row['bill_amount'];
                        }
                    }
                }
                echo '
                Your Bill : Rs. '.$bill_amount.'
                </p>
                </div> 
                </div> 
                <div class="col-sm mx-3 mb-3">
                <div class="card h-100 p-3 text-center">
                    <h4 class="card-title text-danger">
                        Today Due
                    </h4>
                    <p class="card-text" id="">';
                    $qury = "SELECT payment_date FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY payment_date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $date = $row['payment_date'];
                            }
                        }
                    }
                    echo '
                    Date : '.$date.'
                    </p>
                    <p class="card-text" id="">';
                    $qury = "SELECT due_amount FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY payment_date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $due_amount = $row['due_amount'];
                            }
                        }
                    }
                    echo '
                    Your Bill : Rs. '.$due_amount.'
                    </p>
                </div>
                </div>
                <div class="col-sm mx-3 mb-3">
                <div class="card h-100 p-3 text-center">
                    <h4 class="card-title text-danger">
                        Today Payment
                    </h4>
                    <p class="card-text" id="">';
                    $qury = "SELECT payment_date FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY payment_date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $date = $row['payment_date'];
                            }
                        }
                    }
                    echo '
                    Date : '.$date.'
                    </p>
                    <p class="card-text" id="">';
                    $qury = "SELECT payment_amount FROM daily_customer_payment WHERE mobile = '".$mobile."' ORDER BY payment_date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $payment_amount = $row['payment_amount'];
                            }
                        }
                    }
                    echo '
                    Your Bill : Rs. '.$payment_amount.'
                    </p>
                </div>
                </div>
            </div>
        </div>

        <script>
            var msg="'.$msg.'";
            if(msg!= ""){
                alert(msg);
            }
            var msg1="'.$msg1.'";
            if(msg1!= ""){
                alert(msg1);
            }
            var msg2="'.$msg2.'";
            if(msg2!= ""){
                alert(msg2);
            }
            var msg3="'.$msg3.'";
            if(msg3!= ""){
                alert(msg3);
            }
            var msg4="'.$msg4.'";
            if(msg4!= ""){
                alert(msg4);
            }
            var msg5="'.$msg5.'";
            if(msg5!= ""){
                alert(msg5);
            }
            var msg6="'.$msg6.'";
            if(msg6!= ""){
                alert(msg6);
            }
            var msg7="'.$msg7.'";
            if(msg7!= ""){
                alert(msg7);
            }
            var msg8="'.$msg8.'";
            if(msg8!= ""){
                alert(msg8);
            }
            var msg9="'.$msg9.'";
            if(msg9!= ""){
                alert(msg9);
            }
            var msg10="'.$msg10.'";
            if(msg10!= ""){
                alert(msg10);
            }
            var msg11="'.$msg11.'";
            if(msg11!= ""){
                alert(msg11);
            }
            var msg12="'.$msg12.'";
            if(msg12!= ""){
                alert(msg12);
            }
            var msg13="'.$msg13.'";
            if(msg13!= ""){
                alert(msg13);
            }
            var msg14="'.$msg14.'";
            if(msg14!= ""){
                alert(msg14);
            }
            var msg15="'.$msg15.'";
            if(msg15!= ""){
                alert(msg15);
            }
        </script>

        </body>
        
        </html>
    ';
?>