<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    $_SESSION['count'] = "Please contact Owner.";
    header('location:customer-main-page.php');
?>