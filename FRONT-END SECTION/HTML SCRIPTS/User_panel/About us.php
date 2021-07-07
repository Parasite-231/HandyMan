<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/aboutUs2.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>About us</title>
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
    <div class="title">
        <h1>About Us</h1>
    </div>
    <div class="content">
        <!--<h2 style="text-align: center; ">HandyMan</h2>-->
        <p>Website is a hyper-media information storage system linking resources around the world. In website, browsers
            allow highlighted words or an icon which is called hyper links to display text, video, graphics and sound on
            a
            local computer screen. With the introduction of World Wide Web in 1989, the concept of websites has become
            more popular.
            On this web, anyone can create a home page, which millions of users can watch on their computers and
            respond.
            A website (also written as web site) is a collection of web pages and related content that is identified by
            a common
            domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and
            amazon.com.
            All publicly accessible websites collectively constitute the World Wide Web. There are also private websites
            that can
            only be accessed on a private network, such as a company's internal website for its employees. Websites are
            typically
            dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or social
            networking.
            Hyperlinking between web pages guides the navigation of the site, which often starts with a home page.Users
            can access
            having a good website instantly boosts your credibility as a legitimate business. First impressions count,
            and websites
            allow you to make a very strong impression with a well designed introduction for your business. A website
            can help showcase
            your expertise and better position your business, websites on a range of devices,including desktops,
            laptops, tablets, and smartphones.
            The app used on these devices is called a web browser. A website is a collection of related material that
            contains text, images, and may
            also include video, audio or other media. A website can be as simple as a few static pages or as complex as
            several web applications running
            simultaneously, and everything in between.A web page is often used to provide information to viewers,
            including pictures or videos to help illustrate
            important topics. A web page may also be used as a method to sell products or services to viewers. Multiple
            web pages make up a website, like our Computer Hope website.
        </p>
    </div>
    <div class="founders-headline">
        <h1>Our Founders</h1>
    </div>
    <!--card-->
    <div class="mainframe">
        <div class="card">
            <div class="image">
                <img src="../../UI-UX Designs/elon3.jpg">
            </div>
            <div class="bio-of-founder">
                <h1>Elon Musk</h1>
                <p>CEO </p>
            </div>
            <div class="description">
                <!--<p>BSc in CSE, MSc in CSE, Former VC at Brac University,Bangladesh.</p>-->
                <button>Contact</button>
            </div>
        </div>
        <!--2nd card -->
        <div class="card">
            <div class="image">
                <img src="../../UI-UX Designs/jeff.jpg">
            </div>
            <div class="bio-of-founder">
                <h1>Jeff Bezos</h1>
                <p>Finance Director</p>
            </div>
            <div class="description">
                <!--<p>BSc in CSE, MBA in IBA, Former Manager at RFL Indusries, Bangladesh.</p>-->
                <button>Contact</button>
            </div>
        </div>
        <!--3rd card -->
        <div class="card">
            <div class="image">
                <img src="../../UI-UX Designs/staffboss.jpg">
            </div>
            <div class="bio-of-founder">
                <h1>Sam Hun</h1>
                <p>Staff Manager
                </p>
            </div>
            <div class="description">
                <!--<p>BSc in CSE , Former Astt.Teacher at IUT,Bangladesh.</p>-->
                <button>Contact</button>
            </div>
        </div>
        <!--4th card -->
        <div class="card">
            <div class="image">
                <img src="../../UI-UX Designs/sundarpichai.jpg">
            </div>
            <div class="bio-of-founder">
                <h1>Jim Cameroon</h1>
                <p>Technical Director</p>
            </div>
            <div class="description">
                <!--<p>BSc in CSE, Former Manager at BAT, Bangladesh.</p>-->
                <button>Contact</button>
            </div>
        </div>
        <!--connect with us-->
        <div class="button2" style="margin-top: 65px; text-align: center;">
            <a href="">Connect with us</a>
        </div>
        <div class="social-media" style=" text-align: center;">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-instagram-square"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>
        </div>
        <!--End-part-->
</body>

</html>