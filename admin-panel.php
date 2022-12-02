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
        <title>Admin account</title>
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
            <h2 class="text-danger">Create an account as an Admin</h2>
        </div>
        <div class="text-danger ml-4">
            <p>Mandatory fields are marked with an asterisk(*)</p>
        </div>
        
        <!--Personal Details-->
        
        <form action="input-admin-panel.php" method="post">
            <div class="row mx-0 p-3">
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                <label for="name" class="mb-0"><b>Name</b><span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control text-capitalize" placeholder="Enter Name"
                    title="Enter Your Name" maxlength="100" onkeyup="lettersonly(this)" required>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                <label for="gender" class="mb-0"><b>Gender</b><span class="text-danger">*</span></label>
                <select name="gender" id="gender" class="form-control" title="Select Your Gender" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                <label for="dob" class="mb-0"><b>Date of Birth</b><span class="text-danger">*</span></label>
                <input type="date" name="dob" id="dob" class="form-control" title="Enter Your Date Of Birth" required>
                </div>
                <div class="col-lg-2 col-md-4 pt-3 mb-1">
                <label for="mobile" class="mb-0"><b>Mobile</b><span class="text-danger">*</span></label>
                <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"
                    title="Enter Your Mobile Number" maxlength="10" onkeypress="numberonly(this)" onkeyup="check()" required>
                    <span id="mob" class="text-danger"></span>
                </div>
                <div class="col-lg-4 col-md-4 pt-3 mb-1">
                <label for="email" class="mb-0"><b>Email</b></label>
                <input type="email" name="email" id="email" class="form-control text-lowercase" placeholder="Enter A Valid Email"
                    title="Enter Your Email" maxlength="100" onkeyup="emailonly(this)">
                </div>
            
            
                <!--Address Details-->
            
                <div class="col-lg-12 col-md-12 pt-3 mb-1">
                <label for="address" class="mb-0"><b>Address</b><span class="text-danger">*</span></label>
                <input type="text" name="address" id="address" class="form-control text-capitalize"
                    placeholder="Enter Your Address"" title=" Enter Your Address" maxlength="300" required>
                </div>
                <div class="col-lg-3 col-md-3 pt-3 mb-1">
                <label for="town"><b>Town</b><span class="text-danger">*</span></label>
                <select name="town" id="town" class="form-control" placeholder="Select Your Town" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Rampurhat">Rampurhat</option>
                    <option value="Mallarpur">Mallarpur</option>
                    <option value="Taraphit">Taraphit</option>
                    <option value="Margram">Margram</option>
                    <option value="Bishnupur">Bishnupur</option>
                    <option value="Narayanpur">Narayanpur</option>
                </select>
                </div>
                <div class="col-lg-2 col-md-2 pt-3 mb-1">
                <label for="district"><b>District</b><span class="text-danger">*</span></label>
                <input type="text" name="district" id="district" class="form-control" value="Birbhum"
                    placeholder="Select Your District" readonly required>
                </div>
                <div class="col-lg-2 col-md-2 pt-3 mb-1">
                <label for="state"><b>State</b><span class="text-danger">*</span></label>
                <input type="text" name="state" id="state" class="form-control" value="West Bengal"
                    placeholder="Select Your State" readonly required>
                </div>
                <div class="col-lg-2 col-md-2 pt-3 mb-1">
                <label for="country"><b>Country</b><span class="text-danger">*</span></label>
                <input type="text" name="country" id="country" class="form-control" value="India"
                    placeholder="Select Your Country" readonly required>
                </div>
                <div class="col-lg-3 col-md-3 pt-3 mb-1">
                <label for="pin-code"><b>Pin Code</b><span class="text-danger">*</span></label>
                <input type="text" name="pin-code" id="pin-code" class="form-control" title="Enter Your Pincode"
                    placeholder="Enter Your Pincode" maxlength="6" onkeypress="numberonly(this)" onkeyup="check()" required>
                    <span id="pin" class="text-danger"></span>
                </div>
            
                <!--User Account-->
            
                <div class="col-lg-3 col-md-4 pt-3 mb-1">
                <label for="username" class="mb-0"><b>Username</b><span class="text-danger">*</span></label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Create Username"
                    title="Create Username" maxlength="20" onkeyup="check()" required disabled>
                <span id="user" class="text-danger"></span>
                </div>
                <div class="col-lg-3 col-md-4 pt-3 mb-1">
                <label for="password" class="mb-0"><b>Password</b><span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Create Password"
                    title="Create Password" maxlength="20" onkeyup="check()" required disabled>
                <span id="pass" class="text-danger"></span>
                </div>
                <div class="col-lg-3 col-md-4 pt-3 mb-1">
                <label for="conpass" class="mb-0"><b>Confirm Password</b><span class="text-danger">*</span></label>
                <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm Password"
                    title="Confirm Password" maxlength="20" onkeyup="check()" required disabled>
                <span id="cpass" class="text-danger"></span>
                </div>
                <div class="col-lg-3 col-md-4 pt-3 mb-1">
                <label for="position" class="mb-0"><b>Your Position</b><span class="text-danger">*</span></label>
                <input type="text" name="position" id="position" class="form-control" value="Admin"
                    placeholder="Select Your Position" readonly required>
                </div>
                <div class="col-lg-12 col-md-12 pt-5 mb-1 text-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="termsandconditions" onclick="check()" required disabled>
                    <label class="form-check-label" for="termsandconditions">
                    I agree with <a href="termsandcondition.php" target="_blank">Terms and Conditions</a>
                    </label>
                </div>
                </div>
                <div class="col-lg-12 col-md-12 pt-3 mb-1 text-center">
                <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit" disabled>
                <input type="reset" name="" id="" class="btn btn-warning text-light ml-4" value="Reset">
                </div>
            </div>
        </form> 
        
        <script>
            function lettersonly(input) {
                var letter = /[^A-Za-z\ ]/gi;
                input.value = input.value.replace(letter, "");
            }
            function emailonly(input) {
                var email = /[^a-z0-9\-\@\.]/gi;
                input.value = input.value.replace(email, "");
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
                var pincode = document.getElementById("pin-code").value;
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
                if (pincode.search(/[A-Z]/) > -1) {
                    document.getElementById("pin").innerHTML = "Please enter 6 digit pin code";
                    document.getElementById("termsandconditions").disabled = true;
                    document.getElementById("submit").disabled = true;
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("conpass").disabled = true;
                    return false;
                }
                if (pincode.search(/[a-z]/) > -1) {
                    document.getElementById("pin").innerHTML = "Please enter 6 digit pin code";
                    document.getElementById("termsandconditions").disabled = true;
                    document.getElementById("submit").disabled = true;
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("conpass").disabled = true;
                    return false;
                }
                if (pincode.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>\ ]/) > -1) {
                    document.getElementById("pin").innerHTML = "Please enter 6 digit pin code";
                    document.getElementById("termsandconditions").disabled = true;
                    document.getElementById("submit").disabled = true;
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("conpass").disabled = true;
                    return false;
                }
                if(pincode.length < 6){
                    document.getElementById("pin").innerHTML = "Please enter 6 digit pin code";
                    document.getElementById("termsandconditions").disabled = true;
                    document.getElementById("submit").disabled = true;
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("conpass").disabled = true;
                    return false;
                }
                else {
                    document.getElementById("pin").innerHTML = "";
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
        </script>
        </body>
        
        </html>
    ';
?>