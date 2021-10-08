<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

$e_id = $_SESSION['eID'];

$query = "SELECT name, ban_status FROM employee WHERE id = $e_id";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $list = mysqli_fetch_assoc($result);
    $emp_name = $list['name'];
    $ban_status = $list['ban_status'];
}

if ($ban_status == 0) {
    header("location:./dashboard.php");
}

$c_date = date('Y-m-d',  time() + 4 * 3600);

if (isset($_POST['send'])) {
    $msg = $_POST['msg'];
    $query = "INSERT INTO appeal(e_id, msg, date) VALUES ('$e_id', '$msg', '$c_date')";
    mysqli_query($connect, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/AppealDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Appeal</title>
</head>

<body>
    <!--side-bar-->
    <div class="side-menu">
        <div class="company">
            <h1>HandyMan</h1>
        </div>
        <ul>
            <ul>
                <li><a href="dashboard.php"><img src="../../ICONS/dashboard5.png" alt="dashboard"> &nbsp; Dashboard</a>
                </li>
                <li><a href="employeeProfile.php"><img src="../../ICONS/user.png" alt="profile">&nbsp; Profile</a></li>
                <li><a href="employeeWorkNotifications.php"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                        Working
                        Notification</a>
                </li>
                <!--<li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>-->
                <li><a href="PaymentInformation.php"><img src="../../ICONS/paymentmethod.png" alt="notifications">
                        &nbsp;
                        Payment
                        Information</a>
                </li>
                <!-- <li><a href="workingHistory.php"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li> -->
                <!--message html file-->
                <li><a href="EmployeeMessageBoard.php"><img src="../../ICONS/messageIncome.png" alt="notifications">
                        &nbsp; Message Board</a>
                </li>
                <!--message html file-->
                <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
                <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                        Privacy &
                        Policy</a>
                </li>
                <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
                <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a>
                </li>
            </ul>
    </div>
    <!--upper bar-->
    <div class="container">
        <div class="header">
            <div class="nav">
                <!--minor change-->
                <div class="upperbar-symbol">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="message" style="color: brown; ">Appeal</span>
                </div>
                <!--minor change-->
                <!-- <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="search.png" alt=""></button>
                    </div> -->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!-- <img src="workerp.png" alt="worker"> -->
                    </div>
                </div>
                <!--minor change to show account name-->
                <div class="profile-details">
                    <img src="../../ICONS/workerprofile.png" alt="account">
                    <span class="admin_name"><?php echo $emp_name ?></span>
                </div>
            </div>
        </div>
        <div class="description">
            <!-- <h2>Complaint Lists</h2> -->
        </div>
        <!--profile-icon-->
        <div class="Description">
            <!--new code-->
            <!--Appeal Message-->
            <div class='card' style="height: 370px;">
                <div class='bio-of-founder'>
                    <h2>
                        <img src='../../ICONS/adminmessage.png'>
                        <p style='float: right;'><?php echo $c_date ?></p>
                    </h2>
                    <hr>
                </div>

                <!-- <h3 style="margin-top: 20px;color: #f17777;">
                    <label for="EmployeeID">Employee ID</label>
                    <input type="text" name="EmployeeID" id="EmployeeID" required>
                </h3> -->
                <form method="POST" >
                    <h3 style="margin-top: 20px;justify-content: space-between; color: #f17777;"> Message</h3>
                    <textarea maxlength="255" id="address" name="msg" style="height:120px"
                        placeholder="Write message in 255 characters" required></textarea>

                    <button name="send" class="buttonz">Send</button>
                </form>




            </div>
        </div>
    </div>
</body>

</html>