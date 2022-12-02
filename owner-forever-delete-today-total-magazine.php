f<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $date = $_POST['date'];
    $qury = "SELECT * FROM today_total_magazine WHERE date = '".$date."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM today_total_magazine WHERE date = '".$date."'";
            if(mysqli_query($mysqli,$qury)){
            }
            $_SESSION['delete'] = $date." is successfully deleted.";
            header('location:owner-main-page.php');
        }
        else{
            $_SESSION['no-delete'] = "You do not have any input on ".$date.".";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>