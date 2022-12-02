<?php
    session_start();
    $msg = "";
    if(isset($_SESSION['wrong-username'])){
        $msg = $_SESSION['wrong-username'];
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
            <title>Forget username</title>
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
                <h2 class="text-danger">Forget Username</h2>
            </div>
            <div class="text-danger ml-4">
                <p>Mandatory fields are marked with an asterisk(*)</p>
            </div>
        
            <form action="check-username.php" method="post">
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
                            title="Enter Your Mobile Number" maxlength="10" onkeyup="numberonly(this)" required>
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
                    <div class="col-lg-12 col-md-12 pt-5 mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="termsandconditions" onclick="check()" required>
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
                    var mobile = document.getElementById("mobile").value;
                    if(mobile.length < 10){
                        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number";
                        document.getElementById("termsandconditions").disabled = true;
                        document.getElementById("submit").disabled = true;
                        return false;
                    }
                    else {
                        document.getElementById("mob").innerHTML = "";
                        document.getElementById("termsandconditions").disabled = false;
                    }
                }
                function check(){
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