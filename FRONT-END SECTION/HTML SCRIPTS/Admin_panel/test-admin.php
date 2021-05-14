<?php
$random_key = mt_rand(100000, 999999);
if (filter_has_var(INPUT_POST, 'submit')) {
    echo $random_key;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-dashboard</title>
</head>

<body>
    <form method="POST" action="">
        <button type="submit" name="submit">submit</button>
    </form>

</body>

</html>