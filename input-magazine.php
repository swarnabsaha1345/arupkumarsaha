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
    $magazinename = $_POST['magazinename'];
    $magazinename = strtoupper($magazinename);
    $price = $_POST['price'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM magazine_entry WHERE magazine_name = '".$magazinename."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
           $qury = "INSERT INTO magazine_entry (company_name,mobile,email,security_deposit,company_address,magazine_name,magazine_price) VALUES ('".$companyname."','".$mobile."','".$email."',".$securitydeposit.",'".$address."','".$magazinename."',".$price.")";
           if(mysqli_query($mysqli,$qury)){
            $_SESSION['magazine-name'] = $magazinename." is successfully added.";
            header('location:main-page.php');
           }
        }
        else{
            $_SESSION['previous-magazinename'] = $magazinename." is already added.";
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>