<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $qury = "SELECT COUNT(id) AS id FROM customer_entry";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $_SESSION['count'] = "Total Customers : ".$row['id'];
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>