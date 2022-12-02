<?php
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $customername = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $papername = $_POST['papername'];
    $quentity = $_POST['quentity'];
    $price = $_POST['price'];
    $percentage = $_POST['percentage'];
    $total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM monthly_basis_newspaper WHERE date = '".$date."'and customer_name = '".$customername."' and mobile = '".$mobile."' and newspaper_name = '".$papername."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
           $qury = "SELECT * FROM monthly_bill WHERE date = '".$date."'and customer_name = '".$customername."' and mobile = '".$mobile."'";
           if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                    $qury = "INSERT INTO monthly_basis_newspaper (date,customer_name,mobile,newspaper_name,newspaper_quentity,newspaper_price,percentage,total) VALUES ('".$date."','".$customername."','".$mobile."','".$papername."',".$quentity.",".$price.",".$percentage.",".$total.")";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "INSERT INTO monthly_bill (date,customer_name,mobile,bill) values ('".$date."','".$customername."','".$mobile."',".$total.")"; 
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['monthly-newspaper'] = $papername." is added for ".$customername." on ".$date.".";
                        header('location:owner-main-page.php');
                    }
                }
                else{
                    $qury = "INSERT INTO monthly_basis_newspaper (date,customer_name,mobile,newspaper_name,newspaper_quentity,newspaper_price,percentage,total) VALUES ('".$date."','".$customername."','".$mobile."','".$papername."',".$quentity.",".$price.",".$percentage.",".$total.")";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE monthly_bill SET bill = (SELECT SUM(total) FROM monthly_basis_newspaper WHERE monthly_basis_newspaper.date = '".$date."' and monthly_basis_newspaper.customer_name = '".$customername."' and monthly_basis_newspaper.mobile = '".$mobile."') +(SELECT sum(total) FROM monthly_basis_magazine WHERE monthly_basis_magazine.date = '".$date."' and monthly_basis_magazine.customer_name = '".$customername."' and monthly_basis_magazine.mobile = '".$mobile."') WHERE monthly_bill.date = '".$date."' and monthly_bill.customer_name = '".$customername."' and monthly_bill.mobile = '".$mobile."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['monthly-newspaper'] = $papername." is added for ".$customername." on ".$date.".";
                        header('location:owner-main-page.php');
                    }
                }
           }
        }        
        else{
            $_SESSION['monthly-papername'] = $papername." is already added for ".$customername.".";
            header('location:owner-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>
