<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $username = $_SESSION['user'];
    $password = $_POST['password'];
    $qury = "UPDATE new_users SET password = '".$password."' WHERE username = '".$username."'";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['update-password'] = "You have successfully changed your Password.";
        header('location:index.php');
    }
    mysqli_close($mysqli);
?>