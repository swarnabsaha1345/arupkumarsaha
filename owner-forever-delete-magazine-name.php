<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $magazine_name = $_POST['magazinename'];
    $qury = "SELECT * FROM magazine_entry WHERE magazine_name = '".$magazine_name."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM magazine_entry WHERE magazine_name = '".$magazine_name."'";
            if(mysqli_query($mysqli,$qury)){
            }
            $_SESSION['delete'] = $magazine_name." is successfully deleted.";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>