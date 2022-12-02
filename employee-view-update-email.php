<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_POST['username'];
    $_SESSION['user'] = $username;
    $password = $_POST['password'];
    $qury = "SELECT * FROM new_users WHERE username = '".$username."' and password = '".$password."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
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
                    <title>Update Email</title>
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
                    <a class="nav-link active dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <h2 class="text-danger">Update Email</h2>
                </div>
                <div class="text-danger text-center">
                    <p>Mandatory fields are marked with an asterisk(*)</p>
                </div>
                
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mx-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
                        <form action="employee-input-update-email.php" method="post"><br>
                        <div class="form-group pt-3 mb-1">
                            <label for="email" class="mb-0"><b>Email</b><span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control text-lowercase" placeholder="Enter Email"
                                title="Enter Email" onkeyup="emailonly()" maxlength="100" required>
                        </div>
                        <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                            <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                            <input type="reset" name="" id="" class="btn btn-danger text-light ml-4" value="Reset">
                        </div><br>
                        </form> 
                    </div> 
                    </div> 
                </div>

                <script>
                    function emailonly(input) {
                        var email = /[^a-z0-9\-\@\.]/gi;
                        input.value = input.value.replace(email, "");
                        }
                </script>  
                </body>
            
                </html>
            ';
        }
        else{
            $_SESSION['no-user'] = "Please check your Username or Password.";
            header("location:employee-main-page.php");
        }
    }
    mysqli_close($mysqli);
?>