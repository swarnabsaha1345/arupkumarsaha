<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    $_SESSION['count'] = "Email id : arupkumarsahanewspaperagent@gmail.com";
    header('location:customer-main-page.php');
?>