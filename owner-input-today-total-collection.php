<?php
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r5 = $_POST['r5'];
    $r10 = $_POST['r10'];
    $r20 = $_POST['r20'];
    $r50 = $_POST['r50'];
    $r100 = $_POST['r100'];
    $r200 = $_POST['r200'];
    $r500 = $_POST['r500'];
    $r2000 = $_POST['r2000'];
    $total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM today_total_collection WHERE date = '".$date."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "INSERT INTO today_total_collection (date,rupees1,rupees2,rupees5,rupees10,rupees20,rupees50,rupees100,rupees200,rupees500,rupees2000,total) VALUES ('".$date."',".$r1.",".$r2.",".$r5.",".$r10.",".$r20.",".$r50.",".$r100.",".$r200.",".$r500.",".$r2000.",".$total.")";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['cash'] = $date." Cash collection is Rs. ".$total.".";
                header('location:owner-main-page.php');
            }
        }
        else{
            $_SESSION['c-date'] = $date." Cash collection is already added.";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>