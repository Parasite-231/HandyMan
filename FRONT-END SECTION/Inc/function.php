<?php
include(__DIR__ . "./server_config.php");

function check_user_login($connect, $table)
{
    if (isset($_SESSION['ID'])) {
        $id = $_SESSION['ID'];
        $query = "SELECT * FROM $table WHERE ID = '$id' LIMIT 1";

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

function generateKey()
{
    $length = 6;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}