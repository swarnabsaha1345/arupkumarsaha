<?php   
    session_start();
    require_once 'database-connection.php';
    $date = $_POST['date'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $magazinename = $_POST['magazinename'];
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    $_SESSION['date'] = $date;
    $_SESSION['year'] = $year;
    $_SESSION['month'] = $month;
    $_SESSION['magazinename'] = $magazinename;
    $qury = "SELECT * FROM today_total_magazine WHERE magazine_name = '".$magazinename."' and year(date) = '".$year."' and month(date) = '".$month."'";
    if($result=$mysqli->query($qury)){
        if(mysqli_num_rows($result)>0){
            header('location:next-magazine-company-payment.php');  
        }
        else{
            $_SESSION['no-magzine-payment'] = "No Magazine recieved in this month of ".month($month).",".$year.".";
            header('location:main-page.php');
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