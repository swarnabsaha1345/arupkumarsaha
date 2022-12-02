<?php  
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $qury = "SELECT name,mobile FROM customer_entry";
    $qury1 = "SELECT magazine_name,magazine_price FROM magazine_entry";
    $mobile = array();
    $price = array();
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
            <title>Monthly Basis Magazine</title>
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
                    <a class="nav-link active dropdown-toggle" href="#" id="data-entry" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <br><br>

            <div class="text-center">
                <h2 class="text-danger">Monthly Basis Magazine</h2>
            </div>
            <div class="text-danger ml-4">
                <p>Mandatory fields are marked with an asterisk(*)</p>
            </div>

            <form action="employee-input-monthly-basis-magazine.php" method="post">
                <div class="row mx-5 p-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="date" class="mb-0"><b>Date</b><span class="text-danger">*</span></label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Select Date"
                            title="Select Date" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="customername" class="mb-0"><b>Customer Name</b><span class="text-danger">*</span></label>
                        <select name="customername" id="customername" class="form-control" title="Select Customer Name" onchange="select_mobile()" required>
                            <option value="" disabled selected>Select</option>';
                            if($result = $mysqli->query($qury)) {
                                if(mysqli_num_rows($result)>0) {
                                  while($row = $result->fetch_assoc()) {
                                       array_push($mobile,$row['mobile']);
                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                    }
                                }
                            }
                    echo '
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="mobile" class="mb-0"><b>Mobile</b><span class="text-danger">*</span></label>
                        <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"
                            title="Enter Your Mobile Number" maxlength="10" readonly required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="magazinename" class="mb-0"><b>Magazine Name</b><span class="text-danger">*</span></label>
                        <select name="magazinename" id="magazinename" class="form-control" title="Select Magazine Name" onchange="select_price()" required>
                            <option value="" disabled selected>Select</option>';
                            if($result = $mysqli->query($qury1)) {
                                if(mysqli_num_rows($result)>0) {
                                  while($row = $result->fetch_assoc()) {
                                       array_push($price,$row['magazine_price']);
                                       echo '<option value="'.$row['magazine_name'].'">'.$row['magazine_name'].'</option>';
                                    }
                                }
                            }

                    echo '            
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="quentity" class="mb-0"><b>Magazine Quentity</b><span class="text-danger">*</span></label>
                        <input type="number" name="quentity" id="quentity" class="form-control"
                            placeholder="Enter Magazine Quentity" title="Enter Magazine Quentity" onkeyup="total_amount()" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="price" class="mb-0"><b>Magazine Price</b><span class="text-danger">*</span></label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Enter Magazine Price"
                            title="Enter Magazine Price" onkeyup="total_amount()" readonly required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="percentage" class="mb-0"><b>Percentage</b><span class="text-danger">*</span></label>
                        <input type="text" name="percentage" id="percentage" class="form-control" placeholder="Enter Customer Percentage"
                            title="Enter Customer Percentage" onkeyup="total_amount()" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="total" class="mb-0"><b>Total Price</b><span class="text-danger">*</span></label>
                        <input type="text" name="total" id="total" class="form-control" placeholder="Enter Total Price"
                            title="Enter Total Price" readonly onfocus="total_amount()" required>
                    </div>
                    <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                        <input type="reset" name="" id="" class="btn btn-danger text-light ml-4" value="Reset">
                    </div>
                </div><br>
            </form>

            <script>
                var mobile = [];';
                $count = 0;
                while($count < count($mobile)){
                    echo'mobile.push('.$mobile[$count].');';
                    $count=$count+1;
                }
                echo'
                var price = [];';
                $count = 0;
                while($count < count($price)){
                    echo'price.push('.$price[$count].');';
                    $count=$count+1;
                }
                echo '
                function select_mobile(){
                    document.getElementById("mobile").value = mobile[document.getElementById("customername").selectedIndex-1];
                }
                function select_price(){
                    document.getElementById("price").value = price[document.getElementById("magazinename").selectedIndex-1];
                }
                function total_amount(){
                    var quentity = document.getElementById("quentity").value;
                    var price = document.getElementById("price").value;
                    var percentage = document.getElementById("percentage").value;
                    var total = document.getElementById("total");
                    total = (quentity*price) - quentity*price*percentage/100;  
                    document.getElementById("total").value = total;
                }
            </script>

        </body>

        </html>
    ';
?>