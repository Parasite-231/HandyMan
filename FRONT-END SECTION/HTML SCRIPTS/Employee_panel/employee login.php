<?php

session_start();
if (isset($_SESSION['eID'])) {
    header("location:./dashboard.php");
}



$table = 'employee';
require("../../Inc/function.php");

$msg = '';
$errClass = '';
$var = '';

if (filter_has_var(INPUT_POST, 'submit')) {

    $field = $_POST['number_or_email'];
    $password = $_POST['password'];

    if (!empty($field) && !empty($password)) {

        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            $var = 'email';
        } else {
            $var = 'number';
        }

        $query = "SELECT * FROM employee WHERE $var = '$field' LIMIT 1";
        $result = mysqli_query($connect, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if (password_verify($password, $user_data['password'])) {
                    $_SESSION['ebID'] = $user_data['id'];

                    $status = $user_data['ban_status'];
                    $id = $user_data['id'];

                    if ($status == 0) {
                        $_SESSION['eID'] = $user_data['id'];
                        header("location:./dashboard.php");
                        die;
                    } elseif ($status == 1) {
                        header("location:./ban.php?id=" . $id . "");
                    }
                } else {
                    $msg = 'Invalid information or Wrong Password !';
                    $errClass = 'alert-danger';
                }
            } else {
                $msg = 'Please enter a valid Number or Email !';
                $errClass = 'alert-danger';
            }
        } else {
            $msg = 'Please enter a valid Number or Email !';
            $errClass = 'alert-danger';
        }
    } else {
        $msg = 'Please fill in all the fields !';
        $errClass = 'alert-danger';
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Panel-Login</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../CSS SCRIPTS/employee_panel/employee login.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
</head>

<body>
    <div class="resolution">

        <div>
            <?php if ($msg != '') : ?>
            <div style="  padding: 20px; background-color: #f44336; color: white;"><?php echo $msg ?></div>
            <?php endif; ?>
        </div>

        <form method="POST">
            <div class="login">
                <img src="../../ICONS/employeeLoginLogo.png" alt="User Login" class="position">
            </div>
            <div class="name">
                <label for="name"></label>
                <input type="text" id="name" name="number_or_email" placeholder="Number or Email" required><br>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
            <div>
                <button type="submit" name="submit" class="Login">Login</button>
            </div>
            <div class="agreement">
                <p>Don't have an account? <a href="./employee registration.php">Register here</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>