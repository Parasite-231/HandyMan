<?php

session_start();
if (isset($_SESSION['uID'])) {
   header("location:./index.php");
}
$table = 'user';
require("../../Inc/server_config.php");

$msg = '';
$errClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {

   $name = $_POST['username'];
   $number = $_POST['number'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $con_pass = $_POST['confirm'];


   if (!empty($name) && !empty($number) && !empty($password) && !empty($con_pass)) {
      if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $number)) {

         if (strlen($password) == 8 || strlen($password) > 8) {

            if ($password == $con_pass) {

               if (strlen($name) == 4 || strlen($name) > 4) {

                  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                     $password = password_hash($password, PASSWORD_DEFAULT);

                     $query = "INSERT INTO user (name, number, email, password) VALUES ('$name', '$number', '$email',
                                                         '$password')";
                     mysqli_query($connect, $query);
                     header("location: userLogin.php");
                     die;
                  } else {
                     $msg = 'Please Enter a Valid Email address !';
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
      $msg = 'Please fill in all the fields';
      $errClass = 'alert-danger';
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userSignUp.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="background">
        <div class="text">
            <h1>Signup</h1>
            <p>Already have an account? <a href="userLogin.php">Login</a></p>
        </div>
        <div class="container">
            <form class="form" method="POST">
                <input type="text" class="username" name="username" placeholder="Full name"
                    value="<?php echo isset($_POST['username']) ? $name : ''; ?>" required>
                <input type="email" class="email" name="email" placeholder="Email Address"
                    value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                <input type="text" class="mobile-number" name="number" placeholder="Mobile Number"
                    value="<?php echo isset($_POST['number']) ? $number : ''; ?>" required>
                <input type="password" class="password" name="password" placeholder="Password" required>
                <input type="password" class="password" name="confirm" placeholder="Repeat-password" required>
                <!--<input type="submit" class="button" value="Login">-->
                <p><input type="submit" class="button" name="submit" value="Sign Up"></p>

                <div style="font-size : 17px">
                    <?php if ($msg != '') : ?>
                    <div class="<?php echo $errClass ?>"><?php echo $msg ?></div>
                    <?php endif; ?>
                </div>

            </form>
        </div>
    </div>
</body>

</html>