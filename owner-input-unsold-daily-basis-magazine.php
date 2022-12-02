<?php
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $customername = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $magazinename = $_POST['magazinename'];
    $quentity = $_POST['quentity'];
    $price = $_POST['price'];
    $percentage = $_POST['percentage'];
    $unsold_total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $bill = 0;
    $total = 0;
    $qury = "SELECT * FROM unsold_daily_basis_magazine WHERE date = '".$date."' and customer_name = '".$customername."' and mobile = '".$mobile."' and magazine_name = '".$magazinename."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "SELECT * FROM daily_bill WHERE date = '".$date."' and customer_name = '".$customername."' and mobile = '".$mobile."'";
           if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)>0){
                    $qury = "INSERT INTO unsold_daily_basis_magazine (date,customer_name,mobile,magazine_name,magazine_quentity,magazine_price,percentage,total) VALUES ('".$date."','".$customername."','".$mobile."','".$magazinename."',".$quentity.",".$price.",".$percentage.",".$unsold_total.")";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['unsold-magazine'] = "Unsold Magazine is added for ".$customername." on ".$date.".";
                        header('location:owner-main-page.php');
                    }   
                    $row = $result->fetch_assoc();
                    $bill = $row['bill'];
                    $total = $bill - $unsold_total;
                    echo $total;
                    $qury = "UPDATE daily_bill SET bill = '".$total."' WHERE daily_bill.date = '".$date."' and daily_bill.customer_name = '".$customername."' and daily_bill.mobile = '".$mobile."'";
                    if(mysqli_query($mysqli,$qury)){
                    } 
                }
                else{
                    $_SESSION['wrong-unsold-magazine'] = "Your cart is null.";
                    header('location:owner-main-page.php');
                }
            }            
        }
        else{
            $_SESSION['wrong-unsold-magazine'] = "Unsold Magazine is already added for ".$customername.".";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>