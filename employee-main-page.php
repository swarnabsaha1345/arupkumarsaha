<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    $msg = "";
    if(isset($_SESSION['paper-name'])){
        $msg = $_SESSION['paper-name'];
        session_unset();
    }
    $msg1 = "";
    if(isset($_SESSION['previous-papername'])){
        $msg1 = $_SESSION['previous-papername'];
        session_unset();
    }
    $msg2 = "";
    if(isset($_SESSION['magazine-name'])){
        $msg2 = $_SESSION['magazine-name'];
        session_unset();
    }
    $msg3 = "";
    if(isset($_SESSION['previous-magazinename'])){
        $msg3 = $_SESSION['previous-magazinename'];
        session_unset();
    }
    $msg4 = "";
    if(isset($_SESSION['customer'])){
        $msg4 = $_SESSION['customer'];
        session_unset();
    }
    $msg5 = "";
    if(isset($_SESSION['e-mobile'])){
        $msg5 = $_SESSION['e-mobile'];
        session_unset();
    }
    $msg6 = "";
    if(isset($_SESSION['customer'])){
        $msg6 = $_SESSION['customer'];
        session_unset();
    }
    $msg7 = "";
    if(isset($_SESSION['c-mobile'])){
        $msg7 = $_SESSION['c-mobile'];
        session_unset();
    }
    $msg8 = "";
    if(isset($_SESSION['cash'])){
        $msg8 = $_SESSION['cash'];
        session_unset();
    }
    $msg9 = "";
    if(isset($_SESSION['c-date'])){
        $msg9 = $_SESSION['c-date'];
        session_unset();
    }
    $msg10 = "";
    if(isset($_SESSION['today-magazine'])){
        $msg10 = $_SESSION['today-magazine'];
        session_unset();
    }
    $msg11 = "";
    if(isset($_SESSION['today-magazinename'])){
        $msg11 = $_SESSION['today-magazinename'];
        session_unset();
    }
    $msg12 = "";
    if(isset($_SESSION['today-newspaper'])){
        $msg12 = $_SESSION['today-newspaper'];
        session_unset();
    }
    $msg13 = "";
    if(isset($_SESSION['today-papername'])){
        $msg13 = $_SESSION['today-papername'];
        session_unset();
    }
    $msg14 = "";
    if(isset($_SESSION['daily-magazine'])){
        $msg14 = $_SESSION['daily-magazine'];
        session_unset();
    }
    $msg15 = "";
    if(isset($_SESSION['daily-magazinename'])){
        $msg15 = $_SESSION['daily-magazinename'];
        session_unset();
    }
    $msg16 = "";
    if(isset($_SESSION['daily-newspaper'])){
        $msg16 = $_SESSION['daily-newspaper'];
        session_unset();
    }
    $msg17 = "";
    if(isset($_SESSION['daily-papername'])){
        $msg17 = $_SESSION['daily-papername'];
        session_unset();
    }
    $msg18 = "";
    if(isset($_SESSION['monthly-magazine'])){
        $msg18 = $_SESSION['monthly-magazine'];
        session_unset();
    }
    $msg19 = "";
    if(isset($_SESSION['monthly-magazinename'])){
        $msg19 = $_SESSION['monthly-magazinename'];
        session_unset();
    }
    $msg20 = "";
    if(isset($_SESSION['monthly-newspaper'])){
        $msg20 = $_SESSION['monthly-newspaper'];
        session_unset();
    }
    $msg21 = "";
    if(isset($_SESSION['monthly-papername'])){
        $msg21 = $_SESSION['monthly-papername'];
        session_unset();
    }
    $msg22 = "";
    if(isset($_SESSION['no-magzine-payment'])){
        $msg22 = $_SESSION['no-magzine-payment'];
        unset($_SESSION['no-magzine-payment']);
    }
    $msg23 = "";
    if(isset($_SESSION['magazine-company-payment'])){
        $msg23 = $_SESSION['magazine-company-payment'];
        unset($_SESSION['magazine-company-payment']);
    }
    $msg24 = "";
    if(isset($_SESSION['customer-transaction'])){
        $msg24 = $_SESSION['customer-transaction'];
        session_unset();
    }
    $msg25 = "";
    if(isset($_SESSION['fault-customer-transaction'])){
        $msg25 = $_SESSION['fault-customer-transaction'];
        session_unset();
    }
    $msg26 = "";
    if(isset($_SESSION['no-cash'])){
        $msg26 = $_SESSION['no-cash'];
        session_unset();
    }
    $msg27 = "";
    if(isset($_SESSION['no-details-magazine'])){
        $msg27 = $_SESSION['no-details-magazine'];
        session_unset();
    }
    $msg28 = "";
    if(isset($_SESSION['no-details-newspaper'])){
        $msg28 = $_SESSION['no-details-newspaper'];
        session_unset();
    }
    $msg29 = "";
    if(isset($_SESSION['update-mobile'])){
        $msg29 = $_SESSION['update-mobile'];
        //session_unset();
        unset($_SESSION['update-mobile']);
    }
    $msg30 = "";
    if(isset($_SESSION['update-oldmobile'])){
        $msg30 = $_SESSION['update-oldmobile'];
        unset($_SESSION['update-oldmobile']);
    }
    $msg31 = "";
    if(isset($_SESSION['update-email'])){
        $msg31 = $_SESSION['update-email'];
        unset($_SESSION['update-email']);
    }
    $msg32 = "";
    if(isset($_SESSION['update-oldemail'])){
        $msg32 = $_SESSION['update-oldemail'];
        unset($_SESSION['update-oldemail']);
    }
    $msg33 = "";
    if(isset($_SESSION['update-oldusername'])){
        $msg33 = $_SESSION['update-oldusername'];
        unset($_SESSION['update-oldusername']);
    }
    $msg34 = "";
    if(isset($_SESSION['no-user'])){
        $msg34 = $_SESSION['no-user'];
        session_unset();
    }
    $msg36 = "";
    if(isset($_SESSION['monthly-customer-transaction'])){
        $msg36 = $_SESSION['monthly-customer-transaction'];
        unset($_SESSION['monthly-customer-transaction']);
    }
    $msg37 = "";
    if(isset($_SESSION['fault-monthly-customer-transaction'])){
        $msg37 = $_SESSION['fault-monthly-customer-transaction'];
        unset($_SESSION['fault-monthly-customer-transaction']); 
    }
    $msg38 = "";
    if(isset($_SESSION['today-bill'])){
        $msg38 = $_SESSION['today-bill'];
        session_unset();
    }
    $msg39 = "";
    if(isset($_SESSION['null-today-bill'])){
        $msg39 = $_SESSION['null-today-bill'];
        session_unset();
    }
    $msg40 = "";
    if(isset($_SESSION['monthly-bill'])){
        $msg40 = $_SESSION['monthly-bill'];
        session_unset();
    }
    $msg41 = "";
    if(isset($_SESSION['null-monthly-bill'])){
        $msg41 = $_SESSION['null-monthly-bill'];
        session_unset();
    }
    $msg42 = "";
    if(isset($_SESSION['today-due'])){
        $msg42 = $_SESSION['today-due'];
        session_unset();
    }
    $msg43 = "";
    if(isset($_SESSION['null-today-due'])){
        $msg43 = $_SESSION['null-today-due'];
        session_unset();
    }
    $msg44 = "";
    if(isset($_SESSION['monthly-due'])){
        $msg44 = $_SESSION['monthly-due'];
        session_unset();
    }
    $msg45 = "";
    if(isset($_SESSION['null-monthly-due'])){
        $msg45 = $_SESSION['null-monthly-due'];
        session_unset();
    }
    $msg46 = "";
    if(isset($_SESSION['no-payment'])){
        $msg46 = $_SESSION['no-payment'];
        session_unset();
    }
    $msg47 = "";
    if(isset($_SESSION['no-magazine'])){
        $msg47 = $_SESSION['no-magazine'];
        session_unset();
    }
    $msg48 = "";
    if(isset($_SESSION['no-newspaper'])){
        $msg48 = $_SESSION['no-newspaper'];
        session_unset();
    }
    $msg49 = "";
    if(isset($_SESSION['delete'])){
        $msg49 = $_SESSION['delete'];
        session_unset();
    }
    $msg50 = "";
    if(isset($_SESSION['no-delete'])){
        $msg50 = $_SESSION['no-delete'];
        session_unset();
    }
    $msg51 = "";
    if(isset($_SESSION['delete-for'])){
        $msg51 = $_SESSION['delete-for'];
        session_unset();
    }
    $msg52 = "";
    if(isset($_SESSION['count'])){
        $msg52 = $_SESSION['count'];
        session_unset();
    }
    $msg53 = "";
    if(isset($_SESSION['already-payment'])){
        $msg53 = $_SESSION['already-payment'];
        unset($_SESSION['already-payment']);
    }
    $msg54 = "";
    if(isset($_SESSION['cart-null'])){
        $msg54 = $_SESSION['cart-null'];
        session_unset();
    }
    $msg55 = "";
    if(isset($_SESSION['unsold-magazine'])){
        $msg55 = $_SESSION['unsold-magazine'];
        session_unset();
    }
    $msg56 = "";
    if(isset($_SESSION['wrong-unsold-magazine'])){
        $msg56 = $_SESSION['wrong-unsold-magazine'];
        session_unset();
    }
    $msg57 = "";
    if(isset($_SESSION['unsold-newspaper'])){
        $msg57 = $_SESSION['unsold-newspaper'];
        session_unset();
    }
    $msg58 = "";
    if(isset($_SESSION['wrong-unsold-newspaper'])){
        $msg58 = $_SESSION['wrong-unsold-newspaper'];
        session_unset();
    }
    $msg59 = "";
    if(isset($_SESSION['newspaper-company-payment'])){
        $msg59 = $_SESSION['newspaper-company-payment'];
        session_unset();
    }
    $msg60 = "";
    if(isset($_SESSION['oldusername'])){
        $msg60 = $_SESSION['oldusername'];
        session_unset();
    }
    $msg61 = "";
    if(isset($_SESSION['new-user'])){
        $msg61 = $_SESSION['new-user'];
        session_unset();
    }
    $msg62 = "";
    if(isset($_SESSION['old-mobile'])){
        $msg62 = $_SESSION['old-mobile'];
        session_unset();
    }
    $msg63 = "";
    if(isset($_SESSION['no-details'])){
        $msg63 = $_SESSION['no-details'];
        session_unset();
    }
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
                <a class="nav-link active" href="employee-main-page.php">Home</a>
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
        <div class="container mw-100 my-5">
            <div class="row h-100 pl-4 pr-4">
                <div class="col-sm mx-3 mb-3">
                <div class="card h-100 p-3 text-center">
                <h4 class="card-title text-danger">
                    Today Total Collection
                </h4>
                <p class="card-text" id="">';
                $qury = "SELECT date FROM today_total_collection WHERE date =(SELECT date FROM today_total_collection ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                if($result = $mysqli->query($qury)) {
                    if(mysqli_num_rows($result)>0) {
                        while($row = $result->fetch_assoc()) {
                            $date = $row['date'];
                        }
                    }
                }
                echo '
                Date : '.$date.'
                </p>
                <p class="card-text" id="">';
                $qury = "SELECT total FROM today_total_collection WHERE date =(SELECT date FROM today_total_collection ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                if($result = $mysqli->query($qury)) {
                    if(mysqli_num_rows($result)>0) {
                        while($row = $result->fetch_assoc()) {
                            $total = $row['total'];
                        }
                    }
                }
                echo '
                Total Collection : Rs. '.$total.'
                </p>
                </div> 
                </div> 
                <div class="col-sm mx-3 mb-3">
                    <div class="card h-100 p-3 text-center">
                    <h4 class="card-title text-danger">
                        Today Total Magazine
                    </h4>
                    <p class="card-text" id="">';
                    $qury = "SELECT date FROM today_total_magazine WHERE date =(SELECT date FROM today_total_magazine ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $date = $row['date'];
                            }
                        }
                    }
                    echo '
                    Date : '.$date.'
                    </p>
                    <div style="overflow-x:auto; height: 300px;">
                    <table class="table">
                    <thead class="thead-dark" style="position: sticky; top: 0;">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Quentity</th>
                        </tr>
                    </thead>
                    ';
                   $qury = "SELECT magazine_name,magazine_quentity FROM today_total_magazine WHERE date =(SELECT date FROM today_total_magazine ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                   if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $magazine_name = $row['magazine_name'];
                                $magazine_quentity = $row['magazine_quentity'];
                                echo '
                                <tr>
                                    <td scope="col">'.$magazine_name.'</td>
                                    <td scope="col">'.$magazine_quentity.'</td>
                                </tr>';
                            }
                        }
                    }       
                echo '
                </table>
                    </div>
                    </div>
                </div>
                <div class="col-sm mx-3 mb-3">
                    <div class="card h-100 p-3 text-center">
                    <h4 class="card-title text-danger">
                        Today Total Newspaper
                    </h4>
                    <p class="card-text" id="">';
                    $qury = "SELECT date FROM today_total_newspaper WHERE date =(SELECT date FROM today_total_newspaper ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                    if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $date = $row['date'];
                            }
                        }
                    }
                    echo '
                    Date : '.$date.'
                    </p>
                    <div style="overflow-x:auto; height: 300px;">
                    <table class="table">
                    <thead class="thead-dark" style="position: sticky; top: 0;">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Quentity</th>
                        </tr>
                    </thead>
                    ';
                   $qury = "SELECT newspaper_name,newspaper_quentity FROM today_total_newspaper WHERE date =(SELECT date FROM today_total_newspaper ORDER BY date DESC LIMIT 1) ORDER BY date DESC";
                   if($result = $mysqli->query($qury)) {
                        if(mysqli_num_rows($result)>0) {
                            while($row = $result->fetch_assoc()) {
                                $newspaper_name = $row['newspaper_name'];
                                $newspaper_quentity = $row['newspaper_quentity'];
                                echo '
                                <tr>
                                    <td scope="col">'.$newspaper_name.'</td>
                                    <td scope="col">'.$newspaper_quentity.'</td>
                                </tr>';
                            }
                        }
                    }       
                echo '
                </table>
                    </div>
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
            var msg16="'.$msg16.'";
            if(msg16!= ""){
                alert(msg16);
            }
            var msg17="'.$msg17.'";
            if(msg17!= ""){
                alert(msg17);
            }
            var msg18="'.$msg18.'";
            if(msg18!= ""){
                alert(msg18);
            }
            var msg19="'.$msg19.'";
            if(msg19!= ""){
                alert(msg19);
            }
            var msg20="'.$msg20.'";
            if(msg20!= ""){
                alert(msg20);
            }
            var msg21="'.$msg21.'";
            if(msg21!= ""){
                alert(msg21);
            }
            var msg22="'.$msg22.'";
            if(msg22!= ""){
                alert(msg22);
            }
            var msg23="'.$msg23.'";
            if(msg23!= ""){
                alert(msg23);
            }
            var msg24="'.$msg24.'";
            if(msg24!= ""){
                alert(msg24);
            }
            var msg25="'.$msg25.'";
            if(msg25!= ""){
                alert(msg25);
            }
            var msg26="'.$msg26.'";
            if(msg26!= ""){
                alert(msg26);
            }
            var msg27="'.$msg27.'";
            if(msg27!= ""){
                alert(msg27);
            }
            var msg28="'.$msg28.'";
            if(msg28!= ""){
                alert(msg28);
            }
            var msg29="'.$msg29.'";
            if(msg29!= ""){
                alert(msg29);
            }
            var msg30="'.$msg30.'";
            if(msg30!= ""){
                alert(msg30);
            }
            var msg31="'.$msg31.'";
            if(msg31!= ""){
                alert(msg31);
            }
            var msg32="'.$msg32.'";
            if(msg32!= ""){
                alert(msg32);
            }
            var msg33="'.$msg33.'";
            if(msg33!= ""){
                alert(msg33);
            }
            var msg34="'.$msg34.'";
            if(msg34!= ""){
                alert(msg34);
            }
            var msg36="'.$msg36.'";
            if(msg36!= ""){
                alert(msg36);
            }
            var msg37="'.$msg37.'";
            if(msg37!= ""){
                alert(msg37);
            }
            var msg38="'.$msg38.'";
            if(msg38!= ""){
                alert(msg38);
            }
            var msg39="'.$msg39.'";
            if(msg39!= ""){
                alert(msg39);
            }
            var msg40="'.$msg40.'";
            if(msg40!= ""){
                alert(msg40);
            }
            var msg41="'.$msg41.'";
            if(msg41!= ""){
                alert(msg41);
            }
            var msg42="'.$msg42.'";
            if(msg42!= ""){
                alert(msg42);
            }
            var msg43="'.$msg43.'";
            if(msg43!= ""){
                alert(msg43);
            }
            var msg44="'.$msg44.'";
            if(msg44!= ""){
                alert(msg44);
            }
            var msg45="'.$msg45.'";
            if(msg45!= ""){
                alert(msg45);
            }
            var msg46="'.$msg46.'";
            if(msg46!= ""){
                alert(msg46);
            }
            var msg47="'.$msg47.'";
            if(msg47!= ""){
                alert(msg47);
            }
            var msg48="'.$msg48.'";
            if(msg48!= ""){
                alert(msg48);
            }
            var msg49="'.$msg49.'";
            if(msg49!= ""){
                alert(msg49);
            }
            var msg50="'.$msg50.'";
            if(msg50!= ""){
                alert(msg50);
            }
            var msg51="'.$msg51.'";
            if(msg51!= ""){
                alert(msg51);
            }
            var msg52="'.$msg52.'";
            if(msg52!= ""){
                alert(msg52);
            }
            var msg53="'.$msg53.'";
            if(msg53!= ""){
                alert(msg53);
            }
            var msg54="'.$msg54.'";
            if(msg54!= ""){
                alert(msg54);
            }
            var msg55="'.$msg55.'";
            if(msg55!= ""){
                alert(msg55);
            }
            var msg56="'.$msg56.'";
            if(msg56!= ""){
                alert(msg56);
            }
            var msg57="'.$msg57.'";
            if(msg57!= ""){
                alert(msg57);
            }
            var msg58="'.$msg58.'";
            if(msg58!= ""){
                alert(msg58);
            }
            var msg59="'.$msg59.'";
            if(msg59!= ""){
                alert(msg59);
            }
            var msg60="'.$msg60.'";
            if(msg60!= ""){
                alert(msg60);
            }
            var msg61="'.$msg61.'";
            if(msg61!= ""){
                alert(msg61);
            }
            var msg62="'.$msg62.'";
            if(msg62!= ""){
                alert(msg62);
            }
            var msg63="'.$msg63.'";
            if(msg63!= ""){
                alert(msg63);
            }
        </script>

        </body>
        
        </html>
    ';
?>