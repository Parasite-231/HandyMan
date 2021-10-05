<?php
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeeHelp.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/account.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Help & Services</title>
</head>

<body>
    <!--side-bar-->
    <div class="side-menu">
        <div class="company">
            <h1>HandyMan</h1>
        </div>
        <ul>
            <li><a href="dashboard.php"><img src="../../ICONS/dashboard5.png" alt="dashboard"> &nbsp; Dashboard</a></li>
            <li><a href="employeeProfile.php"><img src="../../ICONS/user.png" alt="profile">&nbsp; Profile</a></li>
            <li><a href="employeeWorkNotifications.php"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <!--<li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>-->
            <li><a href="PaymentInformation.php"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <!-- <li><a href="workingHistory.php"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li> -->
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
            <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <!--minor change-->
                <div class="upperbar-symbol">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard" style="color: brown; " >Help</span>
                </div>
                <!--minor change-->
                <!--<div class="search">
                  <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button> 
                </div>-->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/help.png" alt="help">-->
                    </div>
                </div>

                   <!--minor change to show account name-->
                <div class="profile-details">
                    <img src="../../ICONS/workerprofile.png" alt="account">
                    <span class="admin_name">Shamsu Mazumder</span>
                </div>
                 <!--end of minor change to show account name-->
                 
            </div>
        </div>
        <!--profile-icon-->
        <div class="description">
            <h2>FAQ</h2>
            <div class="informations">
                <!--paragraph on "how we help our employees"-->
               <!--changed parts-->
                <div class="info">
                    <h3>Q. How does this site work?</h3>
                    <p>
                        You can browse the site or use our search engine to take any service orders from customers.But
                        first of all you have to register into the employee platform of this website. You have to let us
                        know your name, phone number, working sector, address, company name if you are from any – you
                        are done.
                    </p>
                    <h3>Q. Can I login to this website using E-mail?</h3>
                    <p>Yes, you can login to these website by using mail after registration process.</p>


                    <h3>Q. How can I contact you?</h3>
                    <p>You can always contact us through our contact numbers provided in our contact us page and can
                        also mail us at <a href="mdmuktadirmazumder@gmail.com">reachus@handyman.com</a></a><br>
                        Visit : <a href="contactUs.html" style="color: #f17777;">www.contacthandyman.com</a><br>
                        Contact: +8801306989579 </p>



                    <h3>Q. How do I know when about my work notifications? </h3>
                    <p>If your profile is not set up you can't get any work notifications.

                    <h3>Q. How can I get my work notifications?</h3>
                    <p> You can get notifications about work from your customers by visiting the working notifications
                        page in your dashboard.<br>
                        Visit : <a href="employeeWorkNotifications.html"
                            style="color: #f17777;">www.employeenotifications.com</a><br>
                    </p>

                    <h3>Q. How can I get informations about my past works?</h3>
                    <p>You can only get necessary informations from your past works by visiting the working history site
                        from your dashboard<br>
                        Visit:<a href="workingHistory.html" style="color:#f17777;">www.workinghistory.com</a> to know
                        your working history</p>

                    <h3>Q. How will you notify me about my bad actions?</h3>
                    <p>We will notify you through E-mai and you will be warned accordingly or punished on the basis of
                        your actions.</p>


                    <h3>Q. What will be the rating system of any work?</h3>
                    <p>The customer will give you the rating on the basis of your work.

                    <h3>Q. What will be my service providing hours? </h3>
                    <p>You can provide your service from 8 am to 10 pm every day. </p>

                    <h3>Q. Can I cancel my work?</h3>
                    <p>No, you can't cancel your work once you choose any order. </p>

                    <h3>Q. How can I receive my payments </h3>
                    <p>You will get your payment directly from customers in cash after providing service. </p>




                    <h3>Q. In which area this service exists? </h3>
                    <p>We are currently serving all of Dhaka city, except certain parts of Old town. </p>


                    <h3>Q. How can I contact with my customer? </h3>
                    <p>You can contact with your customer over phone.</p>



                    <h3>Q. Should I receive tip from my customer ? </h3>
                    <p>Tips are not required. But you can receive tips if only your customer provide you for your hard
                        work.</p>
                </div>
            </div>
        </div>
</body>

</html>