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
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeePrivacy&PolicyDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Privacy & Policy</title>
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
            
             <!--message html file-->
             <li><a href="EmployeeMessageBoard.html" ><img src="messageIncome.png" alt="notifications" > &nbsp; Message Board</a></li>
            <!--message html file-->
           
            <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
            <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <!--main theme-->
    <div class="container">
        <div class="header">
            <div class="nav">
                <!--minor change-->
                <div class="upperbar-symbol">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard" style="color: brown; " >Privacy & Policy</span>
                </div>
                <!--minor change-->
                <!--<div class="search">
                     <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button> 
                </div>-->
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/privacy and policy.png" alt="help">-->
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
            <h2>Terms & Policy</h2>
            <div class="informations">
                <!--paragraph on "how we help our employees"-->
                <div class="info">
                    <h3>Privacy Policy for Company Name</h3>
                    <p> At Website Name, accessible at Website.com, one of our main priorities is the privacy of our
                        visitors. This Privacy Policy document contains types of information
                        that is collected and recorded by Website Name and how we use it.If you have additional
                        questions or require more information about our Privacy Policy, do not let
                        hesitate to contact us through email at Email@Website.com and this privacy policy applies only
                        to our online activities and is valid for visitors to our website by
                        with regards to the information that they shared and/or collect in Website Name. This policy is
                        not applicable to any information collected offline or via channels
                        other than this website.
                    </p>
                    <h3>Consent</h3>
                    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                    <h3>Information we collect</h3>
                    <p>The personal information that you are asked to provide, and the reasons why you are asked to
                        provide it, will be made clear to you at the point we ask you to provide
                        your personal information.If you contact us directly, we may receive additional information
                        about you such as your name, email address, phone number, the contents of
                        the message and/or attachments you may send us, and any other information you may choose to
                        provide.When you register for an Account, we may ask for your personal id,
                        contact information, including items such as name, company name, address, email address, and
                        telephone number.
                    </p>
                    <h3>How we use your information</h3>
                    <p>We use the information we collect in various ways, including to:<br>
                        * Provide, operate, and maintain our website.<br>
                        * Improve, personalize, and expand our website.<br>
                        * Understand and analyze how you use our website.<br>
                        * Develop new products, services, features, and functionality.<br>
                        * Find and prevent fraud.<br>
                    </p>
                    <h3>Log Files</h3>
                    <p>Website Name follows a standard procedure of using log files. These files log visitors when they
                        visit websites. All hosting companies do this and a part of hosting works'
                        analytics. The information collected by log files include internet protocol (IP) addresses,
                        browser type, Internet Service Provider (ISP), date and time stamp, referring
                        pages, and possibly the number of clicks. These are not linked to any information that is
                        personally identifiable. The purpose of the information is for analyzing trends,
                        tracking users' movement on the website, and gathering demographic information.
                    </p>
                    <h3>Cookies and Web Beacons</h3>
                    <p>Like any other website, Website Name uses ‘cookies'. These cookies are used to store information
                        including visitors' preferences, and the pages on the website that the user
                        accessed or visited. The information is used to optimize the users' experience by customizing
                        our web page content based on visitors' browser type and/or other information.
                    </p>
                    <h3>Advertising Partners Privacy Policies</h3>
                    <p>You may consult this list to find the Privacy Policy for each of the advertising partners of
                        Website Name.Third-party ad servers or ad networks uses technologies like cookies,
                        JavaScript, or Web Beacons that are used in their respective advertisements and links that
                        appear on Website Name, which are sent directly to users' browser. They automatically
                        receive your IP address when this occurs. These technologies are used to measure the
                        effectiveness of their advertising campaigns and/or to personalize the advertising content
                        that you see on websites that you visit.
                    </p>
                    <h3>Third-Party Privacy Policies</h3>
                    <p>Website Name's Privacy Policy does not apply to other advertisers or websites. Thus, we are
                        advising you to consult the respective Privacy Policies of these third-party ad for
                        more detailed information. It may include their practices and instructions about how to opt-out
                        of certain options. You may find a complete list of these Privacy Policies and
                        links here: Privacy Policy Links.
                    </p>
                    <h3>GDPR Privacy Policy (Data Protection Rights)</h3>
                    <p>
                        We would like to make sure you are fully aware of all of your data protection rights. Every user
                        is entitled to the following:<br>
                        The right to access – You have the right to request copies of your personal data. We may charge
                        you a small fee for this service.
                        The right to rectification – You have the right to request that we correct any information you
                        believe is inaccurate. You also have the right to request that we complete the information you
                        believe is incomplete.
                        The right to erasure – You have the right to request that we erase your personal data, under
                        certain conditions. The right to restrict processing – You have the right to request that we
                        restrict the processing of
                        your personal data, under certain conditions.The right to object to processing – You have the
                        right to object to our processing of your personal data, under certain conditions.The right to
                        data portability – You
                        have the right to request that we transfer the data that we have collected to another
                        organization, or directly to you, under certain conditions.If you make a request, we have one
                        month to respond to you. If you
                        would like to exercise any of these rights, please contact us.
                    </p>
                </div>
            </div>
        </div>
</body>

</html>