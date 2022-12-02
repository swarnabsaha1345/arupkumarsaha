<?php
    session_start();
    $msg = "";
    if(isset($_SESSION['wrong-password'])){
        $msg = $_SESSION['wrong-password'];
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
            <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
            <title>Forget password</title>
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
            </div><br><br>
            <div class="text-center">
                <h2 class="text-danger">Forget Password</h2>
            </div>
            <div class="text-danger ml-4">
                <p>Mandatory fields are marked with an asterisk(*)</p>
            </div>

            <!--Personal Details-->

            <form action="check-password.php" method="post">
                <div class="row mx-0 p-3">
                    <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="name" class="mb-0"><b>Name</b><span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control text-capitalize" placeholder="Enter Name"
                            title="Enter Your Name" maxlength="100" onkeyup="lettersonly(this)" required>
                    </div>
                    <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="dob" class="mb-0"><b>Date of Birth</b><span class="text-danger">*</span></label>
                        <input type="date" name="dob" id="dob" class="form-control" title="Enter Your Date Of Birth" required>
                    </div>
                    <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="mobile" class="mb-0"><b>Mobile</b><span class="text-danger">*</span></label>
                        <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"
                            title="Enter Your Mobile Number" maxlength="10" onkeypress="numberonly(this)" onkeyup="check()" required>
                            <span id="mob" class="text-danger"></span>
                    </div>
                    <div class="col-lg-3 col-md-4 pt-3 mb-1">
                        <label for="position" class="mb-0"><b>Your Position</b><span class="text-danger">*</span></label>
                        <select name="position" id="position" class="form-control" title="Select your position" required>
                            <option value="" disabled selected>Select</option>
                            <option value="Admin">Admin</option>
                            <option value="Owner">Owner</option>
                            <option value="Employee">Employee</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>

                    <!--User Details-->

                    <div class="col-lg-4 col-md-4 pt-3 mb-1">
                        <label for="username" class="mb-0"><b>Username</b><span class="text-danger">*</span></label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Create Username"
                            title="Create Username" maxlength="20" onkeyup="check()" required disabled>
                        <span id="user" class="text-danger"></span>
                    </div>
                    <div class="col-lg-4 col-md-4 pt-3 mb-1">
                        <label for="password" class="mb-0"><b>Password</b><span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Create Password"
                            title="Create Password" maxlength="20" onkeyup="check()" required disabled>
                        <span id="pass" class="text-danger"></span>
                    </div>
                    <div class="col-lg-4 col-md-4 pt-3 mb-1">
                        <label for="conpass" class="mb-0"><b>Confirm Password</b><span class="text-danger">*</span></label>
                        <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm Password"
                            title="Confirm Password" maxlength="20" onkeyup="check()" required disabled>
                        <span id="cpass" class="text-danger"></span>
                    </div>
                    <div class="col-lg-12 col-md-12 pt-5 mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="termsandconditions" onclick="check()" disabled required>
                            <label class="form-check-label" for="termsandconditions">
                                I agree with <a href="termsandcondition.php" target="_blank">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 pt-3 mb-1">
                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" disabled>
                    </div>
                </div>
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
                function check() {
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;
                    var conpass = document.getElementById("conpass").value;
                    var mobile = document.getElementById("mobile").value;
                    if (mobile.search(/[A-Z]/) > -1) {
                        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        document.getElementById("username").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("conpass").disabled = true;
                        return false;
                    }
                    if (mobile.search(/[a-z]/) > -1) {
                        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        document.getElementById("username").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("conpass").disabled = true;
                        return false;
                    }
                    if (mobile.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>\ ]/) > -1) {
                        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        document.getElementById("username").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("conpass").disabled = true;
                        return false;
                    }
                    if(mobile.length < 10){
                        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        document.getElementById("username").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("conpass").disabled = true;
                        return false;
                    }
                    else {
                        document.getElementById("mob").innerHTML = "";
                        document.getElementById("username").disabled = false;
                        document.getElementById("termsandconditions").disabled = false;
                        document.getElementById("submit").disabled = false;
                    }
                    if (username == "") {
                        document.getElementById("user").innerHTML = "Create a new Username";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (username.search(/[A-Z]/) == -1) {
                        document.getElementById("user").innerHTML = "Please enter atleast one Uppercase letter";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (username.search(/[a-z]/) == -1) {
                        document.getElementById("user").innerHTML = "Please enter atleast one Lowercase letter";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (username.search(/[0-9]/) == -1) {
                        document.getElementById("user").innerHTML = "Please enter atleast one Number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    else {
                        document.getElementById("user").innerHTML = "";
                        document.getElementById("password").disabled = false;
                    }
                    if (password == "") {
                        document.getElementById("pass").innerHTML = "Create a new password";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (password.search(/[A-Z]/) == -1) {
                        document.getElementById("pass").innerHTML = "Please enter atleast one Uppercase letter";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (password.search(/[a-z]/) == -1) {
                        document.getElementById("pass").innerHTML = "Please enter atleast one Lowercase letter";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (password.search(/[0-9]/) == -1) {
                        document.getElementById("pass").innerHTML = "Please enter atleast one Number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (password.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>]/) == -1) {
                        document.getElementById("pass").innerHTML = "Please enter atleast one Spacial Symbol";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    if (password.length < 8) {
                        document.getElementById("pass").innerHTML = "Please enter atleast 8 character of Password";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    else {
                        document.getElementById("pass").innerHTML = "";
                        document.getElementById("conpass").disabled = false;
                    }
                    if (conpass != password) {
                        document.getElementById("cpass").innerHTML = "Password not matched!";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    else {
                        document.getElementById("cpass").innerHTML = "";
                        document.getElementById("termsandconditions").disabled = false;
                    }
                    if(document.getElementById("termsandconditions").checked == true){
                        document.getElementById("submit").disabled = false;
                    }
                    else{
                        document.getElementById("submit").disabled = true;
                    }
                }

                var msg = "'.$msg.'";
                if(msg != ""){
                    alert(msg);
                }
            </script>
        </body>
        
        </html>
    ';
?>