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
    <!--Changed 2.0-->
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/UserSignUpDesign2.0.css">
    <!-- <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userSignUp.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-7 d-none d-md-flex bg-image"></div>
            <!-- The content half -->
            <div class="col-md-5 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Sign Up</h3>
                                <p class="text-muted mb-4"></p>
                                <form class="form"  method="POST">
                                    <div class="form-group mb-3">
                                        <input id="inputName" type="text" id="username" name="username" placeholder="Full Name" value="<?php echo isset($_POST['username']) ? $name : ''; ?>" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" name="email" placeholder="Email Address" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputNumber" type="text" name="number" placeholder="Mobile Number" value="<?php echo isset($_POST['number']) ? $number : ''; ?>" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="confirm" placeholder="Repeat-password"  required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                                    <label>
                                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> I agree to all the Terms & Policy.
                                    </label>
                                    <button type="submit" class="btn btn-dark btn-block  mb-2 rounded-pill shadow-sm" style="height: 42px;font-size: 17px;">Sign Up&nbsp;</button>
                                    <!-- <a href="#" class="alert-link" style="text-align: center;color: black;font-weight: lighter;" >Forgot password?</a> -->
                                    <a href="userLogin.php" class="alert-link" style="text-align: center; color: black;font-weight: lighter;" >&nbsp;&nbsp;&nbsp;&nbsp;Already have an account? Login </a>
                                    <!-- <div class="text-center d-flex justify-content-between mt-4"><p>Code by <a href="#" class="font-italic text-muted"> 
                                        <u>Jassa</u></a></p></div> -->

                                        <div style="font-size : 17px">
                                            <?php if ($msg != '') : ?>
                                            <div class="<?php echo $errClass ?>"><?php echo $msg ?></div>
                                            <?php endif; ?>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
</body>


</html>