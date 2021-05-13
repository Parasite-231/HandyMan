<?php
require("../Inc/server_config.php");

$msg = '';
$errClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {

    $name = $_POST['username'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $con_pass = $_POST['confirm'];


    if (!empty($name) && !empty($number) && !empty($password) && !empty($con_pass)) {
        if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $number)) {

            if (strlen($password) == 8 || strlen($password) > 8) {

                if ($password == $con_pass) {

                    if (strlen($name) == 4 || strlen($name) > 4) {

                        $password = password_hash($password, PASSWORD_DEFAULT);

                        $query = "INSERT INTO user (name, number, password) VALUES ('$name', '$number', '$password') ";
                        mysqli_query($connect, $query);
                        header("location: user login.php");
                        die;
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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel-Sign up</title>
    <link rel="stylesheet" href="../CSS SCRIPTS/user signup.css">
    <link rel="shortcut icon" type="image/x-icon" href="../ICONS/worker.png">
</head>

<body>
    <div class="size">
        <div>
            <?php if ($msg != '') : ?>
            <div class="<?php echo $errClass ?>"><?php echo $msg ?></div>
            <?php endif; ?>
        </div>
        <form method="POST">
            <div class="header">
                <h1>Sign Up</h1>
            </div>
            <div>
                <p>Fill up the form to create an account</p>
                <hr>
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="text" id="email" name="number" placeholder="Number eg. 017xxxxxx97" required>
            </div>
            <div class="username">
                <label for="username"></label>
                <input type="text" id="username" name="username" placeholder="Full Name" required>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="repeat-password">
                <label for="password-repeat"></label>
                <input type="password" name="confirm" placeholder="Repeat Password" required>
            </div>
            <div class="agreement">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a
                        href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div style="padding-top: 16px;">
                <button type="submit" name="submit" class="sign-up">Sign up</button>
            </div>
            <div>
                <p class="no-account">Already have an account? <a href="./user login.php">Login</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>