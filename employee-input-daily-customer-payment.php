<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $pdate = $_POST['pdate'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $_SESSION['date'] = $date;
    $_SESSION['pdate'] = $pdate;
    $_SESSION['name'] = $name;
    $_SESSION['mobile'] = $mobile;
    $qury = "SELECT * FROM daily_bill WHERE customer_name = '".$name."' and mobile = '".$mobile."' and date = '".$pdate."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $_SESSION['cart-null'] = "Your cart is null.";
            header('location:employee-main-page.php');
        }
        else{
            $qury = "SELECT purchase_date FROM daily_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and purchase_date = '".$pdate."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                    header('location:employee-next-daily-customer-payment.php');           
                }
                else{
                    $qury = "SELECT payment_amount FROM daily_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and purchase_date = '".$pdate."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)>0){
                            $row = $result->fetch_assoc();
                            $amount = $row['payment_amount'];
                            $_SESSION['fault-customer-transaction'] = $name." is already paid Rs. ".$amount." for purchased on ".$pdate.".";
                            header('location:employee-main-page.php');
                        }
                    }
                }
            }
        }
    }
    mysqli_close($mysqli);
?>