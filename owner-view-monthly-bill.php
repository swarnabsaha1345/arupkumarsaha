<?php
    session_start();
    require_once 'database-connection.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    $name = $_POST['customername'];
    $mobile = $_POST['mobile'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $bill = 0;
    $qury = "SELECT SUM(bill) AS bill FROM monthly_bill WHERE customer_name = '".$name."' and mobile = '".$mobile."' and year(date) = '".$year."' and month(date) = '".$month."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            $row = $result->fetch_assoc();
            $bill = $row['bill'];
            if($bill > 0){ 
                $_SESSION['monthly-bill'] = "Total bill of ".$name." is Rs. ".$bill." in the month of ".month($month).",".$year.".";
                header('location:owner-main-page.php');
            }
            else{
                $_SESSION['null-monthly-bill'] = "Your cart is null in the month of ".month($month).",".$year.".";;
                header('location:owner-main-page.php');
            }
        }
        else{
            $_SESSION['null-monthly-bill'] = "Your cart is null in the month of ".month($month).",".$year.".";;
            header('location:owner-main-page.php');
        }
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