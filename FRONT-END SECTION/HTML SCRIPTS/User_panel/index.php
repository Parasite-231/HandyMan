<?php

require('../../Inc/function.php');
session_start();




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userHomepageDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Home</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="#"><i class="fa  fa-shopping-cart"></i>My Orders</a>
                <a href="About us.php" class="constant"><i class="fa  fa-users"></i>About Us</a>
                <a href="contactUs.php"><i class="fa fa-phone-square"></i>Contact Us</a>
                <a href="userTerms&policy.php" class="constant"><i class="fa fa-file-signature"></i>Terms & Policy</a>
                <a href="userhelp.php"><i class="fa fa-question-circle"></i>Help</a>

                <?php


                if (isset($_SESSION['uID'])) {
                    echo "<a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>";
                } else {
                    echo "<a href='./chooseusertype2.php'><i class='fa fa-lock'></i>Sign in</a>";
                    echo "<a href='chooseUserType.php'><i class='fa fa-clipboard'></i>Register</a>";
                }


                ?>

            </div>
        </div>
    </div>
    <div class="title">
        <h1>Worker Selection Platform</h1>
    </div>
    <!--Home & Office worker selection-cards-->
    <class class="mainframe">
        <div class="button3" style="text-align: center;">
            <a href="">For Home & Office Appliances</a>
        </div>

        <?php

        $query = "SELECT * FROM services WHERE type = 'Home & Office Appliances'";
        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['rating'] == 0) {
                    $rating = 'Not Rated';
                } else {
                    $rating = $row['rating'];
                }
                echo "
                <div class='card'>

                <form action='workerReservation.php?type=" . $row['name'] . "' method='POST'>

                <div class='image'>
                    <img src='" . $row['image'] . "'>
                </div>
                <div class='bio-of-founder'>
                    <h1>" . $row['name'] . "</h1>
                    <input type='hidden' name='type' value='" . $row['name'] . "'>
                </div>
                <div class='description'>
                    <p>Rating: " . $rating . "</p>
                    <p>Price: " . $row['price'] . "</p>
                    <button type='submit' name='select'><i class='fas fa-plus'
                        style='margin-right: 5px;'></i>Select</button>
                </div>
                </form>
                </div>
                ";
            }
        }

        ?>



        <div class="button3" style="text-align: center;">
            <a href="">For Construction sites</a>
        </div>
        <!--Construction worker cards-->
        <?php

        $query = "SELECT * FROM services WHERE type = 'Construction-site'";
        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='card'>
                
                <form action='workerReservation.php' method='POST'>
                <div class='image'>
                    <img src='" . $row['image'] . "'>
                </div>
                <div class='bio-of-founder'>
                    <h1>" . $row['name'] . "</h1>
                    <input type='hidden' name='type' value='" . $row['name'] . "'>
                </div>
                <div class='description'>
                    <p>Rating: " . $row['rating'] . "</p>
                    <p>Price: Per hour Tk 350</p>
                    <button type='submit' name='select'><i class='fas fa-plus'
                        style='margin-right: 5px;'></i>Select</button>
                </div>
                </form>
                </div>
                ";
            }
        }

        ?>

        <!--10th card -->

        <!--12th card -->
        <div class="button3" style="text-align: center;">
            <a href="">Cleaning Services</a>
        </div>
        <?php

        $query = "SELECT * FROM services WHERE type = 'Cleaning'";
        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
        <div class='card'>
        
        <form action='workerReservation.php' method='POST'>
        <div class='image'>
            <img src='" . $row['image'] . "'>
        </div>
        <div class='bio-of-founder'>
            <h1>" . $row['name'] . "</h1>
            <input type='hidden' name='type' value='" . $row['name'] . "'>
        </div>
        <div class='description'>
            <p>Rating: " . $row['rating'] . "</p>
            <p>Price: Per hour Tk 350</p>
            <button type='submit' name='select'><i class='fas fa-plus'
                style='margin-right: 5px;'></i>Select</button>
        </div>
        </form>
        </div>
        ";
            }
        }

        ?>
        <!--Cards for cleaning workers-->

        <!--13th card -->

        <!--connect with us-->
        <div class="button2" style="margin-top: 65px; text-align: center;">
            <a href="">Connect with us</a>
        </div>
        <div class="social-media" style=" text-align: center;">
            <a
                href="https://www.facebook.com/HandyMan-102425665250086/?notif_id=1625469943998749&notif_t=page_name_change_admin&ref=notif"><i
                    class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/handy-man-536a23216/"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
        </div>
</body>

</html>
<!--End-part-->