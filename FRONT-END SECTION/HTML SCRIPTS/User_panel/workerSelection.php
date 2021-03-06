<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/workerSelectionDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Worker Selection</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="userOrderHistoryPage.php"><i class="fa  fa-shopping-cart"></i>My Orders</a>
                <a href="About us.php" class="constant"><i class="fa  fa-users"></i>About Us</a>
                <a href="contactUs.php"><i class="fa fa-phone-square"></i>Contact Us</a>
                <a href="userTerms&policy.php" class="constant"><i class="fa fa-file-signature"></i>Terms & Policy</a>
                <a href="userhelp.php"><i class="fa fa-question-circle"></i>Help</a>
                <a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>
            </div>
        </div>
    </div>
    <div class="title">
        <h1>Worker Selection </h1>
    </div>
    <!--drop-down-menu-->




    <!--chocolate bars of employee profile-->
    <div class="container-01">
        <!--chocolate bar--1-->
        <?php

        $c_date = date('Y-m-d', time() + 4 * 3600);

        if (isset($_POST['hire']) || isset($_POST['filter'])) {
            $_SESSION['hire'] = '1';

            $date = $_POST['date'];
            $shift = $_POST['shift'];
            $type = $_POST['type'];

            $status = shiftStatus($shift);
            echo "
            <form action='workerSelection.php#jump' class='choose-priority' id='jump' method='POST'>
            <select id='drop-down' name='case'>
                <option value=''>Choose your priority </option>
                <option value='101'>Price(Hight to Low)</option>
                <option value='102'>Price(Low to High)</option>
                <option value='103'>Rating(High to Low)</option>
                <option value='104'>Rating(Low to High)</option>
            </select>
            <input type='hidden' name='date' value='" . $date . "'>
            <input type='hidden' name='shift' value='" . $shift . "'>
            <input type='hidden' name='type' value='" . $type . "'>
            <button name='filter' type='submit'>Filter<i class='fas fa-search' style='margin-left: 5px;'></i></button>
            </form>
            ";



            if ($date == $c_date && ($status == 'In Progress' || $status == 'Done')) {
                echo "
                <div class='row'>
                   <p> <b style='font-size: 30px; display: inline;'>Shift is not valid now</b>
                   <div>
                        <form action='workerReservation.php?type=" . $type . "' method='POST'>
                            <button type='submit' name='submit' style='display: inline;'>Back</button>
                        </form>
                    </div>
                   </p>

                </div>
                ";
            } else {

                if (isset($_POST['filter'])) {
                    $case = $_POST['case'];
                    $date = $_POST['date'];
                    $shift = $_POST['shift'];
                    $type = $_POST['type'];




                    switch ($case) {
                        case 101:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY price DESC";
                            $result = mysqli_query($connect, $query);
                            break;

                        case 102:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY price";
                            $result = mysqli_query($connect, $query);
                            break;

                        case 103:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY rating DESC";
                            $result = mysqli_query($connect, $query);
                            break;
                        case 104:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                    (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                    shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                    WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                     ORDER BY rating";
                            $result = mysqli_query($connect, $query);
                            break;

                        default:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                        (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                        shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                        WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0";
                            $result = mysqli_query($connect, $query);
                            break;
                    }
                } else {
                    $query = "SELECT * FROM employee WHERE id NOT IN 
                            (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                            shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                            WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0";
                    $result = mysqli_query($connect, $query);
                }




                if ($result && mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                    <div class='row'>
                        <div class='image'><img src='../../ICONS/account.png'></div>
                    <div class='info'>

                    <p>
                        <b style='font-size: 22px;'>" . $row['name'] . "</b> <br>
                        <t style='font-size: 17px;'>" . $row['company'] . "</t>
                        <br>" . $row['type'] . "<br>
                        <t style='font-size: 18px;'>Fee: <b>" . $row['price'] . " BDT</b></t>
                    </p>
                    </div>
                    <div class='rating'>
                        <form action='confirmHire.php?afdaeqeqeasfdewrt3eradr234rwefsdgreyerhrgrsgsrfwer=" . $row['id'] . "' method='POST'>
                        <p>
                        <b style='font-size: 18px;'>Rating:" . $row['rating'] . "</b>
                        <img src='../../ICONS/rating1.png' style='margin-left: 6px; margin-top: 14px;'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='hidden' name='date' value='" . $date . "'>
                        <input type='hidden' name='shift' value='" . $shift . "'>
                        <button type='submit' name='submit' style='margin-top: -8px;'>Hire</button>
                        </p>
                        </form><br>
                    </div>
                    </div>";
                    }
                } else {
                    echo "
                    <div class='row'>
                        <center> <b style='font-size: 30px; color: red'>No worker found at this moment</b> </center>
                    </div>
                    ";
                }
            }
            // } else {
            //     echo "
            //     <div class='row'>
            //         <p> <b style='font-size: 30px;'>Shift is not valid now</b> </p>
            //         <div class='rating' style='position: relative;'>
            //             <form action='workerReservation.php?type=" . $type . "' method='POST'>
            //             <p>
            //                 <button type='submit' name='submit' style='margin-right: 20px; position: absolute;'>Go back</button>
            //             </p>
            //             </form><br>
            //         </div>
            //     </div>
            // ";
            // }
        }
        if (isset($_POST['back'])) {
            header("location:index.php");
        }


        ?>



</html>