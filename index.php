<?php
  session_start();
  $msg = "";
  if(isset($_SESSION['new-user'])){
    $msg = $_SESSION['new-user'];
    session_unset();
  }
  $msg1 = "";
    if(isset($_SESSION['old-mobile'])){
      $msg1 = $_SESSION['old-mobile'];
      session_unset();
    }
  $msg2 = "";
    if(isset($_SESSION['username'])){
      $msg2 = $_SESSION['username'];
      session_unset();
    }
    $msg3 = "";
    if(isset($_SESSION['password'])){
      $msg3 = $_SESSION['password'];
      session_unset();
    }
    $msg4 = "";
    if(isset($_SESSION['wrong-type'])){
      $msg4 = $_SESSION['wrong-type'];
      session_unset();
    }
    $msg5 = "";
    if(isset($_SESSION['oldusername'])){
      $msg5 = $_SESSION['oldusername'];
      session_unset();
    }
    $msg6 = "";
    if(isset($_SESSION['update-username'])){
        $msg6 = $_SESSION['update-username'];
        unset($_SESSION['update-username']);
    }
    $msg7 = "";
    if(isset($_SESSION['update-password'])){
        $msg7 = $_SESSION['update-password'];
        unset($_SESSION['update-password']);
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
        <title>Arup Kumar Saha</title>
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
      
          h4 {
            font-family: "Trocchi", serif;
            color: white;
            background-color: blue;
            border-radius: 50px;
          }
      
          a:link {
            text-decoration: none;
          }
      
          a:hover {
            font-weight: bold;
          }
      
        </style>
      
        <div class="text-center" style="background-color: blue;">
          <h1 class="font-weight-bold">Arup Kumar Saha</h1>
          <h3>Newspaper Agent</h3><br>
        </div><br><br>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mx-3"
              style="background-color: rgb(240, 113, 10); border-radius: 25px; padding: 20px;">
              <h4 class="text-center">Login Now</h4>
              <form action="home-page.php" method="post">
                <div class="form-group pt-3 mb-1">
                  <label for="position" class="mb-0"><b>Login as</b></label>
                  <select name="position" id="position" class="form-control" title="Select your position" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Admin">Admin</option>
                    <option value="Owner">Owner</option>
                    <option value="Employee">Employee</option>
                    <option value="Customer">Customer</option>
                  </select>
                </div>
                <div class="form-group pt-3 mb-1">
                  <label for="username" class="mb-0"><b>Username</b></label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username"
                    title="Enter username" maxlength="20" required>
                </div>
                <div class="form-group pt-3 mb-1">
                  <label for="password" class="mb-0"><b>Password</b></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"
                    title="Enter password" maxlength="20" required>
                </div>
                <div class="form-group pt-3 mb-1 text-right">
                  <input type="submit" class="btn btn-success" value="Login" name="" id="">
                </div>
                <div class="form-group pt-3 mb-1">
                  <a class="btn btn-primary text-light" href="create-account.php" role="button">Create an account</a>
                </div>
                <div class="form-group pt-3 mb-1">
                  <a class="btn btn-secondary text-light " href="admin-panel.php" role="button">Create Admin account</a>
                </div>
                <div class="form-group mb-1">
                  <a href="forget-username.php" class="text-light">forget username</a><span class="text-light"> /</span>
                  <a href="forget-password.php" class="text-light">password</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      <script>
          var msg="'.$msg.'";
          if(msg!= ""){
            alert(msg);
          }
          var msg1="'.$msg1.'";
          if(msg1!= ""){
            alert(msg1);
          }
          var msg2="'.$msg2.'";
          if(msg2!= ""){
            alert(msg2);
          }
          var msg3="'.$msg3.'";
          if(msg3!= ""){
            alert(msg3);
          }
          var msg4="'.$msg4.'";
          if(msg4!= ""){
            alert(msg4);
          }
          var msg5="'.$msg5.'";
          if(msg5!= ""){
            alert(msg5);
          }
          var msg6="'.$msg6.'";
            if(msg6!= ""){
                alert(msg6);
            }
            var msg7="'.$msg7.'";
            if(msg7!= ""){
                alert(msg7);
            }
      </script>    
      </body>
      
      </html>
  ';
?>