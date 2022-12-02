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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM new_user_active WHERE username = '".$username."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['oldusername'] = $username." is already exist.";
            header('location:index.php');
        }
        else{
            $qury = "SELECT * FROM new_user_active WHERE mobile = '".$mobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                $qury = "INSERT INTO new_user_active (name,gender,dob,mobile,email,address,town,district,state,country,pin_code,username,password) VALUES ('".$name."','".$gender."','".$dob."','".$mobile."','".$email."','".$address."','".$town."','".$district."','".$state."','".$country."','".$pincode."','".$username."','".$password."')";
                if(mysqli_query($mysqli,$qury)){
                    $_SESSION['new-user'] = "Thank you for creating account with us. Your Username is ".$username.". Your account will activate within 1 day.";
                    header('location:index.php');
                }
                }
                else{
                    $_SESSION['old-mobile'] = "Your mobile number has already registered.";
                    header('location:index.php');
                }
            }
        }
    }
    mysqli_close($mysqli);
?>
