<?php

session_start();
require("../../Inc/function.php");

$msg = '';
$errClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {

    $number = $_POST['number'];
    $password = $_POST['password'];

    if (!empty($number) && !empty($password)) {
        if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $number)) {

            $query = "SELECT * FROM user WHERE number = '$number' LIMIT 1";
            $result = mysqli_query($connect, $query);
            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
                    if (password_verify($password, $user_data['password'])) {
                        $_SESSION['ID'] = $user_data['id'];
                        header("location: ../index.php");
                        die;
                    } else {
                        $msg = 'Invalid information !';
                        $errClass = 'alert-danger';
                    }
                } else {
                    $msg = 'Invalid information !';
                    $errClass = 'alert-danger';
                }
            } else {
            }
        } else {
            $msg = 'Please enter a valid number !';
            $errClass = 'alert-danger';
        }
    } else {
        $msg = 'Please fill in all the fields !';
        $errClass = 'alert-danger';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel-Login</title>
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/user login.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
</head>

<body>
    <div>
        <?php if ($msg != '') : ?>
        <div class="<?php echo $errClass ?>"><?php echo $msg ?></div>
        <?php endif; ?>
    </div>

    <div class="size">
        <form method="POST">
            <div class="login">
                <img src="../../ICONS/userlogin.png" alt="User Login" class="position">
            </div>
            <div class="email">
                <label for="Email"></label>
                <input type="text" id="email" name="number" placeholder="Number eg. 017xxxxxx89" required><br>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
            <div>
                <button type="submit" name="submit" class="sign-in">Sign in</button>
            </div>
            <div class="agreement">
                <p class="no-account">Don't have an account? <a href="./user signup.php">Sign up</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>