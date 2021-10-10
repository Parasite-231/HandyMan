<?php

session_start();
if (isset($_SESSION['uID'])) {
   header("location:./index.php");
}


$table = 'user';
require("../../Inc/function.php");

$msg = '';
$errClass = '';
$var = '';

if (filter_has_var(INPUT_POST, 'submit')) {

   $field = $_POST['field'];
   $password = $_POST['password'];

   if (!empty($field) && !empty($password)) {

      if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
         $var = 'email';
      } else {
         $var = 'number';
      }
      $query = "SELECT * FROM user WHERE $var = '$field' LIMIT 1";
      $result = mysqli_query($connect, $query);
      if ($result) {
         if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            if (password_verify($password, $user_data['password'])) {

               $_SESSION['uID'] = $user_data['id'];
               header("location: ./index.php");
               die;
            } else {
               $msg = 'Invalid Information!';
               $errClass = 'alert-danger';
            }
         } else {
            $msg = 'Invalid Information!';
            $errClass = 'alert-danger';
         }
      } else {
         $msg = 'Invalid Information!';
         $errClass = 'alert-danger';
      }
   } else {
      $msg = 'Please fill in the fields';
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
    <title>Login</title>
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userLoginDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link ref="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="background">
        <div class="text">
            <h1>Login</h1>
            <p>Don't have an Account? <a href="userSignUp.php">Sign up</a></p>
        </div>
        <div class="container">
            <form class="form" method="POST">
                <input type="text" class="username" name="field" placeholder="Number or E-mail" required>
                <input type="password" class="password" name="password" placeholder="Password" required>
                <p> <input type="submit" class="button" name="submit" value="Login"></p>
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