<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $date = $_POST['date'];
    $qury = "SELECT date FROM today_total_collection WHERE date = '".$date."'";
    if($result = $mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            display($date);
        }
        else{
            $_SESSION['no-cash'] = "There are no collection on ".$date.".";
            header("location:main-page.php");
        }
    }

    function display($date){
        require_once 'database-connection.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $qury = "SELECT * FROM today_total_collection WHERE date = '".$date."'";
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
                            <h2 class="text-danger">Today Total Collection View</h2>
                        </div><br><br>
                        

                        <div class="row mx-5 p-3" style="background-color: rgb(145, 255, 0); border-radius: 25px;">
                        <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="date" class="mb-0"><b>Date</b></label>
                        <input type="date" name="date" id="date" class="form-control"value="'.$row['date'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r1" class="mb-0"><b>Rupees 1</b></label>
                                <input type="number" name="r1" id="r1" class="form-control" value="'.$row['rupees1'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r2" class="mb-0"><b>Rupees 2</b></label>
                                <input type="number" name="r2" id="r2" class="form-control" value="'.$row['rupees2'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r5" class="mb-0"><b>Rupees 5</b></label>
                                <input type="number" name="r5" id="r5" class="form-control" value="'.$row['rupees5'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r10" class="mb-0"><b>Rupees 10</b></label>
                                <input type="number" name="r10" id="r10" class="form-control" value="'.$row['rupees10'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r20" class="mb-0"><b>Rupees 20</b></label>
                                <input type="number" name="r20" id="r20" class="form-control" value="'.$row['rupees20'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r50" class="mb-0"><b>Rupees 50</b></label>
                                <input type="number" name="r50" id="r50" class="form-control" value="'.$row['rupees50'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r100" class="mb-0"><b>Rupees 100</b></label>
                                <input type="number" name="r100" id="r100" class="form-control" value="'.$row['rupees100'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r200" class="mb-0"><b>Rupees 200</b></label>
                                <input type="number" name="r200" id="r200" class="form-control" value="'.$row['rupees200'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r500" class="mb-0"><b>Rupees 500</b></label>
                                <input type="number" name="r500" id="r500" class="form-control" value="'.$row['rupees500'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="r2000" class="mb-0"><b>Rupees 2000</b></label>
                                <input type="number" name="r2000" id="r2000" class="form-control" value="'.$row['rupees2000'].'" readonly>
                            </div>
                            <div class="col-lg-2 col-md-4 pt-3 mb-1">
                                <label for="total" class="mb-0"><b>Total Amount</b></label>
                                <input type="text" name="total" id="total" class="form-control" value="'.$row['total'].'" readonly>
                            </div>
                        </div><br>   
                </body>

                </html>
            ';
            }
        }
    }
?>