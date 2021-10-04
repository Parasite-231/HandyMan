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
        <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/DashboardDesign.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-building-house'></i>
            <span class="logo_name">HANDYMAN</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
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
                <a href="customerlist.php">
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
                <span class="dashboard">Admin Dashboard</span>
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
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Complete Services</div>
                        <div class="number">12,876</div>

                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Service Ongoing</div>
                        <div class="number">722</div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Revenue</div>
                        <div class="number">৳ 8,221,235</div>
                    </div>
                    <i class='bx bxs-cart-download cart four'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Profit</div>
                        <div class="number">৳ 453,876</div>
                    </div>
                    <i class='bx bx-cart cart three'></i>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Recent Services</div>
                    
                    <!--changed part-->
                     <div class="sales-details" style="margin-top: 23px;">
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Worker Name</th>
                                    <th>Work Status</th>
                                    <th>Payment</th>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                                <tr>
                                    <td>08 Aug 2021</td>
                                    <td>Ahsan Habib</td>
                                    <td>MD Maheen Hoque</td>
                                    <td>Completed</td>
                                    <td>720.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="button" style = "margin-top: 12px;">
                            <a href="#">See All</a>
                        </div>
                    </div>
                    <div class="top-sales box" >
                        <div class="title">Top Rated Workers</div>
                        <table style="margin-top: 23px;">
                        <tr>
                            <th>Worker Name</th>
                            <th>Highest Rating</th>
                        </tr>
                        <tr>
                            <td>Ahsan Habib</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Tahaa Bro</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Ifty Khan</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Dio Brando</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Faisal Sanu</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Mr.Absar</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Ahsan Habib</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Tommy</td>
                            <td>4.75</td>
                        </tr>
                        <tr>
                            <td>Ahsan Habib</td>
                            <td>4.75</td>
                        </tr>
                    </div>
                </div>
            </div>
                    <!--changed part-->
    </section>
</body>

</html>