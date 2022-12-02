<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_SESSION['date'];
    $year = $_SESSION['year'];
    $month = $_SESSION['month'];
    $papername = $_SESSION['papername'];
    $bill = $_POST['bill_amount'];
    $amount = $_POST['amount'];
    $due = $_POST['due_amount'];
    $transaction_type = $_POST['transaction_type'];
    $transaction_number = $_POST['transaction_number'];
    $transaction_number = strtoupper($transaction_number);
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $qury = "INSERT INTO newspaper_company_payment (payment_date,payment_year,payment_month,newspaper_name,bill_amount,payment_amount,due_amount,transaction_type,transaction_number) VALUES ('".$date."','".$year."','".$month."','".$papername."',".$bill.",".$amount.",".$due.",'".$transaction_type."','".$transaction_number."')";
    if(mysqli_query($mysqli,$qury)){
        $_SESSION['newspaper-company-payment'] = "You have paid ".$papername." Rs." .$amount." for this month of ".month($month).",".$year.".";
        header('location:main-page.php');
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