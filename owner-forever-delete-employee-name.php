<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $employee_name = $_POST['employeename'];
    $mobile = $_POST['mobile'];
    $qury = "SELECT * FROM employee_entry WHERE name = '".$employee_name."' and mobile = '".$mobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $qury = "DELETE FROM employee_entry WHERE name = '".$employee_name."' and mobile = '".$mobile."'";
            if(mysqli_query($mysqli,$qury)){
            }
            $_SESSION['delete'] = $employee_name." is successfully deleted.";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>