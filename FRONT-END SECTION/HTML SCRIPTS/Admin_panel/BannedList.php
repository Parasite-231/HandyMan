<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/BannedListDesign.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banned List</title>
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
                    <a href="AdminProfile.php">
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
                    <a href="#" >
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
                <li>
                    <a href="ComplaintList.php">
                    <i class='bx bxs-file-import'></i>
                    <span class="links_name">Complaint List</span>
                    </a>
                </li>
                <!--Service list-->
                <li>
                    <a href="ServiceList.php" >
                    <i class='bx bxs-user-voice'></i>
                    <span class="links_name">Service List</span>
                    </a>
                </li>
                <!--service list-->
                <!--Banned list link-->
                <li>
                    <a href="BannedList.php" class="active">
                    <i class='bx bxs-error' ></i>
                    <span class="links_name">Banned List</span>
                    </a>
                </li>
                <!--Banned list link-->
                <!--send message link-->
                <li>
                    <a href="AdminMessageBox.php">
                    <i class='bx bxs-message-alt-edit'></i>
                    <span class="links_name">Message Box</span>
                    </a>
                </li>
                <!--send message link-->
                <!--Message history link-->
                <li>
                    <a href="AdminMessageHistory.php">
                    <i class='bx bx-history'></i>
                    <span class="links_name">Message History</span>
                    </a>
                </li>
                <!--Message History link-->
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
                    <span class="dashboard">Banned List</span>
                </div>
                <!--ajaira-->
                <form method="POST">
                    <!-- <div class="search-box">
                        <input type="text" name="input" placeholder="Search..." required>
                        <button name="search"><i class='bx bx-search'></i></button>
                        </div> -->
                </form>
                <!--ajaira-->
                <div class="profile-details">
                    <span class="admin_name">Muktadir Mazumder</span>
                </div>
            </nav>
            <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Banned List</div>
                    <!--changed part-->
                    <div class="sales-details" style="margin-top: 23px;">
                        <table>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Employee Type</th>
                                <th>Average Rating</th>
                                <th>Set Mode</th>
                            </tr>
                            <tr>
                                <td>13442</td>
                                <td>Boku</td>
                                <td>Electrician</td>
                                <td>3.55</td>
                                <td>
                                    <button name="done" class="btn-0" style="text-align: center;">Unbanned</button>
                                    <!-- <span style="color:green;margin-left:40%"></span> -->
                                </td>
                            </tr>
                            <tr>
                                <td>13442</td>
                                <td>Boku</td>
                                <td>Electrician</td>
                                <td>3.55</td>
                                <td>
                                    <button name="done" class="btn-0" style="text-align: center;">Unbanned</button>
                                    <!-- <span style="color:green;margin-left:40%"></span> -->
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- <div class="button" style="margin-top: 12px;">
                        <a href="#">Add a new Service</a>
                        </div> -->
                </div>
            </div>
            <!--changed part-->
        </section>
    </body>
</html>