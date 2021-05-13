<?php
include_once(__DIR__ . "./server_config.php");

function check_user_login($connect)
{
    if (isset($_SESSION['ID'])) {
        $id = $_SESSION['ID'];
        $query = "SELECT * FROM user WHERE ID = '$id' LIMIT 1";

        $result = mysqli_query($connect, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    } else {
        header("");
        die;
    }
}