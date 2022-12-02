<?php  
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $magazinename = $_POST['magazinename'];
    $qury = "SELECT magazine_name FROM magazine_entry WHERE magazine_name = '".$magazinename."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($magazinename);
        }
    }

    function display($magazinename){
        require_once 'database-connection.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $qury = "SELECT * FROM magazine_entry WHERE magazine_name = '".$magazinename."'";
        if($result = $mysqli->query($qury)){
            if(mysqli_num_rows($result)>0){
                $row = $result->fetch_assoc();
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
                        <title>Arup Kumar Saha || Magazine Entry</title>
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
                        </div><br><br>

                        <div class="text-center">
                            <h2 class="text-danger">Magazine Details View</h2>
                        </div><br><br>
                        

                        <div class="row mx-5 p-3" style="background-color: rgb(145, 255, 0); border-radius: 25px;">
                            <div class="col-lg-3 col-md-4 pt-3 mb-1">
                            <label for="companyname" class="mb-0"><b>Magazine Company Name</b></label>
                            <input type="text" name="companyname" id="companyname" class="form-control text-capitalize"
                            value="'.$row['company_name'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="mobile" class="mb-0"><b>Company Mobile</b></label>
                                <input type="tel" name="mobile" id="mobile" class="form-control"value="'.$row['mobile'].'" readonly>
                            </div>
                            <div class="col-lg-5 col-md-4 pt-3 mb-1">
                                <label for="email" class="mb-0"><b>Company Email</b></label>
                                <input type="email" name="email" id="email" class="form-control text-lowercase" value="'.$row['email'].'" readonly>
                                </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="securitydeposit" class="mb-0"><b>Security Deposit</b></label>
                                <input type="text" name="securitydeposit" id="securitydeposit" class="form-control" value="'.$row['security_deposit'].'" readonly>
                            </div>
                            <div class="col-lg-8 col-md-8 pt-3 mb-1">
                                <label for="address" class="mb-0"><b>Company Address</b></label>
                                <input type="text" name="address" id="address" class="form-control text-capitalize" value="'.$row['company_address'].'" readonly>
                                </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="magazinename" class="mb-0"><b>Magazine Name</b></label>
                                <input type="text" name="magazinename" id="magazinename" class="form-control text-capitalize" value="'.$row['magazine_name'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="price" class="mb-0"><b>Magazine Price</b></label>
                                <input type="text" name="price" id="price" class="form-control" value="'.$row['magazine_price'].'" readonly>
                            </div>
                        </div><br>   
                </body>

                </html>
            ';
            }
        }
    }
?>