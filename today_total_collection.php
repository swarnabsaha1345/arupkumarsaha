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
            <title>Arup Kumar Saha || Employee Entry</title>
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
                <h3>A Newspaper Distrubution Agency</h3><br>
            </div><br><br>
            <div class="text-center">
                <h2 class="text-danger">Today Total Collection</h2>
            </div>
            <div class="text-danger ml-4">
                <p>Mandatory fields are marked with an asterisk(*)</p>
            </div>
        
            <form action="">
                <div class="row mx-5 p-3" style="background-color: rgb(255, 187, 0); border-radius: 25px;">
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="date" class="mb-0"><b>Date</b><span class="text-danger">*</span></label>
                        <input type="date" name="date" id="date" class="form-control" placeholder="Select Date"
                            title="Select Date" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r1" class="mb-0"><b>Rupees 1</b><span class="text-danger">*</span></label>
                        <input type="number" name="r1" id="r1" class="form-control" placeholder="Enter Rupees 1 quentity"
                            title="Enter Rupees 1 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r2" class="mb-0"><b>Rupees 2</b><span class="text-danger">*</span></label>
                        <input type="number" name="r2" id="r2" class="form-control" placeholder="Enter Rupees 2 quentity"
                            title="Enter Rupees 2 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r5" class="mb-0"><b>Rupees 5</b><span class="text-danger">*</span></label>
                        <input type="number" name="r5" id="r5" class="form-control" placeholder="Enter Rupees 5 quentity"
                            title="Enter Rupees 5 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r10" class="mb-0"><b>Rupees 10</b><span class="text-danger">*</span></label>
                        <input type="number" name="r10" id="r10" class="form-control" placeholder="Enter Rupees 10 quentity"
                            title="Enter Rupees 10 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r20" class="mb-0"><b>Rupees 20</b><span class="text-danger">*</span></label>
                        <input type="number" name="r20" id="r20" class="form-control" placeholder="Enter Rupees 20 quentity"
                            title="Enter Rupees 20 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r50" class="mb-0"><b>Rupees 50</b><span class="text-danger">*</span></label>
                        <input type="number" name="r50" id="r50" class="form-control" placeholder="Enter Rupees 50 quentity"
                            title="Enter Rupees 50 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r100" class="mb-0"><b>Rupees 100</b><span class="text-danger">*</span></label>
                        <input type="number" name="r100" id="r100" class="form-control" placeholder="Enter Rupees 100 quentity"
                            title="Enter Rupees 100 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r200" class="mb-0"><b>Rupees 200</b><span class="text-danger">*</span></label>
                        <input type="number" name="r200" id="r200" class="form-control" placeholder="Enter Rupees 200 quentity"
                            title="Enter Rupees 200 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r500" class="mb-0"><b>Rupees 500</b><span class="text-danger">*</span></label>
                        <input type="number" name="r500" id="r500" class="form-control" placeholder="Enter Rupees 500 quentity"
                            title="Enter Rupees 500 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="r2000" class="mb-0"><b>Rupees 2000</b><span class="text-danger">*</span></label>
                        <input type="number" name="r2000" id="r2000" class="form-control"
                            placeholder="Enter Rupees 2000 quentity" title="Enter Rupees 2000 quentity" required>
                    </div>
                    <div class="col-lg-2 col-md-4 pt-3 mb-1">
                        <label for="total" class="mb-0"><b>Total Amount</b><span class="text-danger">*</span></label>
                        <input type="text" name="total" id="total" class="form-control" placeholder="Total Amount"
                            title="Total Amount" onkeypress="total()" required>
                    </div>
                    <div class="col-lg-12 col-md-12 pt-3 mb-1">
                        <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
                    </div>
                </div><br>
            </form>
        
            <script>
                function total() {
                    var r1 = document.getElementById("r1").value;
                    var r2 = document.getElementById("r2").value;
                    var r5 = document.getElementById("r5").value;
                    var r10 = document.getElementById("r10").value;
                    var r20 = document.getElementById("r20").value;
                    var r50 = document.getElementById("r50").value;
                    var r100 = document.getElementById("r100").value;
                    var r200 = document.getElementById("r200").value;
                    var r500 = document.getElementById("r500").value;
                    var r2000 = document.getElementById("r2000").value;
                    var total = document.getElementById("total");
                    var rupees1 = 1 * r1;
                    var rupees2 = 2 * r2;
                    var rupees5 = 5 * r5;
                    var rupees10 = 10 * r10;
                    var rupees20 = 20 * r20;
                    var rupees50 = 50 * r50;
                    var rupees100 = 100 * r100;
                    var rupees200 = 200 * r200;
                    var rupees500 = 500 * r500;
                    var rupees2000 = 2000 * r2000;
                    total = rupees1 + rupees2 + rupees5 + rupees10 + rupees20 + rupees50 + rupees100 + rupees200 + rupees500 + rupees2000;
                    document.getElementById("total").innerHTML = total;
                }
            </script>
        </body>
        
        </html>
    ';
?>    