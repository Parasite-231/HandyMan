<?php
require('../../Inc/function.php');

$date = '2021-07-26';
$shift = '3PM - 6PM';
$status = shiftStatus($shift);

$c_date = date('Y-m-d', time() + 4 * 3600);




$query = "SELECT * FROM services WHERE type = 'Home & Office Appliances'";
$result = mysqli_query($connect, $query);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $e_type = $row['name'];
        echo $e_type;
        $sql = "SELECT AVG(price) AS price, AVG(rating) AS rating FROM employee WHERE type = '$e_type'";
        $res = mysqli_query($connect, $sql);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
            print_r($data['price']);
        } else {
            echo "prob";
        }

        $e_price = number_format((float)$data['price'], 2, '.', '');
        $e_rating = number_format((float)$data['rating'], 2, '.', '');
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
            <p>Rating: " . $e_rating . "</p>
            <p>Price: " . $e_price . "</p>
            <button type='submit' name='select'><i class='fas fa-plus'
                style='margin-right: 5px;'></i>Select</button>
        </div>
        </form>
        </div>
        ";
    }
}