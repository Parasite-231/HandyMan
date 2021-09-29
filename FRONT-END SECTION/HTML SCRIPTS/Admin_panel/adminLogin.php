<?php
$css = '';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/admin_panel/adminLogin.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/adminbro3.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Admin Login</title>
</head>

<body>
    <div class="container" style="<?php echo $css ?>">
        <form action="" method="POST">
        <h2>Admin Login</h2>
            <input type="text" id="username" style="margin-top: 15px" name="username" placeholder="Your username" required>
          <!--   <input type="text" id="key-id" name="key-id" placeholder="Your key-id" required> -->
            <input type="password" id="password" name="password" placeholder="Your password" required>
            <!-- <div class="btn"> -->
            <button class="btn" type="submit" name="login">Login</button>
         <!-- </div> -->
         </form>
        <!-- </div> -->
    </div>
</body>

</html>