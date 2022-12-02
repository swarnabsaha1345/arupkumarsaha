<?php
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
            <title>Today Total Newspaper Check</title>
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
                <a class="nav-link" href="main-page.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="new-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="data-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Entry
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="today-total-newspaper.php">Today Total Newspaper</a>
                        <a class="dropdown-item" href="daily-basis-magazine.php">Daily Basis Magazine</a>
                        <a class="dropdown-item" href="daily-basis-newspaper.php">Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="unsold-daily-basis-magazine.php">Unsold Daily Basis Magazine</a>
                        <a class="dropdown-item" href="unsold-daily-basis-newspaper.php">Unsold Daily Basis Newspaper</a>
                        <a class="dropdown-item" href="monthly-basis-magazine.php">Monthly Basis Magazine</a>
                        <a class="dropdown-item" href="monthly-basis-newspaper.php">Monthly Basis Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="payment" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Payment
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="magazine-company-payment.php">Magazine Company Payment</a>
                        <a class="dropdown-item" href="newspaper-company-payment.php">Newspaper Company Payment</a>
                        <a class="dropdown-item" href="daily-customer-payment.php">Daily Customer Payment</a>
                        <a class="dropdown-item" href="monthly-customer-payment.php">Monthly Customer Payment</a>
                        <a class="dropdown-item" href="https://www.indianbank.net.in/jsp/startIB.jsp" target="_blank">Indian Bank</a>
                        <a class="dropdown-item" href="https://retail.onlinesbi.com/retail/login.htm" target="_blank">State Bank Of India</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="customer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="count-total-customer.php">Count Total Customer</a>
                        <a class="dropdown-item" href="update-customer-mobile-number.php">Update Customer Mobile Number</a>
                        <a class="dropdown-item" href="today-bill.php">Today Bill</a>
                        <a class="dropdown-item" href="monthly-bill.php">Monthly Bill</a>
                        <a class="dropdown-item" href="due-daily-bill.php">Due Daily Bill</a>
                        <a class="dropdown-item" href="due-monthly-bill.php">Due Monthly Bill</a>
                        <a class="dropdown-item" href="view-all-customer.php">View All Customer</a>
                        <a class="dropdown-item" href="all-payment-today.php">View All Payment Today</a>
                        <a class="dropdown-item" href="all-magazine-daily.php">View All Magazine Daily</a>
                        <a class="dropdown-item" href="all-magazine-monthly.php">View All Magazine Monthly</a>
                        <a class="dropdown-item" href="all-newspaper-daily.php">View All Newspaper Daily</a>
                        <a class="dropdown-item" href="all-newspaper-monthly.php">View All Newspaper Monthly</a>
                        <a class="dropdown-item" href="all-magazine-unsold.php">View All Magazine Unsold</a>
                        <a class="dropdown-item" href="all-newspaper-unsold.php">View All Newspaper Unsold</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="dropdown-item" href="view-all-magazine-company-payment.php">View All Magazine Company Payment</a>    
                        <a class="dropdown-item" href="view-all-newspaper-company-payment.php">View All Newspaper Company Payment</a>    
                        <a class="dropdown-item" href="view-all-dailly-customer-payment.php">View All Daily Customer Payment</a>    
                        <a class="dropdown-item" href="view-all-monthly-customer-payment.php">View All Monthly Customer Payment</a>    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Delete Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="delete-customer-name.php">Customer Name</a>
                        <a class="dropdown-item" href="delete-employee-name.php">Employee Name</a>
                        <a class="dropdown-item" href="delete-magazine-name.php">Magazine Name</a>
                        <a class="dropdown-item" href="delete-newspaper-name.php">Newspaper Name</a>
                        <a class="dropdown-item" href="delete-today-total-collection.php">Today Total Collection</a>
                        <a class="dropdown-item" href="delete-today-total-magazine.php">Today Total Magazine</a>
                        <a class="dropdown-item" href="delete-today-total-newspaper.php">Today Total Newspaper</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 15px;">
                        <a class="dropdown-item" href="count-total-user.php">Count Total User</a>    
                        <a class="dropdown-item" href="view-all-user.php">View All User</a>    
                        <a class="dropdown-item" href="my-account.php">My Account</a>
                        <a class="dropdown-item" href="update-mobile-number.php">Update Mobile Number</a>
                        <a class="dropdown-item" href="update-email.php">Update Email</a>
                        <a class="dropdown-item" href="reset-username.php">Reset Username</a>
                        <a class="dropdown-item" href="reset-password.php">Reset Password</a>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="new-user-active.php">New Users Active</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
            </div>
        </nav>
        <br><br>

        <div class="text-center">
            <h2 class="text-danger">Today Total Newspaper Check</h2>
        </div>
        <div class="text-danger text-center">
            <p>Mandatory fields are marked with an asterisk(*)</p>
        </div>
        
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mx-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
              <form action="view-details-today-total-newspaper.php" method="post"><br>
                <div class="form-group pt-3 mb-1">
                    <label for="date" class="mb-0"><b>Date</b><span class="text-danger">*</span></label>
                    <input type="date" name="date" id="date" class="form-control" placeholder="Select Date"
                        title="Select Date" required>
                </div>
                <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                    <input type="reset" name="" id="" class="btn btn-danger text-light ml-4" value="Reset">
                </div><br>
                </form>
            </div> 
            </div>
        </div>
    

        </body>

        </html>
    ';
?>