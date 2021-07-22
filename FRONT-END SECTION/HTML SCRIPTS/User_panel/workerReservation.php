<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
   header("location:userLogin.php");
}

$type = $_POST['type'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/workerReservation.css">
    <title>Hire Worker</title>
</head>

<body>
    <header>
        <div class="main-page">
            <div class="company-logo">
                <!--<img src="hANDYman.png">-->
            </div>
            <!--<ul>
               <li class="active-mode" ><a href="#">Home</a> </li>
               <li><a href="#">Abou us</a> </li>
               <li><a href="#">Contact us</a> </li>
               <li><a href="#">Help</a> </li>
               
               </ul>-->
        </div>
        <div class="Hiring-selection">
            <!--<h2>Platform Selection</h2>-->

            <div class="Hiring-form">
                <form action="workerSelection.php" method="POST">
                    <label for="Date">Select a Date</label><img src="../../ICONS/showcalender.png"
                        style="float: right;">
                    <input type="date" id="start" name="date" value="yyyy-mm-dd" min="2021-07-21" max="2050-12-31"
                        required>
                    <label for="Timeline">Reserve a Time</label><img src="../../ICONS/showclock.png"
                        style="float: right;">
                    <select id="Timeline" name="shift">
                        <option value="1">9AM - 12PM</option>
                        <option value="2">3PM - 6PM</option>
                    </select>
                    <input type='hidden' name='type' value='<?php echo $type ?>'>
                    <input type="submit" name="hire" value="Hire">
                    <input type="submit" name="back" value="Go Back">

                </form>
            </div>
        </div>
        <!-- </div> -->
        <!--platform choosing option-->
        <!--<div class="button">
            <a href="userHomepage.html" class="btn" >Customer Platform</a>
            <a href="dasboard.html" class="btn" >Employee Platform</a>
            </div>-->
    </header>
</body>

</html>