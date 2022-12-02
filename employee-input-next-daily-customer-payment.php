<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_SESSION['date'];
    $pdate = $_SESSION['pdate'];
    $name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $bill = $_POST['bill_amount'];
    $amount = $_POST['amount'];
    $due = $_POST['due_amount'];
    $transaction_type = $_POST['transaction_type'];
    $transaction_number = $_POST['transaction_number'];
    $transaction_number = strtoupper($transaction_number);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "INSERT INTO daily_customer_payment (payment_date,purchase_date,customer_name,mobile,bill_amount,payment_amount,due_amount,transaction_type,transaction_number) VALUES ('".$date."','".$pdate."','".$name."','".$mobile."',".$bill.",".$amount.",".$due.",'".$transaction_type."','".$transaction_number."')";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['customer-transaction'] = $name." is paid Rs. ".$amount." for purchased on ".$pdate.".";
        header('location:employee-main-page.php');
    }
    $qury = "UPDATE daily_bill SET payment = ".$amount.",due = ".$due." WHERE date = '".$pdate."' and customer_name = '".$name."' and mobile = '".$mobile."'";
    if(mysqli_query($mysqli,$qury)){
    }
    mysqli_close($mysqli);
?>    