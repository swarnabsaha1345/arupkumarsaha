<?php
    session_start();
    require_once 'database-connection.php';
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $mobile =$_POST['mobile'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM new_users WHERE name = '".$name."' and dob = '".$dob."' and mobile = '".$mobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row=$result->fetch_assoc();
            $username = $row['username'];
            $_SESSION['username'] = "Your Username is ".$username;
            header('location:index.php');
        }
        else{
            $_SESSION['wrong-username'] = "Please check your Name or Date of Birth or Mobile number or Your Position.";
            header('location:forget-username.php');
        }
    }
    mysqli_close($mysqli);
?>