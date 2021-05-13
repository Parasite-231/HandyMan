<?php

session_start();
include("../Inc/function.php");
include("../Inc/server.config.php");

$msg = '';
$errClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
    echo 'sub';
} else {
    echo 'not sub';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel-Login</title>
    <link rel="stylesheet" href="../CSS SCRIPTS/user signin.css">
    <link rel="shortcut icon" type="image/x-icon" href="../ICONS/worker.png">
</head>

<body>
    <div class="size">
        <form method="POST">
            <div class="login">
                <img src="../ICONS/userlogin.png" alt="User Login" class="position">
            </div>
            <div class="email">
                <label for="Email"></label>
                <input type="text" id="email" name="number" placeholder="Email" required><br>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
            <div>
                <button type="submit" name="submit" class="sign-in">Sign in</button>
            </div>
            <div class="agreement">
                <p>Don't have an account? <a href="./user signup.php">Sign up</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>