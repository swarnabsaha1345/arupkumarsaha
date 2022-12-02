<?php
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $magazinename = $_POST['magazinename'];
    $quentity = $_POST['quentity'];
    $price = $_POST['price'];
    $percentage = $_POST['percentage'];
    $total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM today_total_magazine WHERE date = '".$date."' and magazine_name = '".$magazinename."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "INSERT INTO today_total_magazine (date,magazine_name,magazine_quentity,magazine_price,percentage,total) VALUES ('".$date."','".$magazinename."',".$quentity.",".$price.",".$percentage.",".$total.")";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['today-magazine'] = $magazinename." is added on ".$date.".";
                header('location:owner-main-page.php');
            }
        }
        else{
            $_SESSION['today-magazinename'] = $magazinename." is already added.";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>