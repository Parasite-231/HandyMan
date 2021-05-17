<?php
include("./reg_system.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel-Register</title>
    <link rel="stylesheet" type="text/css" href="../../CSS SCRIPTS/employee_panel/employee registration.css">
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
            <div class="header">
                <h1>Employee Register Form</h1>
            </div>
            <div class="heading" style="font-size: 19px;">
                <p>Fill up the form to create an account</p>
                <hr>
            </div>
            <div class="name">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="mobile-number">
                <label for="mobile-number"></label>
                <input type="tel" id="mobile-number" name="number" placeholder="Mobile Number" required>
            </div>
            <div class="registration-id">
                <label for="registration-id"></label>
                <input type="tel" id="registration-id" name="key_id" placeholder="Key ID" required>
            </div>
            <div class="password">
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="repeat-password">
                <label for="password-repeat"></label>
                <input type="password" id="password" name="confirm" placeholder="Repeat Password" required>
            </div>
            <div class="agreement">
                <label><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp;
                    <a href="#">Privacy Policy</a>
                </label>
            </div>
            <div>
                <button type="submit" name="submit" class="register">Register</button>
            </div>
        </form>
    </div>
</body>

</html>