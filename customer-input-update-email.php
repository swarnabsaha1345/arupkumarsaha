<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_SESSION['user'];
    $email = $_POST['email'];
    $email = strtolower($email);
    $qury = "SELECT email FROM new_users WHERE email = '".$email."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['update-oldemail'] = "Your Email id has already registered.";
            header('location:customer-main-page.php');
        }
        else{ 
            $qury = "UPDATE new_users SET email = '".$email."' WHERE username = '".$username."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['update-email'] = "You have successfully changed your Email id.";
                header('location:customer-main-page.php');
            }
        }
    }
    mysqli_close($mysqli);
?>