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
    $email = $_POST['email'];

    if (!empty($name) && !empty($number) && !empty($password) && !empty($con_pass) && !empty($email)) {
        if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $number)) {

            $query = "SELECT * FROM employee WHERE number = '$number' LIMIT 1";
            $result = mysqli_query($connect, $query);

            if ($result && mysqli_num_rows($result) == 0) {

                if (strlen($password) == 8 || strlen($password) > 8) {

                    if ($password == $con_pass) {

                        if (strlen($name) == 4 || strlen($name) > 4) {

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                $password = password_hash($password, PASSWORD_DEFAULT);

                                $query = "INSERT into $table (name, number, email, password) VALUES ('$name', '$number', '$email',
                                                         '$password')";

                                mysqli_query($connect, $query);

                                header("location:employee login.php");
                            } else {
                                $msg = 'Email is not Valid !';
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
                $msg = 'Phone Number ALready Exists !';
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