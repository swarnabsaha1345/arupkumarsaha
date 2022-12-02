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
        <title>Magazine Entry</title>
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
                    <a class="nav-link active dropdown-toggle" href="#" id="new-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="details" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <h2 class="text-danger">Magazine Entry</h2>
        </div>
        <div class="text-danger ml-4">
            <p>Mandatory fields are marked with an asterisk(*)</p>
        </div>
        
        <form action="input-magazine.php" method="post">
            <div class="row mx-5 p-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
                <div class="col-lg-3 col-md-4 pt-3 mb-1">
                    <label for="companyname" class="mb-0"><b>Magazine Company Name</b><span class="text-danger">*</span></label>
                    <input type="text" name="companyname" id="companyname" class="form-control text-capitalize"
                    placeholder="Enter Magazine Company Name" title="Enter Magazine Company Name" maxlength="100"
                    onkeyup="lettersonly(this)" required>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="mobile" class="mb-0"><b>Company Mobile</b><span class="text-danger">*</span></label>
                    <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"
                    title="Enter Your Mobile Number" maxlength="10" onkeypress="numberonly(this)" onkeyup="check()" required>
                    <span id="mob" class="text-danger"></span>
                </div>
                <div class="col-lg-5 col-md-4 pt-3 mb-1">
                    <label for="email" class="mb-0"><b>Company Email</b></label>
                    <input type="email" name="email" id="email" class="form-control text-lowercase" placeholder="Enter A Valid Email"
                        title="Enter Your Email" maxlength="100" onkeyup="emailonly(this)">
                    </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="securitydeposit" class="mb-0"><b>Security Deposit</b><span class="text-danger">*</span></label>
                    <input type="text" name="securitydeposit" id="securitydeposit" class="form-control" placeholder="Enter Security Deposit"
                    title="Enter Security Deposit" maxlength="7" onkeypress="numberonly(this)" onkeyup="check()" required>
                    <span id="sec" class="text-danger"></span>
                </div>
                <div class="col-lg-8 col-md-8 pt-3 mb-1">
                    <label for="address" class="mb-0"><b>Company Address</b><span class="text-danger">*</span></label>
                    <input type="text" name="address" id="address" class="form-control text-capitalize"
                        placeholder="Enter Company Address" title=" Enter Company Address" maxlength="300" required>
                    </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="magazinename" class="mb-0"><b>Magazine Name</b><span class="text-danger">*</span></label>
                    <input type="text" name="magazinename" id="magazinename" class="form-control text-capitalize"
                    placeholder="Enter Magazine Name" title="Enter Magazine Name" maxlength="100" onkeyup="lettersonly(this)"
                    required>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                    <label for="price" class="mb-0"><b>Magazine Price</b><span class="text-danger">*</span></label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Enter Magazine Price"
                    title="Enter Magazine Price" onkeyup="priceonly(this)" required>
                </div>
                <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" disabled>
                    <input type="reset" name="" id="" class="btn btn-danger text-light ml-4" value="Reset">
                </div>
            </div><br>
        </form>
        
        <script>
            function lettersonly(input) {
            var letter = /[^A-Za-z\ ]/gi;
            input.value = input.value.replace(letter, "");
            }
            function numberonly(input) {
            var number = /[^0-9]/gi;
            input.value = input.value.replace(number, "");
            }
            function priceonly(input) {
                var number = /[^0-9/.]/gi;
                input.value = input.value.replace(number, "");
                }
            function emailonly(input) {
                var email = /[^a-z0-9\-\@\.]/gi;
                input.value = input.value.replace(email, "");
            }
            function check() {
            var mobile = document.getElementById("mobile").value;
            var securitydeposit = document.getElementById("securitydeposit").value;
            var price = document.getElementById("price").value;
            if (mobile.search(/[A-Z]/) > -1) {
                document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (mobile.search(/[a-z]/) > -1) {
                document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (mobile.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>\ ]/) > -1) {
                document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (mobile.length < 10) {
                document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            else {
                document.getElementById("mob").innerHTML = "";
                document.getElementById("submit").disabled = false;
            }
            if (securitydeposit == "") {
                document.getElementById("sec").innerHTML = "Please enter your security deposit money upto 99,99,999";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (securitydeposit.search(/[A-Z]/) > -1) {
                document.getElementById("sec").innerHTML = "Please enter only number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (securitydeposit.search(/[a-z]/) > -1) {
                document.getElementById("sec").innerHTML = "Please enter only number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            if (securitydeposit.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>\ ]/) > -1) {
                document.getElementById("sec").innerHTML = "Please enter only number";
                document.getElementById("submit").disabled = true;
                return false;
            }
            else {
                document.getElementById("sec").innerHTML = "";
                document.getElementById("submit").disabled = false;
            }
            }
        </script>
        
        </body>
        
        </html>
    ';
?>