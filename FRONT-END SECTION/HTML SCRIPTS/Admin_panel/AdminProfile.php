<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['aID'])) {
    header("location:./adminlogin.php");
}
$a_id = $_SESSION['aID'];

$query = "SELECT username FROM admin  WHERE id = $a_id";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $list = mysqli_fetch_assoc($result);
    $name = $list['username'];
}

$a_id = $_SESSION['aID'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/AdminProfileDesign.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
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
                <a href="AdminProfile.php" class="active">
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
                    <i class='bx bxs-user'></i>
                    <!-- <i class='bx bx-coin-stack'></i> -->
                    <span class="links_name">Worker List</span>
                </a>
            </li>
            <li>
                <a href="ComplaintList.php">
                    <i class='bx bxs-file-import'></i>
                    <span class="links_name">Complaint List</span>
                </a>
            </li>
            <li>
                <a href="ServiceList.php">
                    <!-- <i class='bx bxs-user-voice'></i> -->
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Service List</span>
                </a>
            </li>

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
                <span class="dashboard">Admin Profile</span>
            </div>
            <!-- <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div> -->
            <div class="profile-details">
                <span class="admin_name"><?php echo $name ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <!-- <div class="title">Profile</div> -->
                    <div class="sales-details" style="margin-top: 23px;">

                        <!--Profile-->


                        <?php

                        $hide = 'hidden';


                        $query = "SELECT * FROM admin WHERE id = $a_id";
                        $result = mysqli_query($connect, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $data = mysqli_fetch_assoc($result);

                            $name = $data['name'];
                            $email = $data['email'];
                            $phone = $data['phone'];
                        }


                        if (isset($_POST['editPass'])) {
                            $hide = 'password';
                        }

                        if (isset($_POST['save'])) {

                            $password = $_POST['password'];
                            $con_pass = $_POST['confirm_password'];

                            if ($password === $con_pass) {
                                $password = password_hash($password, PASSWORD_DEFAULT);

                                $query = "UPDATE admin SET password = '$password' WHERE id = $a_id ";
                                mysqli_query($connect, $query);
                            }
                        }


                        ?>

                        <div class="profileform">
                            <form method="POST">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="<?php echo $name ?>" disabled>
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" value="<?php echo $email ?>" disabled>
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" id="phonenumber" name="phone" value="<?php echo $phone ?>" disabled>


                                <Button name="editPass">Edit Password</Button>
                                <input type="<?php echo $hide ?>" id="password" placeholder="Password" name="password"
                                    required>
                                <input type="<?php echo $hide ?>" id="password" placeholder="Confirm Password"
                                    name="confirm_password" required>

                                <Button name="save">Save</Button>
                            </form>
                        </div>


                        <!--Profile-->
                    </div>
                </div>
    </section>
</body>

</html>