<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_SESSION['user'];
    $username1 = $_POST['username'];
    $qury = "SELECT username FROM new_users WHERE username = '".$username1."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['update-oldusername'] = $username1." is already exist.";
            header('location:main-page.php');
        }
        else{ 
            $qury = "UPDATE new_users SET username = '".$username1."' WHERE username = '".$username."'";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['update-username'] = "You have successfully change your Username.";
                header('location:index.php');
            } 
        }
    }
    mysqli_close($mysqli);
?>