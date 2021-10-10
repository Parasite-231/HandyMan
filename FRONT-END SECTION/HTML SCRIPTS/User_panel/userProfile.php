<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

$se_uid = $_SESSION['uID'];

$query = "SELECT * FROM user WHERE id = $se_uid";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $number = $data['number'];
    $email = $data['email'];
    $address = $data['address'];
}

if (isset($_POST['submit'])) {

    $address = $_POST['address'];

    $query = "UPDATE user SET address = '$address' WHERE id = $se_uid  ";
    mysqli_query($connect, $query);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userProfile.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Profile</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="userOrderHistoryPage.php"><i class="fa  fa-shopping-cart"></i>My Orders</a>
                <a href="About us.php" class="constant"><i class="fa  fa-users"></i>About Us</a>
                <a href="contactUs.php"><i class="fa fa-phone-square"></i>Contact Us</a>
                <a href="userTerms&policy.php" class="constant"><i class="fa fa-file-signature"></i>Terms & Policy</a>
                <a href="userhelp.php"><i class="fa fa-question-circle"></i>Help</a>
                <a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-2">
            <div class="content-section">
                <div class="title">
                    <h2>Profile</h2>
                    <dib class="shadowimg">
                        <img src="../../UI-UX Designs/elonmusk.jpg">
                        <div class="container-4">
                            <!--<h5><b>Md Siraj Mollah</b></h5> -->
                        </div>
                    </dib>
                </div>
                <div class="content">
                    <!--profile-form-->
                    <div class="container-3">
                        <form method="POST">
                            <div class="heading-of-profile-card">
                                <h2>Profile Card</h2>
                            </div>
                            <div class="row">
                                <div class="colsection1">
                                    <label for="name">Name</label>
                                </div>
                                <div class="colsection2">
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colsection1">
                                    <label for="email">Email</label>
                                </div>
                                <div class="colsection2">
                                    <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colsection1">
                                    <label for="phone-number">Mobile number</label>
                                </div>
                                <div class="colsection2">
                                    <input type="text" id="email" name="number" value="<?php echo $number; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="colsection1">
                                    <label for="address">Address</label>
                                </div>
                                <div class="colsection2">
                                    <textarea id="address" name="address"
                                        style="height:150px"><?php echo $address; ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <!--profile-form-->
                    <!--<div class="button">
                     <a href="">Connect with us</a>
                     </div>-->
                </div>
                <!--<div class="social-media">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                  <a href=""><i class="fab fa-instagram-square"></i></a>
                  <a href=""><i class="fab fa-twitter-square"></i></a>
                  </div>-->
            </div>
        </div>
    </div>
</body>

</html>