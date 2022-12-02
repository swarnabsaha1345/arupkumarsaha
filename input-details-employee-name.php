<?php  
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $employeename = $_POST['employeename'];
    $mobile = $_POST['mobile'];
    $qury = "SELECT name FROM employee_entry WHERE name = '".$employeename."' and mobile = '".$mobile."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($employeename,$mobile);
        }
    }

    function display($employeename,$mobile){
        require_once 'database-connection.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $qury = "SELECT * FROM employee_entry WHERE name = '".$employeename."' and mobile = '".$mobile."'";
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
                            <h2 class="text-danger">Employee Details View</h2>
                        </div><br><br>
                        

                        <div class="row mx-5 p-3" style="background-color: rgb(145, 255, 0); border-radius: 25px;">
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                            <label for="name" class="mb-0"><b>Name</b></label>
                            <input type="text" name="name" id="name" class="form-control text-capitalize" value="'.$row['name'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                            <label for="gender" class="mb-0"><b>Gender</b></label>
                            <input type="text" name="gender" id="gender" class="form-control text-capitalize" value="'.$row['gender'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                            <label for="dob" class="mb-0"><b>Date of Birth</b></label>
                            <input type="date" name="dob" id="dob" class="form-control" value="'.$row['dob'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                            <label for="mobile" class="mb-0"><b>Mobile</b></label>
                            <input type="tel" name="mobile" id="mobile" class="form-control" value="'.$row['mobile'].'" readonly>
                            </div>
                            <div class="col-lg-4 col-md-4 pt-3 mb-1">
                            <label for="email" class="mb-0"><b>Email</b></label>
                            <input type="email" name="email" id="email" class="form-control text-lowercase" value="'.$row['email'].'" readonly>
                            </div>
                        
                        
                            <!--Address Details-->
                        
                            <div class="col-lg-12 col-md-12 pt-3 mb-1">
                            <label for="address" class="mb-0"><b>Address</b></label>
                            <input type="text" name="address" id="address" class="form-control text-capitalize" value="'.$row['address'].'" readonly>
                            </div>
                            <div class="col-lg-3 col-md-3 pt-3 mb-1">
                            <label for="town"><b>Town</b></label>
                            <input type="text" name="town" id="town" class="form-control salary" value="'.$row['town'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-2 pt-3 mb-1">
                            <label for="district"><b>District</b></label>
                            <input type="text" name="district" id="district" class="form-control" value="'.$row['district'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-2 pt-3 mb-1">
                            <label for="state"><b>State</b></label>
                            <input type="text" name="state" id="state" class="form-control" value="'.$row['state'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-2 pt-3 mb-1">
                            <label for="country"><b>Country</b></label>
                            <input type="text" name="country" id="country" class="form-control" value="'.$row['country'].'" readonly>
                            </div>
                            <div class="col-lg-3 col-md-3 pt-3 mb-1">
                            <label for="pin-code"><b>Pin Code</b></label>
                            <input type="text" name="pin-code" id="pin-code" class="form-control" value="'.$row['pin_code'].'" readonly>
                            </div>
                            <!--Job Details-->
                
                            <div class="col-lg-3 col-md-3 pt-3 mb-1">
                                <label for="jobrole"><b>Job Role</b></label>
                                <input type="text" name="jobrole" id="jobrole" class="form-control salary" value="'.$row['job_role'].'" readonly>
                                </div>
                            <div class="col-lg-2 col-md-2 pt-3 mb-1">
                                <label for="salary"><b>Salary</b></label>
                                <input type="text" name="salary" id="salary" class="form-control" value="'.$row['salary'].'" readonly>
                                </div> 
                        </div><br>   
                </body>

                </html>
            ';
            }
        }
    }
?>