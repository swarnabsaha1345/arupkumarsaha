<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $customer_name = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $qury = "SELECT * FROM customer_entry WHERE name = '".$customer_name."' and mobile = '".$mobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM customer_entry WHERE name = '".$customer_name."' and mobile = '".$mobile."'";
            if(mysqli_query($mysqli,$qury)){
            }
            $_SESSION['delete'] = $customer_name." is successfully deleted.";
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>