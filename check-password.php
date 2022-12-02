<?php
    session_start();
    require_once 'database-connection.php';
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM new_users WHERE name = '".$name."' and dob = '".$dob."' and mobile = '".$mobile."' and position = '".$position."' and username = '".$username."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row=$result->fetch_assoc();
            $id = $row['id'];
            $qury = "UPDATE new_users SET password = '".$password."' WHERE id = ".$id;
            if(mysqli_query($mysqli,$qury)){
            } 
            $_SESSION['password'] = "Your password has successfully changed.";
            header('location:index.php');
        } 
        else{
            $_SESSION['wrong-password'] = "Please check your Name or Date of Birth or Mobile number or Your Position or Username";
            header('location:forget-password.php');
        }
    }
    mysqli_close($mysqli);
?>