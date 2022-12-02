<?php
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $papername = $_POST['papername'];
    $quentity = $_POST['quentity'];
    $price = $_POST['price'];
    $percentage = $_POST['percentage'];
    $total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM today_total_newspaper WHERE date = '".$date."' and newspaper_name = '".$papername."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "INSERT INTO today_total_newspaper (date,newspaper_name,newspaper_quentity,newspaper_price,percentage,total) VALUES ('".$date."','".$papername."',".$quentity.",".$price.",".$percentage.",".$total.")";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['today-newspaper'] = $papername." is added on ".$date.".";
                header('location:employee-main-page.php');
            }
        }
        else{
            $_SESSION['today-papername'] = $papername." is already added.";
            header('location:employee-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>