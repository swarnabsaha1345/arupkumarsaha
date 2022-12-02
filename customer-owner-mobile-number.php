<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    $_SESSION['count'] = "Mobile number : 9679938176";
    header('location:customer-main-page.php');
?>