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
    $position = $_POST['position'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM new_users WHERE username = '".$username."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['oldusername'] = $username." is already exist.";
            header('location:main-page.php');
        }
        else{
            $qury = "SELECT * FROM new_users WHERE mobile = '".$mobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                $qury = "INSERT INTO new_users (name,gender,dob,mobile,email,address,town,district,state,country,pin_code,username,password,position) VALUES ('".$name."','".$gender."','".$dob."','".$mobile."','".$email."','".$address."','".$town."','".$district."','".$state."','".$country."','".$pincode."','".$username."','".$password."','".$position."')";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['new-user'] = $username." is activated.";
                        header('location:main-page.php');
                    }
                }
                else{
                    $_SESSION['old-mobile'] = "Mobile number has already registered.";
                    header('location:main-page.php');
                }
            }
        }
    }
    $qury = "DELETE FROM new_user_active WHERE mobile = '".$mobile."'";
    if(mysqli_query($mysqli,$qury)){
    }
    mysqli_close($mysqli);
?>
