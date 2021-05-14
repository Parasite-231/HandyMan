<?php

if (filter_has_var(INPUT_POST, 'customer')) {
    header("location: ./User_panel/user signup.php");
} elseif (filter_has_var(INPUT_POST, 'employee')) {
    header("location: ./Employee_panel/employee registration.html");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS SCRIPTS/bootsrapcosmo.css">
    <title>Document</title>
</head>

<body style="background-color: white;">
    <div style="top: 25%; position: absolute; left: 35%;">
        <h2>
            Are you a Customer or an Employee?
        </h2>
    </div>
    <form method="POST" action="">
        <div style="margin: 0; position: absolute; top: 50%; left: 50%;-ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%); height : 100px;">

            <button type="submit" name="customer" class="btn btn-primary btn-lg">Customer</button>
            <button type="submit" name="employee" class="btn btn-primary btn-lg">Employee</button>
        </div>
    </form>

</body>

</html>