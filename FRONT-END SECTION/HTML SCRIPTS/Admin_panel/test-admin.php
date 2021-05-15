<?php

include('../../Inc/function.php');

$manageTabClass = '';
$profileTabClass = '';
$keyTabClass = '';
if (isset($_GET['profile'])) {
    $profileTabClass = 'active show';
} elseif (isset($_GET['manage'])) {
    $manageTabClass = 'active show';
} elseif (isset($_GET['key'])) {
    $keyTabClass = 'active show';
}
$key = '';
if (filter_has_var(INPUT_POST, 'submit')) {
    loop:
    $key = mt_rand(100000, 999999);
    $query = "SELECT TOP 1 key_id FROM employee WHERE key_id = '$key' ";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        $query = "INSERT into employee (key_id) VALUES ('$key') ";
        mysqli_query($connect, $query);
    } else {
        goto loop;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS SCRIPTS/bootsrapcosmo.css">
    <title>Admin-dashboard</title>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>


                    <?php
                    session_start();
                    if (isset($_SESSION['ID'])) {
                        echo '
                        <li class="nav-item">
                        <a class="nav-link" href="../Inc/logout.php">Log out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>';
                    } else {
                        echo '  
                        <li class="nav-item">
                        <a class="nav-link" href="./User_panel/user login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user_or_employee.php">Sign up</a>
                    </li>';
                    }

                    ?>

                    <!--      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
                 <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> !-->
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo $profileTabClass; ?>" data-bs-toggle="tab" href="?profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $manageTabClass; ?>" data-bs-toggle="tab" href="?manage">Manage
                    Employee</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $keyTabClass; ?>" data-bs-toggle="tab" href="?key">Key ID</a>
            </li>

            <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div> 
        </li> !-->
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade <?php echo $profileTabClass; ?>" id="profile">
                <p>My Session Id : <?php echo $_SESSION['ID']; ?></p>
            </div>
            <div class="tab-pane fade <?php echo $manageTabClass; ?>" id="manage">
                <p>world</p>
            </div>
            <div class="tab-pane fade <?php echo $keyTabClass; ?>" id="Key ID">
                <div style="position: absolute; top: 110px;left: 10%;">
                    <h4>Generated Key ID : <?php echo $key; ?></h4>
                </div>
                <div style="  position: absolute; top: 150px; right: 20%;">
                    <form method="POST" action="">
                        <button class="btn btn-primary" type="submit" name="submit">Generate Key ID</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>