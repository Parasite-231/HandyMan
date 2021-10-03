<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['aID'])) {
    header("location:./adminlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/customerstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="adminbro3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-building-house'></i>
            <span class="logo_name">HANDYMAN</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admindashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li>
                <a href="orderlist.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Customer List</span>
                </a>
            </li>
            <li>
                <a href="workerlist.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Worker List</span>
                </a>
            </li>
            <li class="log_out">
                <a href="../../Inc/admin_logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Customer List</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Muktadir Mazumder</span>
            </div>
        </nav>


        <div class="home-content">

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Customer Details</div>

                    <!--changed part-->
                    <div class="sales-details" style="margin-top: 23px;">
                        <table>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Rating</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Sivan</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ifty</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>313245</td>
                                <td>Koman</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343445</td>
                                <td>Noman</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343045</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Moshiur</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td>Ahsan Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                            <tr>
                                <td>343245</td>
                                <td> Habib</td>
                                <td>120/22, Shahjanpur, Dhaka</td>
                                <td>4.88</td>
                                <td>ahsan@gmail.com</td>
                                <td>0189634766</td>
                            </tr>
                        </table>
                    </div>
                    <div class="button" style = "margin-top: 12px;">
                        <a href="#">See All</a>
                    </div>
                </div>
            </div>
                    <!--changed part-->
                    
    </section>
</body>

</html>