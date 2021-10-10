<?php

include("./reg_system.php");
session_start();
if (isset($_SESSION['eID'])) {
    header("location:./index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Panel-Register</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../CSS SCRIPTS/employee_panel/employee registration.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
</head>

<body>
    <div class="resolution">
        <center>
            <div>
                <?php if ($msg != '') : ?>
                <div style="width:60%; padding: 10px; background-color: red; color: white;">
                    <?php echo $msg ?>
                </div>
                <?php endif; ?>
            </div>
        </center>

        <center>

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
                    <input type="text" id="name" name="name" placeholder="Full Name"
                        value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
                </div>
                <div class="mobile-number">
                    <label for="mobile-number"></label>
                    <input type="tel" id="mobile-number" name="number" placeholder="Mobile Number"
                        value="<?php echo isset($_POST['number']) ? $number : ''; ?>" required>
                </div>
                <div class="registration-id">
                    <label for="registration-id"></label>
                    <input type="tel" id="registration-id" name="email" placeholder="E-mail address"
                        value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                </div>

                <!--EMPLOYE TYPE-->
                <div class="employe-type">

                    <label for="employee-type"></label>
                    <select id="employee-type" name="employee_type" required>
                        <option value="1">Select working field</option>
                        <?php

                        $query = "SELECT name FROM services";
                        $result = mysqli_query($connect, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                            }
                        }

                        ?>
                    </select>
                </div>
                <!--EMPLOYE TYPE-->

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
        </center>
    </div>
</body>

</html>