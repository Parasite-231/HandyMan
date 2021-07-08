<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

$u_id = $_SESSION['uID'];

if (isset($_POST['submit'])) {
    $emp_id = $_POST['id'];
    $o_id = $u_id . $emp_id;
    $date = date('Y-m-d');

    $query = "INSERT INTO orderlist (id, e_id, u_id, date) VALUES ('$o_id', '$emp_id', '$u_id', '$date')";
    mysqli_query($connect, $query);
}

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
                <a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>
            </div>
        </div>
    </div>
    <div class="title">
        <h1>Worker Selection</h1>
    </div>
    <?php

    $query = "SELECT * FROM employee";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['id'] . "  " . $row['name'] . "  " . $row['email'] . "  " . $row['number'] .
                "<form method='POST'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <input type='submit' name='submit' value='submit'>
            </form><br>";
        }
    }

    ?>




    <div>












    </div>