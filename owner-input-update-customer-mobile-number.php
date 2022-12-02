<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $oldmobile = $_POST['mobile'];
    $newmobile = $_POST['newmobile'];
    $qury = "SELECT mobile FROM customer_entry WHERE mobile = '".$newmobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $_SESSION['update-oldmobile'] = "Customer Mobile number has already registered.";
            header('location:owner-main-page.php');
        }
        else{
            $qury = "SELECT mobile FROM customer_entry WHERE mobile = '".$oldmobile."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $qury = "UPDATE new_users SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE customer_entry SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE daily_basis_magazine SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE daily_basis_newspaper SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE daily_bill SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE daily_customer_payment SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE monthly_basis_magazine SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE monthly_basis_newspaper SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE monthly_bill SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE monthly_customer_payment SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE unsold_daily_basis_magazine SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE unsold_daily_basis_newspaper SET mobile = '".$newmobile."' WHERE mobile = '".$oldmobile."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['update-mobile'] = "You have successfully changed Customer Mobile number.";
                        header('location:owner-main-page.php');
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>