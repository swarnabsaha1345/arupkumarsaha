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
    $total = $_POST['total'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM daily_basis_magazine WHERE date = '".$date."' and customer_name = '".$customername."' and mobile = '".$mobile."' and magazine_name = '".$magazinename."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
           $qury = "SELECT * FROM daily_bill WHERE date = '".$date."'and customer_name = '".$customername."' and mobile = '".$mobile."'";
           if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                    $qury = "SELECT sum(due) AS due FROM daily_bill WHERE customer_name = '".$customername."' and mobile = '".$mobile."'";
                    $due = 0;
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)>0){
                            $row = $result->fetch_assoc();
                            $due = $row['due'];
                            $total=$total+$due;
                            $qury = "INSERT INTO daily_basis_magazine (date,customer_name,mobile,magazine_name,magazine_quentity,magazine_price,percentage,total) VALUES ('".$date."','".$customername."','".$mobile."','".$magazinename."',".$quentity.",".$price.",".$percentage.",".$total.")";
                            if(mysqli_query($mysqli,$qury)){
                            }
                            $qury = "INSERT INTO daily_bill (date,customer_name,mobile,bill) values ('".$date."','".$customername."','".$mobile."',".$total.")"; 
                            if(mysqli_query($mysqli,$qury)){
                                $_SESSION['daily-magazine'] = $magazinename." is added for ".$customername." on ".$date.".";
                                header('location:employee-main-page.php');
                            } 
                        }
                    }
                }
                else{
                    $qury = "INSERT INTO daily_basis_magazine (date,customer_name,mobile,magazine_name,magazine_quentity,magazine_price,percentage,total) VALUES ('".$date."','".$customername."','".$mobile."','".$magazinename."',".$quentity.",".$price.",".$percentage.",".$total.")";
                    if(mysqli_query($mysqli,$qury)){
                    }
                    $qury = "UPDATE daily_bill SET bill = (SELECT sum(total) FROM daily_basis_magazine WHERE daily_basis_magazine.date = '".$date."' and daily_basis_magazine.customer_name = '".$customername."' and daily_basis_magazine.mobile = '".$mobile."') + (SELECT sum(total) FROM daily_basis_newspaper WHERE daily_basis_newspaper.date = '".$date."' and daily_basis_newspaper.customer_name = '".$customername."' and daily_basis_newspaper.mobile = '".$mobile."') WHERE daily_bill.date = '".$date."' and daily_bill.customer_name = '".$customername."' and daily_bill.mobile = '".$mobile."'";
                    if(mysqli_query($mysqli,$qury)){
                        $_SESSION['daily-magazine'] = $magazinename." is added for ".$customername." on ".$date.".";
                        header('location:employee-main-page.php');
                    }
                }
            }                
            $qury = "UPDATE daily_bill SET due = 0 WHERE customer_name = '".$customername."' and mobile = '".$mobile."'"; 
            if(mysqli_query($mysqli,$qury)){
            }
        }    
        else{
            $_SESSION['daily-magazinename'] = $magazinename." is already added for ".$customername.".";
            header('location:employee-main-page.php');
        }
    }
    mysqli_close($mysqli);
?>