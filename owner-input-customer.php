<?php
    session_start();
    require_once 'database-connection.php';
    $name = $_POST['name'];
    $name = strtoupper($name);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $email = strtolower($email);
    $address = $_POST['address'];
    $address = strtoupper($address);
    $town = $_POST['town'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pin-code'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM customer_entry WHERE mobile = '".$mobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
           $qury = "INSERT INTO customer_entry (name,gender,dob,mobile,email,address,town,district,state,country,pin_code) VALUES ('".$name."','".$gender."','".$dob."','".$mobile."','".$email."','".$address."','".$town."','".$district."','".$state."','".$country."','".$pincode."')";
           if(mysqli_query($mysqli,$qury)){
           $_SESSION['customer'] = $name." is successfully added.";
            header('location:owner-main-page.php');
           }
        }
        else{
            $_SESSION['c-mobile'] = $mobile." has already registered.";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>
