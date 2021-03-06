<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/workingHistoryDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Working History</title>
</head>

<body>
    <!--side bar-->
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

    <!--upper bar-->

    <div class="container">
        <div class="header">
            <div class="nav">
                <!--minor change-->
                <div class="upperbar-symbol">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard" style="color: brown; ">Working History</span>
                </div>
                <!--minor change-->
                <!--<div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button> 
                </div>-->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->

                    <div class="img-case">
                        <!--<img src="../../ICONS/workhistory.png" alt="workhistory">-->
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
            <h2>Working History</h2>
        </div>


        <!--profile-icon-->
        <div class="Description">
            <!--<h3>Your Profile</h3>-->
            <!--<img src="workhistory.png">-->
            <!--record-table-->
            <div class="working-notebook">
                <form>
                    <label for="Date">Choose a timeline:</label><img src="../../ICONS/calender.png"
                        style="margin-left: 3px;">
                    <input type="date" id="start" name="trip-start" value="yyyy-mm-dd" min="2001-01-01"
                        max="2021-12-31">


                    <!--<label for="Timeline">Choose Working Timeline:</label><img src="../../ICONS/calender.png" style="margin-left: 3px;">
            <select id="Timeline" name="Timeline">
               <option value="0">Last 24 hour</option>
               <option value="1">Last 1 month</option>
               <option value="2">Last 5 month</option>
               <option value="3">Last 12 month</option>
               <option value="4">Last 1 year</option>
               <option value="4">Last 2 year</option>
            </select>-->

                    <input type="submit" value=" Search">
                </form>
            </div>

            <div class="headlineofrecords">
                <h2>Searched Records</h2>
            </div>



            <!--records-->
            <div class="workinghistory">
                <table>
                    <tr>
                        <th>Customer name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Working Duration</th>
                        <th>Rating</th>
                        <th>Total Payment</th>
                    </tr>
                    <tr>
                        <td>Lional Messi</td>
                        <td>0189634766</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>23-05-20</td>
                        <td>5 hour</td>
                        <td>4.50</td>
                        <td>1299</td>
                    </tr>
                    <tr>
                        <td>Shahin</td>
                        <td>0189634760</td>
                        <td>120/22, Khilgaon, Dhaka</td>
                        <td>23-05-20</td>
                        <td>4 hour</td>
                        <td>4.00</td>
                        <td>1099</td>
                    </tr>
                    <tr>
                        <td>Ronaldo</td>
                        <td>0149634766</td>
                        <td>120/22, Mirpur, Dhaka</td>
                        <td>24-05-20</td>
                        <td>6 hour</td>
                        <td>4.40</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <td>Sakib</td>
                        <td>0139634766</td>
                        <td>120/22, Uttara, Dhaka</td>
                        <td>25-05-20</td>
                        <td>3 hour</td>
                        <td>3.50</td>
                        <td>1199</td>
                    </tr>
                </table>
            </div>
</body>

</html>