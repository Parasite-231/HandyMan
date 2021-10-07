<?php
require("../../Inc/function.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/Employee_panel/BanDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/banned.png">
    <!-- <script src="BanBot.js"></script> -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Banned</title>
</head>




<body>

    <h2>You have been banned!!!</h2>
    <div class="animation">
        <div id="banbot" class="fa"></div>
    </div>
    <h4></h4>
    <p id="timer"></p>


    <?php


    $id = $_SESSION['ebID'];
    $query = "SELECT ban_removal_date FROM employee WHERE id = $id ";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $date = $data['ban_removal_date'];
        $date = date('M j, Y H:i:s', strtotime($date));
    }


    ?>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?php echo $date ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + " days " + hours + " hours " +
            minutes + " minutes " + seconds + " seconds ";

        // If the count down is over, write some text 

        <?php

            $c_date = date('M j, Y H:i:s');

            if ($c_date == $date || $c_date < $date) {
                $query = "UPDATE employee SET ban_status = '0', ban_removal_date = NULL WHERE id = $id";
                mysqli_query($connect, $query);
                //header("location:./employee login.php");
            }



            ?>


        if (distance < 0) {
            window.location.replace("./employee login.php");
        }
    }, 1000);
    </script>
    <script src="BanBot.js"></script>


</body>

</html>