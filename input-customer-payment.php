<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $pdate = $_POST['pdate'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $bill_amount = $_POST['bill_amount'];
    $amount = $_POST['amount'];
    $due_amount = $_POST['due_amount'];
    $transaction_type = $_POST['transaction_type'];
    $transaction_number = $_POST['transaction_number'];
    $transaction_number = strtoupper($transaction_number);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "SELECT * FROM customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $qury = "INSERT INTO customer_payment (payment_date,purchase_date,customer_name,mobile,bill_amount,payment_amount,due_amount,transaction_type,transaction_number) VALUES ('".$date."','".$pdate."','".$name."','".$mobile."',".$bill_amount.",".$amount.",".$due_amount.",'".$transaction_type."','".$transaction_number."')";
            if(mysqli_query($mysqli,$qury)){
                $_SESSION['customer-tranction'] = $name." is paid Rs. ".$amount." on ".$date.".";
                header('location:main-page.php');
            }
        }
        else{
            $_SESSION['fault-customer-tranction'] = $name." is already paid Rs. ".$amount." on ".$date.".";
            header('location:main-page.php');
        }
    }
    mysqli_close($mysqli);
?>