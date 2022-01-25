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
    <!-- <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userLoginDesign.css"> -->
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/UserLoginDesign2.0.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In</title>
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
                                <h3 class="display-4">Login In</h3>
                                <p class="text-muted mb-4"></p>
                                <form class="form" method="POST" >
                                    <div class="form-group mb-3">
                                        <input id="inputName" type="text"  name="field" placeholder="Number or E-mail" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password"  name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <button type="submit"  name="submit" class="btn btn-primary btn-block  mb-2 rounded-pill shadow-sm" style="height: 42px;font-size: 17px;">Login&nbsp;<i class='bx bxs-log-in-circle'></i></button>
                                    <div style="font-size : 17px">
                                        <?php if ($msg != '') : ?>
                                        <div class="<?php echo $errClass ?>"><?php echo $msg ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="user login.php" class="alert-link" style="text-align: center;color: black;font-weight: lighter;" >Please Login-in</a>
                                    <a href="userSignUp.php" class="alert-link" style="text-align: center;color: black;float: right;font-weight: lighter;" >Don't have an account? </a>
                            
                                    <!-- <div class="text-center d-flex justify-content-between mt-4"><p>Code by <a href="#" class="font-italic text-muted"> 
                                        <u>Jassa</u></a></p></div> -->
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