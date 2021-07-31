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
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/RateByUserDesign.css">
    <title>Rate your worker</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="card">
                <div class="image">
                    <img src="../../UI-UX Designs/star.webp">
                </div>
                <div class="position" style="margin-top: 25px;">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                    </div>
                </div>
                <div class="description">
                    <p>Please provide us your honest opinion as it helps us to improve our service.</p>
                    <h3>👷</h3>
                    <button onclick="gratitudeMessage()">Rate</button>
                    <button style="margin-top: 3px;">Cancel</button>
                </div>
            </div>
        </div>
        <script src="PostRateByUser.js"></script>
    </header>
</body>

</html>