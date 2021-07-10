<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
   header("location:userLogin.php");
}

//later submission part
$u_id = $_SESSION['uID'];

$query = "SELECT name, number, address FROM user WHERE id = $u_id";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
   $userdata = mysqli_fetch_assoc($result);

   $u_name = $userdata['name'];
   $u_number = $userdata['number'];
   $u_address = $userdata['address'];
}


if (isset($_POST['submit'])) {
   $emp_id = $_POST['id'];
   $o_id = $u_id . $emp_id;
   $date = date('Y-m-d');

   $query = "INSERT INTO orderlist (id, e_id, u_id, u_name, u_number, u_address, date) 
                VALUES ('$o_id', '$emp_id', '$u_id', '$u_name', '$u_number', '$u_address', '$date')";
   mysqli_query($connect, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/workerSelectionDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Worker Selection</title>
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
                <a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>
            </div>
        </div>
    </div>
    <div class="title">
        <h1>Worker Selection </h1>
    </div>
    <!--search bar-->
    <div class="container-00">
        <div class="row-0">
            <!-- <div class="search_wrap search_wrap_6"> -->
            <div class="search-option search-bar">
                <div class="search-box">
                    <input type="text" class="input" placeholder="search...">
                    <div class="btn">
                        <p>Search</p>
                    </div>
                </div>
            </div>
            <!--form-dropdown-->
            <div class="dropdown">
                <form>
                    <select id="drop-down" name="drop-down">
                        <option value="100">Select Worker Rating</option>
                        <option value="101">4.7</option>
                        <option value="102">4.5</option>
                        <option value="103">5.0</option>
                        <option value="104">3.5</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <!--chocolate bars of employee profile-->
    <div class="container-01">
        <!--chocolate bar--1-->
        <?php

      $query = "SELECT * FROM employee";
      $result = mysqli_query($connect, $query);

      if (mysqli_num_rows($result) > 0) {

         while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='row'>
            <div class='image'><img src='../../ICONS/account.png'></div>
            <div class='info'>
                <p> <b style='font-size: 22px;'>" . $row['name'] . "</b> <br>
                    <t style='font-size: 17px;'>" . $row['company'] . "</t></t><br>
                    " . $row['type'] . "<br>
                </p>
            </div>
            <div class='rating'>
                <p> <b style='font-size: 18px;'>Rating:" . $row['rating'] . "</b>
                    <img src='../../ICONS/rating1.png' style='margin-left: 6px; margin-top: 14px;'>
                    <button type='submit' name='submit' style='margin-top: -8px;'>Hire</button>
                </p>

            </div>
        </div>";
         }
      }

      ?>

</html>