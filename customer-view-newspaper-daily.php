<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $date = $_POST['date'];
    $name = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $newspaper_name = $_POST['papername'];
    $qury = "SELECT newspaper_name FROM daily_basis_newspaper WHERE customer_name = '".$name."' and mobile = '".$mobile."' and newspaper_name = '".$newspaper_name."' and date = '".$date."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($date);
            //session_unset();
        } 
        else{
            $_SESSION['no-newspaper'] = "You do not have any Newspaper on ".$date.".";
            header("location:customer-main-page.php");
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
            <title>View Newspaper Daily</title>
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
                    <a class="nav-link active dropdown-toggle" href="#" id="views" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        </nav><br><br>
            <div class="text-center">
                <h2 class="text-danger">View Newspaper Daily</h2>
            </div><br><br>
            ';
            $newspaper_name = $_POST['papername'];
            $name = $_POST['customername'];
            $mobile = $_POST['mobile'];
            $qury = "SELECT * FROM daily_basis_newspaper WHERE customer_name = '".$name."' and mobile = '".$mobile."' and newspaper_name = '".$newspaper_name."' and date = '".$date."'";
            echo '
            <div style="overflow-x:auto">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Newspaper Name</th>
                            <th scope="col">Newspaper Price</th>
                            <th scope="col">Newspaper Quentity</th>
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
                                $newspaper_name = $row['newspaper_name'];
                                $newspaper_price = $row['newspaper_price'];
                                $newspaper_quentity = $row['newspaper_quentity'];
                                $percentage = $row['percentage'];
                                $total = $row['total'];
                                echo '
                                <thead>
                                    <tr>
                                        <td scope="col">'.$date.'</td>
                                        <td scope="col">'.$customer_name.'</td>
                                        <td scope="col">'.$mobile.'</td>
                                        <td scope="col">'.$newspaper_name.'</td>
                                        <td scope="col">'.$newspaper_price.'</td>
                                        <td scope="col">'.$newspaper_quentity.'</td>
                                        <td scope="col">'.$percentage.'</td>
                                        <td scope="col">'.$total.'</td>
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
    mysqli_close($mysqli);
?>  