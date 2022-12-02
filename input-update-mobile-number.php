<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $oldmobile = $_POST['oldmobile'];
    $newmobile = $_POST['newmobile'];
    $qury = "SELECT mobile FROM new_users WHERE mobile = '".$newmobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['update-oldmobile'] = "Your Mobile number has already registered.";
            header('location:main-page.php');
        }
        else{
            $qury = "SELECT mobile FROM new_users WHERE mobile = '".$oldmobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $qury = "UPDATE new_users SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['update-mobile'] = "You have successfully changed your Mobile number.";
                        header('location:main-page.php');
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>