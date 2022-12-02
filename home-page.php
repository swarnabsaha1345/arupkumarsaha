<?php
    session_start();
    require_once 'database-connection.php';
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM new_users WHERE position = '".$position."' and username = '".$username."' and password = '".$password."'";
    $mobile = "";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
		    $row = $result->fetch_assoc();
            $mobile = $row['mobile'];
            $_SESSION['mobile'] = $mobile;
            if($position == 'Admin')
                header('location:main-page.php');
            if($position == 'Owner')
                header('location:owner-main-page.php');
            if($position == 'Employee')
                    header('location:employee-main-page.php');
            if($position == 'Customer'){
                header('location:customer-main-page.php');
                $_SESSION['mobile'] = $mobile;
            }
        }
        else{
            $_SESSION['wrong-type'] = "Please check your Position or Username or Password.";
            header('location:index.php');
        }
    }
    mysqli_close($mysqli);
?>
