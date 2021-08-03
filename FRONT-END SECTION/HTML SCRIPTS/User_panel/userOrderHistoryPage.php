<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}


$u_id = $_SESSION['uID'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userOrderHistoryPage.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>My Orders</title>
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
        <h1>My Order Cart</h1>
    </div>
    <!--search bar-->
    <div class="container-00">
        <div class="row-0">
            <!-- <div class="search_wrap search_wrap_6"> -->
            <!-- <div class="search-option search-bar">
               <div class="search-box">
                  <input type="text" class="input" placeholder="search...">
                  <div class="btn">
                     <p>Search</p>
                  </div>
               </div> -->
        </div>
        <!--form-dropdown-->
        <div class="dropdown">
            <!-- <form>
               <select id="drop-down" name="drop-down">
                  <option value="100">Select Worker Rating</option>
                  <option value="101">4.7</option>
                  <option value="102">4.5</option>
                  <option value="103">5.0</option>
                  <option value="104">3.5</option>
               </select>
               </form> -->
        </div>
    </div>
    </div>
    <!--chocolate bars for rating specific worker -->
    <div class="container-01">
        <?php

        $query = "SELECT * FROM orderlist WHERE u_id = $u_id ORDER BY date";
        $result = mysqli_query($connect, $query);
        updateStatus($result, $connect);

        $query = "SELECT * FROM orderlist WHERE u_id = $u_id ORDER BY date DESC";
        $result = mysqli_query($connect, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $o_id = $row['id'];
                $e_id = $row['e_id'];
                $e_name = $row['e_name'];
                $e_number = $row['e_number'];
                $e_type = $row['e_type'];
                $date = $row['date'];
                $shift = $row['shift'];
                $status = $row['status'];
                $rating = $row['rating'];
                $fee = $row['payment'];
                $css = 'display:  none;';


                if ($status == 'Done' && $rating == null) {
                    $css = '';
                }

                echo "
                <div class='row'>
                <div class='image'><img src='../../ICONS/account.png'></div>
                <div class='info'>
                <b>Order ID: " . $o_id . "</b>
                    <p><B>" . $e_name . "</B>" . ' ' . "" . $e_type . "<br>
                    <t>Contact: </t>" . $e_number . "<br><t>Date: </t>" . $date . "" . '   |' . "<t>Shift:</t>" . $shift . "
                    " . '    |' . "<t>Fee: </t> " . $fee . "." . 'BDT' . "
                    </p>
                </div>
                <div class='rating'>
                <form action='RateByUser.php' method='POST'>
                    <p>
                        <input type='hidden' name='o_id' value='" . $o_id . "'>
                        <input type='hidden' name='e_id' value='" . $e_id . "'>
                        <button type='submit' name='submit' style='margin-top: -8px;" . $css . "'>Rate</button>
                    </p>
                </form>
                </div>
                </div>
                ";
            }
        }
        ?>

        <!--chocolate bar--1-->
        <!-- <div class="row">
            <div class="image"><img src="../../ICONS/account.png"></div>
            <div class="info">
                <p>Md Hamza<br>Electrician</p>
            </div>
            <div class="rating">
                <p>
                    <button class="btn1" style="margin-top: -8px;margin-right: -1px;">Done</button>
                    <button class="btn2" style="margin-top: -8px;">Rate</button>


                </p>
            </div>
        </div> -->

</body>

</html>