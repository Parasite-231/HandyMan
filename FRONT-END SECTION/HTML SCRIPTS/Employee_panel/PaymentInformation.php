<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

$e_id = $_SESSION['eID'];

$query = "SELECT name FROM employee WHERE id = $e_id";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $list = mysqli_fetch_assoc($result);
    $emp_name = $list['name'];
}

$query = "SELECT * FROM orderlist WHERE e_id = $e_id";
$result = mysqli_query($connect, $query);
updateStatus($result, $connect);

if (isset($_POST['search'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND status = 'Completed' AND (date BETWEEN '$start_date' AND '$end_date')
    ORDER BY date";
    $result = mysqli_query($connect, $query);
} else {
    $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND status = 'Completed'
    ORDER BY date";
    $result = mysqli_query($connect, $query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/PaymentInformationdesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Payment Information</title>
</head>

<body>
    <!--side-bar-->
    <div class="side-menu">
        <div class="company">
            <h1>HandyMan</h1>
        </div>
        <ul>
            <li><a href="dashboard.php"><img src="../../ICONS/dashboard5.png" alt="dashboard"> &nbsp; Dashboard</a></li>
            <li><a href="employeeProfile.php"><img src="../../ICONS/user.png" alt="profile">&nbsp; Profile</a></li>
            <li><a href="employeeWorkNotifications.php"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <!--<li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>-->
            <li><a href="PaymentInformation.php"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <!-- <li><a href="workingHistory.php"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li> -->


            <!--message html file-->
            <li><a href="EmployeeMessageBoard.php"><img src="../../ICONS/messageIncome.png" alt="notifications"> &nbsp;
                    Message Board</a></li>
            <!--message html file-->


            <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
            <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <!--minor change-->
                <div class="upperbar-symbol">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard" style="color: brown; ">Payment Information</span>
                </div>
                <!--minor change-->
                <!--<div class="search">
                     <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button> 
                </div>-->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/taketaka.png" alt="paymentInformation">-->
                    </div>
                </div>

                <!--minor change to show account name-->
                <div class="profile-details">
                    <img src="../../ICONS/workerprofile.png" alt="account">
                    <span class="admin_name"><?php echo $emp_name ?></span>
                </div>
                <!--end of minor change to show account name-->

            </div>
        </div>
        <div class="description">
            <h2>Payment Information</h2>
        </div>
        <!--working-criteria-for-employee-->
        <div class="working-criteria-form--of-employee">
            <form method="POST">
                <label for="Date">From</label><img src="../../ICONS/calender2.png"
                    style="margin-left: 3px;float: right;">
                <input type="date" id="start" name="start_date" value="<?php echo $start_date ?>" min="2020-01-01"
                    max="<?php echo newDate(0) ?>">

                <label for="Date">To</label><img src="../../ICONS/calender2.png" style="margin-left: 3px;float: right;">
                <input type="date" id="start" name="end_date" value="<?php echo $end_date ?>" min="2020-01-01"
                    max="<?php echo newDate(0) ?>">

                <!--<label for="Date">Choose working-date:</label><img src="../../ICONS/calender2.png" style="margin-left: 3px;">
            <input type="date" id="start" name="trip-start"
               value="yyyy-mm-dd"
               min="2001-01-01" max="2021-12-31">
            <label for="working-hour">Choose working-hour:</label><img src="../../ICONS/clock1.png" style="margin-left: 3px;">
            <select id="working-hour" name="working-hour">
               <option value="60">None</option>
               <option value="61">Last 30 minutes</option>
               <option value="62">Last 1 hour</option>
               <option value="63">Last 5 hour</option>
               <option value="64">Last 12 hour</option>
               <option value="65">Last 24 hour</option>
            </select>-->
                <input type="submit" name="search" value="Search">
            </form>


        </div>
        <div class="headlineofrecords">
            <h2>Searched Records</h2>
        </div>
        <!--record-table-->
        <div class="records-Of-Working-Notifications">
            <table>
                <tr>
                    <th style="font-size: 22px;">Customer name</th>
                    <th style="font-size: 22px;">Contact</th>
                    <th style="font-size: 22px;"> Address</th>
                    <th style="font-size: 22px;"> Date</th>
                    <th style="font-size: 22px;">Shift</th>
                    <th style="font-size: 22px;">Rating</th>
                    <th style="font-size: 22px;">Total Payment</th>
                </tr>
                <?php

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($list = mysqli_fetch_assoc($result)) {
                        $o_id = $list['id'];
                        $u_name = $list['u_name'];
                        $u_number = $list['u_number'];
                        $u_area = $list['u_thana'];
                        $u_address = $list['u_address'];
                        $date = $list['date'];
                        $payment = $list['payment'];
                        $shift = $list['shift'];
                        $status = $list['status'];
                        $e_rating = $list['rating'];

                        echo "
                        <tr>
                            <td>$u_name</td>
                            <td>$u_number</td>
                            <td>$u_area</td>
                            <td>$date</td>
                            <td>$shift</td>
                            <td>$e_rating</td>
                            <td>$payment</td>
                        </tr>
                        ";
                    }
                }
                ?>
                <!-- <tr>
                    <td>Shahbuddin</td>
                    <td>0189634766</td>
                    <td>120/22, Shahjanpur, Dhaka</td>
                    <td>12-23-2021</td>
                    <td>3:00pm</td>
                    <td>5 hour</td>
                    <td>1299</td>
                </tr>
                <tr>
                    <td>Abdus Samat</td>
                    <td>0189634766</td>
                    <td>120/22, Shahjanpur, Dhaka</td>
                    <td>12-23-2021</td>
                    <td>3:00pm</td>
                    <td>5 hour</td>
                    <td>1299</td>
                </tr> -->
            </table>
        </div>
</body>

</html>