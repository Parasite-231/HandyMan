<?php

require('../../Inc/function.php');
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userHomepageDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Home</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="#"><i class="fa  fa-shopping-cart"></i>My Orders</a>
                <a href="About us.php" class="constant"><i class="fa  fa-users"></i>About Us</a>
                <a href="contactUs.php"><i class="fa fa-phone-square"></i>Contact Us</a>
                <a href="userTerms&policy.php" class="constant"><i class="fa fa-file-signature"></i>Terms & Policy</a>
                <a href="userhelp.php"><i class="fa fa-question-circle"></i>Help</a>

                <?php


                if (isset($_SESSION['uID'])) {
                    echo "<a href='../../Inc/logout.php'><i class='fa fa-lock'></i>Sign out</a>";
                } else {
                    echo "<a href='./chooseusertype2.php'><i class='fa fa-lock'></i>Sign in</a>";
                    echo "<a href='chooseUserType.php'><i class='fa fa-clipboard'></i>Register</a>";
                }


                ?>

            </div>
        </div>
    </div>
    <div class="title">
        <h1>Worker Selection Platform</h1>
    </div>
    <!--Home & Office worker selection-cards-->
    <class class="mainframe">
        <div class="button3" style="text-align: center;">
            <a href="">For Home & Office Appliances</a>
        </div>

        <div class="card">
            <?php




            ?>
            <form action="workerReservation.php" method="POST">
                <div class="image">
                    <img src="../../UI-UX Designs/electricians.jpg">
                </div>
                <div class="bio-of-founder">
                    <h1>Electrician</h1>
                    <input type="hidden" name="type" value="Electrician">
                </div>
                <div class="description">
                    <p>Rating : 4.1 </p>
                    <p>Price: Per hour Tk 350</p>
                    <button type="submit" name="select"><i class="fas fa-plus"
                            style="margin-right: 5px;"></i>Select</button>
                </div>
            </form>
        </div>

        <!--2nd card -->

        <div class="card">
            <?php


            if (isset($_POST['select'])) {
                $type = $_POST['type'];
            }

            ?>
            <form action="workerReservation.php" method="POST">
                <div class="image">
                    <img src="../../UI-UX Designs/ac-repairer.jpg">
                </div>
                <div class="bio-of-founder">
                    <h1>AC Repairer</h1>
                    <input type="hidden" name="type" value="AC Repairer">
                </div>
                <div class="description">
                    <p>Rating : 3.0 </p>
                    <p>Price: Per hour Tk 350</p>
                    <button type="submit" name="select"><i class="fas fa-plus"
                            style="margin-right: 5px;"></i>Select</button>
                </div>
            </form>
        </div>
        < <!--3rd card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerReservation.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/fridgerepairer.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Refrigerator Repairer</h1>
                        <input type="hidden" name="type" value="Refrigerator Repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 3.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--4th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerReservation.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/washingmachinerepairer.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Washing Machine repairer</h1>
                        <input type="hidden" name="type" value="Washing Machine repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 2.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/tvrepairer.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Television Repairer</h1>
                        <input type="hidden" name="type" value="Television Repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 3.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/ovenrepairer.png">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Oven Repairer</h1>
                        <input type="hidden" name="type" value="Oven Repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--5th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/3.png">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Carpenter</h1>
                        <input type="hidden" name="type" value="Carpenter">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--6th card-->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/painters.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Painter</h1>
                        <input type="hidden" name="type" value="Painter">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--7th card-->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/officeplumbers.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Plumber</h1>
                        <input type="hidden" name="type" value="Plumber">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--8th card-->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/stoverepairer.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Stove Repairer</h1>
                        <input type="hidden" name="type" value="Stove Repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--9th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/elevatorrepairer.png">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Elevator Repairer</h1>
                        <input type="hidden" name="type" value="Elevator Repairer">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/flasscleaners.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Glass cleaner</h1>
                        <input type="hidden" name="type" value="Glass Cleaner">
                    </div>
                    <div class="description">
                        <p>Rating : 3.5 </p>
                        <p>Price: Per hour Tk 350</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="button3" style="text-align: center;">
                <a href="">For Construction sites</a>
            </div>
            <!--Construction worker cards-->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/sbarworker.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Steel Bar Reinforcers</h1>
                        <input type="hidden" name="type" value="Steel Bar Reinforcers">
                    </div>
                    <div class="description">
                        <p>Rating : 2.5 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--10th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/cementmasons.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Cement masons</h1>
                        <input type="hidden" name="type" value="Cement Masons">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--10th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/concretefinishers.png">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Concrete finishers</h1>
                        <input type="hidden" name="type" value="Concrete finishers">
                    </div>
                    <div class="description">
                        <p>Rating : 4.1 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/steelbarcutterworker.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Steel Bar Cutters</h1>
                        <input type="hidden" name="type" value="Steel Bar Cutters">
                    </div>
                    <div class="description">
                        <p>Rating : 4.2 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/drillerworkers.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Drillers</h1>
                        <input type="hidden" name="type" value="Drillers">
                    </div>
                    <div class="description">
                        <p>Rating : 4.7 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/waterpipelinefixers.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Water Pipe-line Fixers</h1>
                        <input type="hidden" name="type" value="Water Pipe-line Fixers">
                    </div>
                    <div class="description">
                        <p>Rating : 2.0 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/pilingworkers.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Piling Workers</h1>
                        <input type="hidden" name="type" value="Piling Workers">
                    </div>
                    <div class="description">
                        <p>Rating : 3.5 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--11th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/elevatorconstructors.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Elevator Constructor</h1>
                        <input type="hidden" name="type" value="Elevator Constructor">
                    </div>
                    <div class="description">
                        <p>Rating : 3.5 </p>
                        <p>Price: Per hour Tk 670</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--12th card -->
            <div class="button3" style="text-align: center;">
                <a href="">Cleaning Services</a>
            </div>
            <!--Cards for cleaning workers-->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/constructionsiteworkers.png">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Construction-site Cleaner</h1>
                        <input type="hidden" name="type" value="Construction-site Cleaner">
                    </div>
                    <div class="description">
                        <p>Rating : 4.1 </p>
                        <p>Price: Per hour Tk 500</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--13th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/roadsitecleaner.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Road-site Garbage Cleaner</h1>
                        <input type="hidden" name="type" value="Road-site Garbage Cleaner">
                    </div>
                    <div class="description">
                        <p>Rating : 4.2 </p>
                        <p>Price: Per hour Tk 500</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--14th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/swragechannelcleanerjpg.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Sewerage-channel Cleaner</h1>
                        <input type="hidden" name="type" value="Sewerage Cleaner">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 500</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--15th card -->
            <div class="card">
                <?php


                if (isset($_POST['select'])) {
                    $type = $_POST['type'];
                }

                ?>
                <form action="workerSelection.php" method="POST">
                    <div class="image">
                        <img src="../../UI-UX Designs/parkinggaragecleaners.jpg">
                    </div>
                    <div class="bio-of-founder">
                        <h1>Parking-Garage Cleaner</h1>
                        <input type="hidden" name="type" value="Parking-Garage Cleaner">
                    </div>
                    <div class="description">
                        <p>Rating : 4.5 </p>
                        <p>Price: Per hour Tk 500</p>
                        <button type="submit" name="select"><i class="fas fa-plus"
                                style="margin-right: 5px;"></i>Select</button>
                    </div>
                </form>
            </div>
            <!--connect with us-->
            <div class="button2" style="margin-top: 65px; text-align: center;">
                <a href="">Connect with us</a>
            </div>
            <div class="social-media" style=" text-align: center;">
                <a
                    href="https://www.facebook.com/HandyMan-102425665250086/?notif_id=1625469943998749&notif_t=page_name_change_admin&ref=notif"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/handy-man-536a23216/"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
</body>

</html>
<!--End-part-->