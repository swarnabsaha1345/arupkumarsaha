<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qury = "SELECT * FROM new_users WHERE username = '".$username."' and password = '".$password."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $name = "";
            $gender = "";
            $dob = "";
            $mobile = "";
            $email = "";
            $address = "";
            $town = "";
            $district = "";
            $state = "";
            $country = "";
            $pin_code = "";
            $username = "";
            $password = "";
            $position = "";
            if($result = $mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $dob = $row['dob'];
                    $mobile = $row['mobile'];
                    $email = $row['email'];
                    $address = $row['address'];
                    $town = $row['town'];
                    $district = $row['district'];
                    $state = $row['state'];
                    $country = $row['country'];
                    $pin_code = $row['pin_code'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $position = $row['position'];
                }
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
                <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
                <title>View My Account</title>
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
                
                    a:link {
                    text-decoration: none;
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
                <a class="nav-link" href="customer-main-page.php">Home</a>
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
                    <a class="nav-link active dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <br><br>
                
                <div class="text-center">
                    <h2 class="text-danger">View My Account</h2>
                </div>
                
                <!--Personal Details-->
                
                    <div class="row mx-0 p-3">
                        <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="name" class="mb-0"><b>Name</b></label>
                        <input type="text" name="name" id="name" class="form-control" value="'.$name.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="gender" class="mb-0"><b>Gender</b></label>
                        <input type="text" name="gender" id="gender" class="form-control" value="'.$gender.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="dob" class="mb-0"><b>Date of Birth</b></label>
                        <input type="date" name="dob" id="dob" class="form-control" value="'.$dob.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="mobile" class="mb-0"><b>Mobile</b></label>
                        <input type="tel" name="mobile" id="mobile" class="form-control" value="'.$mobile.'" readonly>
                        </div>
                        <div class="col-lg-4 col-md-4 pt-3 mb-1">
                        <label for="email" class="mb-0"><b>Email</b></label>
                        <input type="email" name="email" id="email" class="form-control" value="'.$email.'" readonly>
                        </div>
                    
                    
                        <!--Address Details-->
                    
                        <div class="col-lg-12 col-md-12 pt-3 mb-1">
                        <label for="address" class="mb-0"><b>Address</b></label>
                        <input type="text" name="address" id="address" class="form-control" value="'.$address.'" readonly>
                        </div>
                        <div class="col-lg-3 col-md-3 pt-3 mb-1">
                        <label for="town"><b>Town</b></label>
                        <input type="text" name="town" id="town" class="form-control" value="'.$town.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 pt-3 mb-1">
                        <label for="district"><b>District</b></label>
                        <input type="text" name="district" id="district" class="form-control" value="'.$district.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 pt-3 mb-1">
                        <label for="state"><b>State</b></label>
                        <input type="text" name="state" id="state" class="form-control" value="'.$state.'" readonly>
                        </div>
                        <div class="col-lg-2 col-md-2 pt-3 mb-1">
                        <label for="country"><b>Country</b></label>
                        <input type="text" name="country" id="country" class="form-control" value="'.$country.'" readonly>
                        </div>
                        <div class="col-lg-3 col-md-3 pt-3 mb-1">
                        <label for="pin-code"><b>Pin Code</b></label>
                        <input type="text" name="pin-code" id="pin-code" class="form-control" value="'.$pin_code.'" readonly>
                        </div>
                    
                        <!--User Account-->
                        
                        <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="username" class="mb-0"><b>Username</b></label>
                        <input type="text" name="username" id="username" class="form-control" value="'.$username.'" readonly>
                        </div>
                        <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="password" class="mb-0"><b>Password</b></label>
                        <input type="text" name="password" id="password" class="form-control" value="'.$password.'" readonly>
                        </div>
                        <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="position" class="mb-0"><b>Your Position</b></label>
                        <input type="text" name="position" id="position" class="form-control" value="'.$position.'" readonly>
                        </div>
                    </div>
                </body>
                
                </html>
            ';
        }
        else{
            $_SESSION['no-user'] = "Please check your Username or Password.";
            header("location:customer-main-page.php");
        }
    }
    mysqli_close($mysqli);
?>