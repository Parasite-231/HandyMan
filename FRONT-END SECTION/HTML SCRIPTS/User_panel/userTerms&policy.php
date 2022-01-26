<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Terms & Policies</title>
        <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/TermsHomepageDesign.css">
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
                                <a class="nav-link" aria-current="page" href="index.php"><i class="fa  fa-home" ></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userProfile.php"><i class="fa  fa-user" ></i>&nbsp;Profile</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-tools" ></i>&nbsp;Services
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown" id="fonter">
                                    <li><a class="dropdown-item text-muted" href="index.php">Hot Water System</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Booster Pump</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Chiller</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Fire Safety</a></li>
                                    <li><a class="dropdown-item text-muted" href="index.php">Elevator</a></li>
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
                                <a class="nav-link" href="userOrderHistoryPage.php"><i class="fa  fa-shopping-cart" ></i>&nbsp;My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userTerms&policy.php"><i class="fa fa-file-signature" ></i>&nbsp;Terms & Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" active href="About us.php"><i class="fa  fa-users" ></i>&nbsp;About Us</a>
                            </li>
        
                            <li class="nav-item" >
                                <a class="nav-link" href="contactUs.php"><i class="fa fa-phone-square" ></i>&nbsp;Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="userhelp.php"><i class="fa fa-question-circle" ></i>&nbsp;Help</a>
                            </li>
                        </ul>

                        <?php
                        session_start();
        
                        if (isset($_SESSION['uID'])) {
                            echo "<a href='../../Inc/logout.php'><i class='fa fa-lock'></i>&nbsp;Sign out</a>";
                        } else {
                            echo "<a href='./chooseusertype2.php'><i class='fa fa-lock'></i>&nbsp;Sign in</a>";
                            echo "<a href='chooseUserType.php'><i class='fa fa-clipboard'></i>&nbsp;Register</a>";
                        }
        
                        ?>
                
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
                    <img src="../../UI-UX Designs/t3.jpg" class="d-block w-100" height="600px" >
                    <div class="carousel-caption d-none d-md-block" style="margin-top: 12px;">
                        <h3 style="font-weight: bolder;font-size: 60px;color: goldenrod">We respect your privacy.</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;">Terms and Conditions for future.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" >
                    <img src="../../UI-UX Designs/helpingimage2.jpg" class="d-block w-100" alt="..." height="600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color: goldenrod">Let us help you</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;">Make Us Your Closest Friend in the Long Run</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../UI-UX Designs/helpingimage.jpg" class="d-block w-100" alt="..." height="600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color:goldenrod;">We are here to serve you</h3>
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" style="margin-top: 20px;">
      <h1 style="text-align: center;font-weight: lighter;margin-top: 20px;">Terms & Policy</h1>

    <!-- Three columns of text below the carousel -->
    <div class="row" style="margin-top: 42px;margin-left: 50px;">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../../UI-UX Designs/tx-modified.png" width="60%" height="50%" alt="">
        <h2 ></h2>
        <p style="margin-left: 10px;margin-top: 20px; justify-content: left;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
        <p></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../../UI-UX Designs/t222-modified.png" width="60%" height="50%" alt="">
        <h2></h2>
        <p style="margin-left: 10px;margin-top: 20px;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
        <p></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="../../UI-UX Designs/t333-modified.png" width="60%" height="50%" alt="">
        <h2></h2>
        <p style="margin-left: 10px;margin-top: 20px;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
        <p></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <div class="section" style="margin-top: 90px;" >
        <div class="container-2">
            <div class="content-section">
                <div class="title">
                    <h2 style="margin-top: 5px;">Terms & Policy</h2>
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
            <!-- <div class="img-section">
                <img src="privacy-policy.png">
            </div> -->
        </div>
        <div class="container-1  bg-dark"   >
            <footer class="py-5" style="margin: 3.4%;margin-bottom: 0%;">
                <div class="row">
                    <div class="col-2" style="margin-left: 14px;">
                        <h5 style="color: goldenrod;">Corporate Office</h5>
                        <p class="text-muted">
                            House # 4,Road # 11, Sector # 1, Uttara Model Town, Dhaka- 1230.<br>
                            Mobile: 01737-793655, 01321-081879
                        </p>
        
                    </div>
                    <div class="col-2" style="margin-left: 60px;">
                        <h5 style="color: goldenrod;">Branch Office</h5>
                        <p class="text-muted">
                            Nur Super Market,Jahaj Company More,Station Road,Rangpur.<br>
                            Mobile: 01728-678972, 01321-081879
                        </p>
        
                    </div>
                    <div class="col-2" style="margin-left: 20px;">
                        <h5 style="color: goldenrod;">Features</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Services</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Help</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-4 offset-1">
                        <!-- <form> -->
                        <h5 style="color: goldenrod;">Contact Us</h5>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1Z"/>
                                <path fill-rule="evenodd" d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm.192 1.056 6.57-4.027L8 9.586l1.239-.757.367.225A4.49 4.49 0 0 0 8 12.5c0 .526.09 1.03.256 1.5H2a2 2 0 0 1-1.808-1.144ZM16 9.67V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                            </svg>
                            &nbsp;Email: handymanbd@gmail.com
                        </p>
                        <h5 style="color: goldenrod;">Visit</h5>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                            </svg>
                            &nbsp;Web: www.HandyMan.com
                        </p>
        
                    </div>
                </div>
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p class="text-muted">&copy; 2021 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"/>
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"/>
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-dark" href="#">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    </div>

    
</body>

</html>