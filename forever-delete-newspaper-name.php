<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $papername = $_POST['papername'];
    $qury = "SELECT * FROM newspaper_entry WHERE newspaper_name = '".$papername."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM newspaper_entry WHERE newspaper_name = '".$papername."'";
            if(mysqli_query($mysqli,$qury)){
            }
            $_SESSION['delete'] = $papername." is successfully deleted.";
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>