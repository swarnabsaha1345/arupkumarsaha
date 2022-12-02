<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_SESSION['date'];
    $year = $_SESSION['year'];
    $month = $_SESSION['month'];
    $name = $_SESSION['name'];
    $mobile = $_SESSION['mobile'];
    $bill = $_POST['bill_amount'];
    $amount = $_POST['amount'];
    $due = $_POST['due_amount'];
    $late_fine = $_POST['late_fine'];
    $transaction_type = $_POST['transaction_type'];
    $transaction_number = $_POST['transaction_number'];
    $transaction_number = strtoupper($transaction_number);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "INSERT INTO monthly_customer_payment (payment_date,payment_year,payment_month,customer_name,mobile,bill_amount,payment_amount,due_amount,late_fine,transaction_type,transaction_number) VALUES ('".$date."','".$year."','".$month."','".$name."','".$mobile."',".$bill.",".$amount.",".$due.",".$late_fine.",'".$transaction_type."','".$transaction_number."')";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['monthly-customer-transaction'] = $name." is paid Rs. ".$amount." for purchased on ".month($month).",".$year.".";
        header('location:employee-main-page.php');
    }
    mysqli_close($mysqli);

    function month($month){
        switch($month){
            case 1:
                return 'January';
                break;
            case 2:
                return 'February';
                break;
            case 3:
                return 'March';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'May';
                break;
            case 6:
                return 'June';
                break;
            case 7:
                return 'July';
                break;
            case 8:
                return 'August';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'October';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'December';
                break;
        }
    }
?>    