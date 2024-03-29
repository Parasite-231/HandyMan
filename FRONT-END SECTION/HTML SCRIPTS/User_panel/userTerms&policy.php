<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/userTerms&policyDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Terms & Policy</title>
</head>

<body>
    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="userProfile.php"><i class="fa  fa-user"></i>Profile</a>
                <a href="index.php"><i class="fa  fa-house-user"></i>Home</a>
                <a href="userOrderHistoryPage.php"><i class="fa  fa-shopping-cart"></i>My Orders</a>
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
                    <h2>Terms & Policy</h2>
                </div>
                <div class="content">
                    <p> At HandyMan, accessible at HandyMan.com, one of our main priorities is the privacy and safety of
                        our visitors. This Privacy Policy document contains types of information
                        that is collected and recorded by Handyman and how we use it.If you have additional questions or
                        require more information about our Privacy Policy, do not let
                        hesitate to contact us through emai or phone at adminhelp@Handyman.com or 16227 and this privacy
                        policy applies only to our online activities and is valid for visitors to our website by
                        with regards to the information that they shared and/or collect in Handyman . This policy is not
                        applicable to any information collected offline or via other channels.
                        other than this website.
                    </p>
                    <h3>Consent</h3>
                    <p>By using our website, you hereby consent to our Privacy Policy and agree to all of its terms and
                        conditions.</p>
                    <h3>Information we collect</h3>
                    <p>*The personal information that you are asked to provide, and the reasons why you are asked to
                        provide it, will be made clear to you at the point we ask you to provide
                        your personal information.If you contact us directly, we may receive additional information
                        about you such as your name, email address, phone number, the contents of
                        the message and/or attachments you may send us, and any other information you may choose to
                        provide.<br>
                        *When you register for an Account, we may ask for your personal id,
                        contact information, including items such as name, company name, address, email address, and
                        telephone number.
                    </p>
                    <h3>How we use your information</h3>
                    <p>We use the information we collect in various ways, including to:<br>
                        * Provide services, operate the orders, and maintain our website.<br>
                        * Improve, personalize, and expand our website.<br>
                        * Understand and analyze how you use our website.<br>
                        * Develop new products, services, features, and functionality.<br>
                        * Find and prevent fraud.<br>
                    </p>
                    <h3>Log Files</h3>
                    <p>Handyman follows a standard procedure of using log files. These files log visitors when they
                        visit websites. All hosting companies do this and a part of hosting works'
                        analytics. The information collected by log files include internet protocol (IP) addresses,
                        browser type, Internet Service Provider (ISP), date and time stamp, referring
                        pages, and possibly the number of clicks. These are not linked to any information that is
                        personally identifiable. The purpose of the information is for analyzing trends,
                        tracking users' movement on the website, and gathering demographic information.
                    </p>
                    <h3>Cookies and Web Beacons</h3>
                    <p>Like any other website,Handyman uses ‘cookies'. These cookies are used to store information
                        including visitors' preferences, and the pages on the website that the user
                        accessed or visited. The information is used to optimize the users' experience by customizing
                        our web page content based on visitors' browser type and/or other information.
                    </p>
                    <h3>Advertising Partners Privacy Policies</h3>
                    <p>You may consult this list to find the Privacy Policy for each of the advertising partners of
                        Handyman.Third-party ad servers or ad networks uses technologies like cookies,
                        JavaScript, or Web Beacons that are used in their respective advertisements and links that
                        appear on Handyman, which are sent directly to users' browser. They automatically
                        receive your IP address when this occurs. These technologies are used to measure the
                        effectiveness of their advertising campaigns and/or to personalize the advertising content
                        that you see on websites that you visit.
                    </p>
                    <h3>Third-Party Privacy Policies</h3>
                    <p>Handyman’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising
                        you to consult the respective Privacy Policies of these third-party ad for
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
                <img src="../../ICONS/privacy-policy.png">
            </div>
        </div>
    </div>
</body>

</html>