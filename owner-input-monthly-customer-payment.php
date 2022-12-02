<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $_SESSION['date'] = $date;
    $_SESSION['year'] = $year;
    $_SESSION['month'] = $month;
    $_SESSION['name'] = $name;
    $_SESSION['mobile'] = $mobile;
    $qury = "SELECT * FROM monthly_bill WHERE customer_name = '".$name."' and mobile = '".$mobile."' and month(date) = '".$month."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)<=0){
            $_SESSION['cart-null'] = "Your cart is null.";
            header('location:owner-main-page.php');
        }
        else{
            $qury = "SELECT payment_date FROM monthly_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and payment_date = '".$date."'";
            if($result=$mysqli->query($qury)){
                if(mysqli_num_rows($result)<=0){
                    header('location:owner-next-monthly-customer-payment.php');           
                }
                else{
                    $qury = "SELECT payment_amount FROM monthly_customer_payment WHERE customer_name = '".$name."' and mobile = '".$mobile."' and payment_date = '".$date."'";
                    if($result=$mysqli->query($qury)){
                        if(mysqli_num_rows($result)>0){
                            $row = $result->fetch_assoc();
                            $amount = $row['payment_amount'];
                            $_SESSION['fault-monthly-customer-transaction'] = $name." is already paid Rs. ".$amount." for purchased on ".month($month).",".$year.".";
                            header('location:owner-main-page.php');
                        }        
                    }
                }
            }
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