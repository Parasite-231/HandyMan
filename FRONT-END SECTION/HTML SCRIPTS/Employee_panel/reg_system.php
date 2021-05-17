<?php

$table = 'employee';
require("../../Inc/server_config.php");

$msg = '';
$errClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $con_pass = $_POST['confirm'];
    $key = $_POST['key_id'];

    if (!empty($name) && !empty($number) && !empty($password) && !empty($con_pass) && !empty($key)) {
        if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $number)) {

            if (strlen($password) == 8 || strlen($password) > 8) {

                if ($password == $con_pass) {

                    if (strlen($name) == 4 || strlen($name) > 4) {

                        $query = "SELECT * FROM employee WHERE key_id = '$key' ";
                        $result = mysqli_query($connect, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $password = password_hash($password, PASSWORD_DEFAULT);
                            $query = "UPDATE employee SET name = '$name', number = '$number', password = '$password' WHERE
                            key_id = '$key' ";
                            mysqli_query($connect, $query);

                            $query = "UPDATE employee SET key_id = '0' WHERE number = '$number'";
                            mysqli_query($connect, $query);

                            header("location:employee login.php");
                        } else {
                            $msg = 'Wrong Key ID given !';
                            $errClass = 'alert-danger';
                        }
                    } else {
                        $msg = 'Please write your Full Name !';
                        $errClass = 'alert-danger';
                    }
                } else {
                    $msg = 'Passwords do not match !';
                    $errClass = 'alert-danger';
                }
            } else {
                $msg = 'Password is too short !';
                $errClass = 'alert-danger';
            }
        } else {
            $msg = 'Please enter a valid Phone Number !';
            $errClass = 'alert-danger';
        }
    } else {
        $msg = 'Please fill in all the fields !';
        $errClass = 'alert-danger';
    }
}