<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userhelpdesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Help</title>
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
                session_start();

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
    <div class="section">
        <div class="container-2">
            <div class="content-section">
                <div class="title">
                    <h2>FAQ</h2>
                </div>
                <div class="content">
                    <h3>Q. How does this site work?</h3>
                    <p>
                        You can browse the site or use our search engine to find your desired service. You can then add
                        them to your my orders platform and click on confirm order. You have to let us know your
                        address, select a service time – you are done. An worker for that particular service will
                        arrive at your place with his helping hand.
                    </p>
                    <h3>Q. Can I login to this website using phone number?</h3>
                    <p>Yes, you can login to these website by using both phone number or email address after signing up
                    </p>


                    <h3>Q. How can I contact you?</h3>
                    <p>You can always contact us through our contact numbers provided in our contact us page and can
                        also mail us at <a href="mdmuktadirmazumder@gmail.com">reachus@handyman.com</a></a><br>
                        Visit : <a href="contactUs.php">www.handyman.com</a><br>
                        Contact: +8801306989578 </p>

                    <h3>Q. How do I know when my order is here? </h3>
                    <p> The employee you will select for your particular work will call you as soon as they are at your
                        house. </p>

                    <h3>Q. What are your servicing hours? </h3>
                    <p>We deliver our services from 8 am to 10 pm every day. You can also make your reserve time for
                        your work.</p>

                    <h3>Q. Can I cancel my order?</h3>
                    <p>No, you can't cancel your order </p>

                    <h3>Q. How do I pay? </h3>
                    <p>We accept cash on delivery only. </p>


                    <h3>Q. What happens during a strike? </h3>
                    <p>We work during strikes. That’s how dedicated we are. </p>

                    <h3>Q. Do you serve my area? </h3>
                    <p>We are currently serving all of Dhaka city, except certain parts of Old town. </p>


                    <h3>Q. Can I order over the phone? </h3>
                    <p>No, You have to order your work from our website only</p>

                    <h3>Q. How are you sourcing your employees? </h3>
                    <p>Any worker who are experienced and well-skilled are only being choose from this company. </p>

                    <h3>Q. Should I tip the worker ? </h3>
                    <p>Tips are not required. But our employees appreciate recognition for their hard work.</p>
                    <!--<div class="button">
                     <a href="">Connect with us</a>
                     </div>-->
                </div>
                <!--<div class="social-media">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                  <a href=""><i class="fab fa-instagram-square"></i></a>
                  <a href=""><i class="fab fa-twitter-square"></i></a>
                  </div>-->
            </div>
            <div class="img-section">
                <img src="../../UI-UX Designs/policyposter4.png">
            </div>
        </div>
    </div>
</body>

</html>