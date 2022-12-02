<?php
    session_start();
    require_once 'database-connection.php';
    $companyname = $_POST['companyname'];
    $companyname = strtoupper($companyname);
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $email = strtolower($email);
    $securitydeposit = $_POST['securitydeposit'];
    $address = $_POST['address'];
    $address = strtoupper($address);
    $papername = $_POST['papername'];
    $papername = strtoupper($papername);
    $regularprice = $_POST['regularprice'];
    $sundayprice = $_POST['sundayprice'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM newspaper_entry WHERE newspaper_name = '".$papername."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
           $qury = "INSERT INTO newspaper_entry (company_name,mobile,email,security_deposit,company_address,newspaper_name,regular_price,sunday_price) VALUES ('".$companyname."','".$mobile."','".$email."',".$securitydeposit.",'".$address."','".$papername."',".$regularprice.",".$sundayprice.")";
           if(mysqli_query($mysqli,$qury)){
            $_SESSION['paper-name'] = $papername." is successfully added.";
            header('location:main-page.php');
           }
        }
        else{
            $_SESSION['previous-papername'] = $papername." is already added.";
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>