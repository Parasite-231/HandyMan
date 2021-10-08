<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

$e_id = $_SESSION['eID'];

$query = "SELECT * FROM orderlist WHERE e_id = $e_id";
$result = mysqli_query($connect, $query);
updateStatus($result, $connect);

$query = "SELECT * FROM employee WHERE id = $e_id";
$result = mysqli_query($connect, $query);


if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $completed = $data['completed_services'];
    $total_payment = $data['total_payment'];
    $rating = number_format((float)$data['rating'], 2, '.', '');

    //update rating in employee table
    // $query = "UPDATE employee SET rating = $rating WHERE id = $e_id";
    // mysqli_query($connect, $query);

}

$query = "SELECT name FROM employee WHERE id = $e_id";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $list = mysqli_fetch_assoc($result);
    $emp_name = $list['name'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/dashboarddesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Dashboard</title>
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
                    Message
                    Board</a></li>
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
                    <span class="dashboard" style="color: brown; ">Dashboard</span>
                </div>
                <!--minor change-->

                <!--<div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt="search"></button> 
                </div>-->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <!--<img src="notifications.png" alt="notifications">-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/worker (1).png" alt="user">-->
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
       <!--upper-bar, serachbar and headline containing boxes/cards-->
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $completed ?></h1>
                        <h3>Work Completed</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/wc2.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>TK <?php echo $total_payment ?></h1>
                        <h3>Payments Received</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/payme12.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php
                        $sql = "SELECT COUNT(*) AS progress FROM orderlist WHERE e_id = $e_id AND status='In Progress'";
                        $prog_result = mysqli_query($connect, $sql);

                        if ($prog_result && mysqli_num_rows($prog_result) > 0) {
                            $prog_data = mysqli_fetch_assoc($prog_result);
                            $progress = $prog_data['progress'];
                        }

                        ?>
                        
                        <h1><?php echo $progress ?></h1>
                        <h3>Work In-progress</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/workinpro.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>Message Received</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/messagein.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rating ?></h1>
                        <h3>Average Rating</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/like2.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php
                        $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND status = 'Not started' ";
                        $result = mysqli_query($connect, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $notification = mysqli_num_rows($result);
                        } else {
                            $notification = 0;
                        }
                        ?>
        
                        <h1><?php echo $notification; ?></h1>
                        <h3>Due Work</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/duework.png" alt="work">
                    </div>
                </div>
                <div class="card" style="background-color: greenyellow;">
                    <div class="box">
        
                        <h1 style="color:black;">Good</h1>
                        <h3 style="color:black;">Account Status</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/wc3.png" alt="work">
                    </div>
                </div>
                <div class="card" style="background-color: red;">
                    <div class="box">
        
                        <h1 style="color:white;">Banned</h1>
                        <h3 style="color:white;">Account Status</h3>
                     
                    </div>
                    <!--button-->
                    <button name="send" class="buttonz">Appeal</button>
                    <div class="icon-case">
                        <img src="../../ICONS/banned.png"  alt="work">
                    </div>
                    
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="PaymentInformation.php" class="btn">View All</a>
                    </div>

                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Shift</th>
                            <th>Rating</th>
                            <th>Total Payment</th>
                            <!--<th>Description</th>-->
                        </tr>
                        <?php
                        $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND status = 'Completed'
                                 ORDER BY date DESC LIMIT 8";
                        $result = mysqli_query($connect, $query);
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
                                <td>$rating</td>
                                <td>$payment</td>
                            </tr>
                            ";
                            }
                        } else {
                            echo "No Notifications to show";
                        }


                        ?>
                        <!-- <tr>
                            <td>Md Bari</td>
                            <td>01706989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>6 hour</td>
                            <td>2.49</td>
                            <td>Tk 4200</td>
                            <td><a href="#" class="btn">View</a> </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>