<?php
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/dashboarddesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="workers.png">
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
            <li><a href="employeeWorkNotifications.html"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>
            <li><a href="PaymentInformation.html"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <li><a href="workingHistory.html"><img src="../../ICONS/workhistorydocument.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li>
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>
            <li><a href="employeePrivacy&Policy.html"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.html"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt="search"></button>
                </div>
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <!--<img src="notifications.png" alt="notifications">-->
                    <div class="img-case">
                        <img src="../../ICONS/worker (1).png" alt="user">
                    </div>
                </div>
            </div>
        </div>
        <!--upper-bar, serachbar and headline containing boxes/cards-->
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>102</h1>
                        <h3>Work Completed</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/work.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>TK 10,082</h1>
                        <h3>Payments Received</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/money.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>Work In-progress</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/progresspng.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>Message Received</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/message.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>4.5</h1>
                        <h3>Highest Rating</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/rating.png" alt="work">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>0</h1>
                        <h3>Work Notification</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../ICONS/notifications.png" alt="work">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="PaymentInformation.html" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Starting Time</th>
                            <th>Working Duration</th>
                            <th>Rating</th>
                            <th>Total Payment</th>
                            <!--<th>Description</th>-->
                        </tr>
                        <tr>
                            <td>Md Bari</td>
                            <td>01706989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>6 hour</td>
                            <td>2.49</td>
                            <td>Tk 4200</td>
                            <!--<td><a href="#" class="btn">View</a> </td>-->
                        </tr>
                        <tr>
                            <td>Md Saiful</td>
                            <td>01706989578</td>
                            <td>Banani</td>
                            <td>2020-12-23</td>
                            <td>12.00pm</td>
                            <td>3 hour</td>
                            <td>4.49</td>
                            <td>Tk 1200</td>
                        </tr>
                        <tr>
                            <td>Jafar Islam</td>
                            <td>01406989578</td>
                            <td>Mohakhali</td>
                            <td>2020-12-23</td>
                            <td>7.00pm</td>
                            <td>6 hour</td>
                            <td>5.00</td>
                            <td>Tk 3200</td>
                        </tr>
                        <tr>
                            <td>Shaikat Ali</td>
                            <td>01306989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>6 hour</td>
                            <td>2.49</td>
                            <td>Tk 5200</td>
                        </tr>
                        <tr>
                            <td>Jamal Bhuyian</td>
                            <td>01306989579</td>
                            <td>Uttara</td>
                            <td>2020-12-23</td>
                            <td>9.00am</td>
                            <td>2 hour</td>
                            <td>1.49</td>
                            <td>Tk 500</td>
                        </tr>
                        <tr>
                            <td>Shafiqul Islam</td>
                            <td>01806989578</td>
                            <td>Banani</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>6 hour</td>
                            <td>3.49</td>
                            <td>Tk 1200</td>
                        </tr>
                        <tr>
                            <td>Rafiqul Islam</td>
                            <td>01406989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>6 hour</td>
                            <td>2.49</td>
                            <td>Tk 2200</td>
                        </tr>
                        <tr>
                            <td>Iftekhar Ali</td>
                            <td>01506989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>4.00pm</td>
                            <td>3 hour</td>
                            <td>5.00</td>
                            <td>Tk 3200</td>
                        </tr>
                        <tr>
                            <td>Shadman Mehdi</td>
                            <td>01406989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-22</td>
                            <td>10.00pm</td>
                            <td>6 hour</td>
                            <td>4.49</td>
                            <td>Tk 1200</td>
                        </tr>
                        <tr>
                            <td>Md Moshiur Islam</td>
                            <td>01706989578</td>
                            <td>Khilgaon</td>
                            <td>2020-12-23</td>
                            <td>8.00pm</td>
                            <td>7 hour</td>
                            <td>3.49</td>
                            <td>Tk 6200</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>