<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}


$u_id = $_SESSION['uID'];


if (isset($_POST['submit'])) {
    $o_id = $_POST['o_id'];
    $e_id = $_POST['e_id'];
}

if (isset($_POST['final'])) {
    $rating = $_POST['rate'];
    $o_id = $_POST['o_id'];
    $e_id = $_POST['e_id'];

    $query = "UPDATE orderlist SET rating = $rating WHERE id = $o_id";
    mysqli_query($connect, $query);

    $query = "SELECT AVG(rating) AS rating FROM orderlist WHERE e_id =  $e_id";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $rating = $data['rating'];

        $sql = "UPDATE employee SET rating = $rating WHERE id = $e_id";
        mysqli_query($connect, $sql);

        $sql = "SELECT completed_services,rating FROM employee WHERE id = $e_id";
        $res = mysqli_query($connect, $sql);

        if ($res && mysqli_num_rows($res) > 0) {

            $data = mysqli_fetch_assoc($res);

            $completed = $data['completed_services'];
            $rating = $data['rating'];

            if ($rating < 2.5 && $completed > 3) {

                echo "ban man";
                $ban_removal_date = ban(7);
                $query = "UPDATE employee SET ban_status = '1', ban_removal_date = '$ban_removal_date' WHERE id = $e_id";
                mysqli_query($connect, $query);
            }
        }


        $query = "SELECT * FROM services";
        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $e_type = $row['name'];
                $sql = "SELECT AVG(rating) AS rating FROM employee WHERE type = '$e_type' AND NOT rating = 0";
                $res = mysqli_query($connect, $sql);

                if ($res) {
                    $data = mysqli_fetch_assoc($res);
                } else {
                    echo "Internal Issue";
                }

                $e_rating = number_format((float)$data['rating'], 2, '.', '');

                $query = "UPDATE services SET rating = '$e_rating' WHERE name = '$e_type'";
                mysqli_query($connect, $query);
            }
        }
    }

    //header("location:./userOrderHistoryPage.php");
}


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
                <form action="" method="POST">
                    <div class="position" style="margin-top: 25px;">
                        <div class="star-widget">
                            <input type="hidden" name="e_id" value="<?php echo $e_id ?>">
                            <input type="hidden" name="o_id" value="<?php echo $o_id ?>">
                            <input type="radio" name="rate" id="rate-1" value="5">
                            <label for="rate-1" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-2" value="4">
                            <label for="rate-2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-3" value="3">
                            <label for="rate-3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-4" value="2">
                            <label for="rate-4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-5" value="1">
                            <label for="rate-5" class="fas fa-star"></label>
                        </div>
                    </div>
                    <div class="description">
                        <p>Please provide us your honest opinion as it helps us to improve our service.</p>
                        <h3>👷</h3>
                        <button type="submit" name="final" onclick="gratitudeMessage()">Rate</button>
                        <form action="./userOrderHistoryPage.php">
                            <button style="margin-top: 3px;">Cancel</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
        <script src="PostRateByUser.js"></script>
    </header>
</body>

</html>