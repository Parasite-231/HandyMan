<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/HomepageDesign.css">
        <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-dark bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <h4 style="color: goldenrod;">HandyMan</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php"><i class="fa  fa-home" style="color: white;"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userProfile.php"><i class="fa  fa-user" style="color: white;"></i>Profile</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-tools" style="color: white;"></i>Services
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" id="fonter">
                                    <li><a class="dropdown-item text-muted" href="index.php">Cleaning Services</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Lift Reparing</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Car Washing</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Electric Works</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Elevator Reparing</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">L.P.G</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Escalator</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Complete CC TV Solution</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Complete Swimming Pool & Jacuzzi Solution</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Electronic Home Appliance</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Substration Turnkey(EPC Project) Solution</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Power Generating Equipment(Disel & GasGenerator)</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userOrderHistoryPage.php"><i class="fa  fa-shopping-cart" style="color: white;"></i>My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userTerms&policy.php"><i class="fa fa-file-signature" style="color: white;"></i>Terms & Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="About us.php"><i class="fa  fa-users" style="color: white;"></i>About Us</a>
                            </li>
        
                            <li class="nav-item" >
                                <a class="nav-link" href="contactUs.php"><i class="fa fa-phone-square" style="color: white;"></i>Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userhelp.php"><i class="fa fa-question-circle" style="color: white;"></i>Help</a>
                            </li>
                        </ul>
                
                    </div>
                </div>
            </nav>
        </nav>
        <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../../ICONS/backgroundimage6 (2).jpg" class="d-block w-100" height="700px" >
                    <div class="carousel-caption d-none d-md-block" style="margin-top: 12px;">
                        <h3 style="font-weight: bolder;font-size: 60px;color: goldenrod">Electrical Solutions</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;">Let Us Glow Your Future in the Darkest Path of your Life</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" >
                    <img src="../../ICONS/a2.jpg" class="d-block w-100" alt="..." height="700px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color: goldenrod">Mechanical Solutions</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;">Make Us Your Closest Friend in the Long Run</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../ICONS/a32.jpg" class="d-block w-100" alt="..." height="700px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color:goldenrod;">Cleaning Services</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;">See the World through Our Eyes</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="title">
            <h1>Worker Selection Platform</h1>
        </div>



    <!--drop-down-menu-->




    <!--chocolate bars of employee profile-->
    <div class="container-01">
        <!--chocolate bar--1-->
        <?php

        $c_date = date('Y-m-d', time() + 4 * 3600);

        if (isset($_POST['hire']) || isset($_POST['filter'])) {
            $_SESSION['hire'] = '1';

            $date = $_POST['date'];
            $shift = $_POST['shift'];
            $type = $_POST['type'];

            $status = shiftStatus($shift);
            echo "
            <form action='workerSelection.php#jump' class='choose-priority' id='jump' method='POST'>
            <select id='drop-down' name='case'>
                <option value=''>Choose your priority </option>
                <option value='101'>Price(Hight to Low)</option>
                <option value='102'>Price(Low to High)</option>
                <option value='103'>Rating(High to Low)</option>
                <option value='104'>Rating(Low to High)</option>
            </select>
            <input type='hidden' name='date' value='" . $date . "'>
            <input type='hidden' name='shift' value='" . $shift . "'>
            <input type='hidden' name='type' value='" . $type . "'>
            <button name='filter' type='submit'>Filter<i class='fas fa-search' style='margin-left: 5px;'></i></button>
            </form>
            ";



            if ($date == $c_date && ($status == 'In Progress' || $status == 'Done')) {
                echo "
                <div class='row'>
                   <p> <b style='font-size: 30px; display: inline;'>Shift is not valid now</b>
                   <div>
                        <form action='workerReservation.php?type=" . $type . "' method='POST'>
                            <button type='submit' name='submit' style='display: inline;'>Back</button>
                        </form>
                    </div>
                   </p>
                </div>
                ";
            } else {

                if (isset($_POST['filter'])) {
                    $case = $_POST['case'];
                    $date = $_POST['date'];
                    $shift = $_POST['shift'];
                    $type = $_POST['type'];




                    switch ($case) {
                        case 101:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY price DESC";
                            $result = mysqli_query($connect, $query);
                            break;

                        case 102:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY price";
                            $result = mysqli_query($connect, $query);
                            break;

                        case 103:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                 ORDER BY rating DESC";
                            $result = mysqli_query($connect, $query);
                            break;
                        case 104:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                    (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                    shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                    WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0
                                     ORDER BY rating";
                            $result = mysqli_query($connect, $query);
                            break;

                        default:
                            $query = "SELECT * FROM employee WHERE id NOT IN 
                                        (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                                        shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                                        WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0";
                            $result = mysqli_query($connect, $query);
                            break;
                    }
                } else {
                    $query = "SELECT * FROM employee WHERE id NOT IN 
                            (SELECT e_id AS id FROM orderlist WHERE date = '$date' AND
                            shift='$shift' UNION SELECT e_id AS id FROM emp_holiday
                            WHERE date = '$date') AND type = '$type' AND price > 0 AND ban_status = 0";
                    $result = mysqli_query($connect, $query);
                }




                if ($result && mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                    <div class='row'>
                        <div class='image'><img src='../../ICONS/account.png'></div>
                    <div class='info'>
                    <p>
                        <b style='font-size: 22px;'>" . $row['name'] . "</b> <br>
                        <t style='font-size: 17px;'>" . $row['company'] . "</t>
                        <br>" . $row['type'] . "<br>
                        <t style='font-size: 18px;'>Fee: <b>" . $row['price'] . " BDT</b></t>
                    </p>
                    </div>
                    <div class='rating'>
                        <form action='confirmHire.php?afdaeqeqeasfdewrt3eradr234rwefsdgreyerhrgrsgsrfwer=" . $row['id'] . "' method='POST'>
                        <p>
                        <b style='font-size: 18px;'>Rating:" . $row['rating'] . "</b>
                        <img src='../../ICONS/rating1.png' style='margin-left: 6px; margin-top: 14px;'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='hidden' name='date' value='" . $date . "'>
                        <input type='hidden' name='shift' value='" . $shift . "'>
                        <button type='submit' name='submit' style='margin-top: -8px;'>Hire</button>
                        </p>
                        </form><br>
                    </div>
                    </div>";
                    }
                } else {
                    echo "
                    <div class='row'>
                        <center> <b style='font-size: 30px; color: red'>No worker found at this moment</b> </center>
                    </div>
                    ";
                }
            }
            // } else {
            //     echo "
            //     <div class='row'>
            //         <p> <b style='font-size: 30px;'>Shift is not valid now</b> </p>
            //         <div class='rating' style='position: relative;'>
            //             <form action='workerReservation.php?type=" . $type . "' method='POST'>
            //             <p>
            //                 <button type='submit' name='submit' style='margin-right: 20px; position: absolute;'>Go back</button>
            //             </p>
            //             </form><br>
            //         </div>
            //     </div>
            // ";
            // }
        }
        if (isset($_POST['back'])) {
            header("location:index.php");
        }


        ?>



</html>