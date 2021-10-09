<?php

use function PHPSTORM_META\type;

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['aID'])) {
    header("location:./adminlogin.php");
}

$a_id = $_SESSION['aID'];
$query = "SELECT username FROM admin WHERE id = $a_id";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $list = mysqli_fetch_assoc($result);
    $name = $list['username'];
}

$hide = 'hidden';
if (isset($_POST['edit'])) {
    $hide = '';
}

$msg = '';
if (isset($_POST['add'])) {
    $w_name = $_POST['name'];
    $type = $_POST['type'];
    $lprice = $_POST['lprice'];
    $uprice = $_POST['uprice'];
    $img = $_FILES['img'];


    $img_name = $_FILES['img']['name'];
    $img_type = $_FILES['img']['type'];
    $img_tmp = $_FILES['img']['tmp_name'];

    $imgExt = explode('.', $img_name);
    $imgExt = strtolower(end($imgExt));
    $allowed = array('jpg', 'jpeg', 'png');
    $dest = "../../service_img/" . $img_name;


    if (!empty($w_name) && !empty($type) && !empty($lprice) && !empty($uprice) && !empty($img)) {
        if (in_array($imgExt, $allowed)) {
            move_uploaded_file($img_tmp, "../../service_img/" . $img_name);

            $query = "INSERT INTO services(name, image, type, lprice, uprice) VALUES ('$w_name', '$$dest', '$type'
                        '$lprice', '$uprice')";
            mysqli_query($connect, $query);
        } else {
            $msg = "Please upload an image";
        }
    } else {
        $msg = "Please fill in all the fields !";
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/modifyServicesDesign.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Modification</title>
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
            <!--Service Modification-->
            <li>
                <a href="modifyServices.php" class="active">
                    <!-- <i class='bx bxs-user-voice'></i> -->
                    <i class='bx bx-wrench'></i>
                    <span class="links_name">Service Modification</span>
                </a>
            </li>
            <!--Service modification-->
            <!--Banned list link-->
            <li>
                <a href="BannedList.php">
                    <i class='bx bxs-error'></i>
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
                    <span class="links_name">Complaint History</span>
                </a>
            </li>
            <!--Message History link-->
            <!--Appeal history link-->
            <li>
                <a href="AppealHistory.php">
                    <i class='bx bx-user-voice'></i>
                    <span class="links_name">Appeal History</span>
                </a>
            </li>
            <!--Appeal History link-->
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
                <span class="dashboard">Service Modification</span>
            </div>
            <!-- <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i>
                    </div> -->
            <div class="profile-details">
                <img src="../../ICONS/adminboss.png" alt="adminaccount">
                <span class="admin_name"><?php echo $name ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <!-- <div class="title">Profile</div> -->
                    <div class="sales-details" style="margin-top: 23px;">
                        <!--Profile-->

                        <div class="profileform">

                            <form method="POST" enctype="multipart/form-data">

                                <label for="name"> Work Name</label>
                                <input type="text" id="name" name="name" value="">

                                <!--work-type selection-->

                                <label for="type">Work Type</label>
                                <select id="type" name="type">
                                    <option value="Home & Office Appliances">For Home & Office Appliances</option>
                                    <option value="Construction sites">For Construction sites</option>
                                    <option value="Cleaning Services">Cleaning Services</option>
                                </select>

                                <!--end of work-type selection-->

                                <!-- price-->
                                <div class="priceTab">
                                    <div class="sanu">
                                        <label for="lprice">Lower Price </label>
                                        <input type="number" id="lprice" name="lprice" value="">
                                    </div>
                                    <div class="sanu-2">
                                        <label for="uprice">Upper Price</label>
                                        <input type="number" id="uprice" name="uprice" value="">
                                    </div>
                                </div>


                                <!--end price-->

                                <!--upload image file-->

                                <div>
                                    <label>Upload your Service Image</label>
                                    <input type="file" name="img" multiple class="choose">
                                </div>

                                <!--End of upload image file-->

                                <!--Save Section-->
                                <div class="priceTab">
                                    <div class="sanu">
                                        <Button style="width: 90%;" name="edit">Edit Service</Button>
                                    </div>
                                    <div class="sanu-2">
                                        <Button style="width: 90%;" name="add">Save</Button>
                                    </div>

                                </div>
                            </form>

                            <!--End of Save Section-->

                            <!--LOWER SECTION-->

                            <div <?php echo $hide ?>>
                                <form method="POST">

                                    <label for="name"> Service ID</label>
                                    <input type="text" id="name" name="name" value="">

                                    <div class="priceTab">
                                        <div class="sanu">
                                            <label for="lprice">Lower Price </label>
                                            <input type="text" id="lprice" name="lprice" value="">
                                        </div>

                                        <div class="sanu-2">
                                            <label for="uprice">Upper Price</label>
                                            <input type="text" id="uprice" name="uprice" value="">
                                        </div>
                                    </div>

                                    <Button name="update" style="width: 140px;float: right;">Save</Button>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
    </section>
</body>

</html>