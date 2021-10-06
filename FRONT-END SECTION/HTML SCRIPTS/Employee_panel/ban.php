<?php
require("../../Inc/function.php");
session_start();

?>



<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    p {
        text-align: center;
        font-size: 60px;
        margin-top: 0px;
    }
    </style>
</head>

<body>

    <p id="demo"></p>
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
        document.getElementById("demo").innerHTML = days + " days " + hours + " hours " +
            minutes + " minutes " + seconds + " seconds ";

        // If the count down is over, write some text 

        <?php

            $c_date = date('M j, Y H:i:s');

            if ($c_date == $date || $c_date > $date) {
                $query = "UPDATE employee SET ban_status = '0', ban_removal_date = NULL WHERE id = $id";
                mysqli_query($connect, $query);
                //header("location:./employee login.php");
            }



            ?>


        if (distance < 0) {
            // add button to redirect to login;
        }
    }, 1000);
    </script>

</body>

</html>