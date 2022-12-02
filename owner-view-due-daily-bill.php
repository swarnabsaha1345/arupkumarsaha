<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $name = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $qury = "SELECT due FROM daily_bill WHERE customer_name = '".$name."' and mobile = '".$mobile."' and date = '".$date."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $due = $row['due'];
            if($due > 0){
                $_SESSION['today-due'] = "Due of ".$name." is Rs. ".$due." on ".$date;
                header('location:owner-main-page.php');
            }
            else{
                $_SESSION['null-today-due'] = $name." has not any due on ".$date.".";
                header('location:owner-main-page.php');
            }
        }
        else{
            $_SESSION['null-today-due'] = $name." has not any due on ".$date.".";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>