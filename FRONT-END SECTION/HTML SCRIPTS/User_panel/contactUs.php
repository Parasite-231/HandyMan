<?php

require('../../Inc/function.php');
session_start();

$msg = '';
$css = 'disabled';


if (isset($_SESSION['uID'])) {
    $css = '';
    $u_id = $_SESSION['uID'];
}


if (isset($_POST['submit'])) {
    $u_name = $_POST['name'];
    $u_number = $_POST['number'];
    $u_email = $_POST['email'];
    $o_id = $_POST['orderid'];
    $problem = $_POST['specific_prob'];
    $description = $_POST['describe'];
    $rating = $_POST['rating'];

    if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $u_number)) {
        if (filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT * FROM orderlist WHERE u_id = $u_id AND id = $o_id AND status = 'Completed'";
            $result = mysqli_query($connect, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $query = "INSERT INTO complain(o_id, rating, u_name, u_email, u_number, problem, description) 
                            VALUES ('$o_id', '$rating', '$u_name', '$u_email', '$u_number', '$problem', '$description')";
                mysqli_query($connect, $query);

                $msg = 'Your complain has been submitted';
                $css = "style='padding: 10px; margin-bottom: 10px; margin-top:10px; text-align: center; border-radius = 10px;
                        background-color: yellowgreen; color: white; width: 650px; height: 50px; font-size:18px;
                        box-shadow: 0 6px 22px 0 rgba(0, 0, 0, 0.2);'";
            } else {
                $msg = 'Given Order ID is Not Valid';
                $css = "style='padding: 10px; margin-bottom: 10px; margin-top:10px; text-align: center;border-radius = 10px;
                         background-color: red; color: white; width: 650px; height: 50px;font-size:18px;
                         box-shadow: 0 6px 22px 0 rgba(0, 0, 0, 0.2);'";
            }
        } else {
            $msg = 'Please Enter a Valid Email Address';
            $css = "style='padding: 10px; margin-bottom: 10px; margin-top:10px; text-align: center;border-radius = 10px;
            background-color: red; color: white; width: 650px; height: 50px;font-size:18px;
            box-shadow: 0 6px 22px 0 rgba(0, 0, 0, 0.2);'";
        }
    } else {
        $msg = 'Please enter a Valid Number';
        $css = "style='padding: 10px; margin-bottom: 10px; margin-top:10px; text-align: center;border-radius = 10px;
        background-color: red; color: white; width: 650px; height: 50px;font-size:18px;
        box-shadow: 0 6px 22px 0 rgba(0, 0, 0, 0.2);'";
    }
}

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" href="../../CSS SCRIPTS/ContactUsUser.css">
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
                    <img src="../../UI-UX Designs/helpingimage2.jpg" class="d-block w-100" height="600px" >
                    <div class="carousel-caption d-none d-md-block" style="margin-top: 12px;">
                        <h3 style="font-weight: bolder;font-size: 60px;color: white">Contact with us.</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;"></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" >
                    <img src="../../UI-UX Designs/x1.jpg" class="d-block w-100" alt="..." height="600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color: white">Let us help you</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;"></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../UI-UX Designs/y1.jpg" class="d-block w-100" alt="..." height="600px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="font-weight: bolder;font-size: 60px;color:white;">We are here to serve you</h3>
                        <p style="color: white;font-size: 20px;font-weight: bolder;"></p>
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
    <h1 style="text-align: center;font-weight: lighter;margin-top: 40px;">Contact Information</h1>

  <!-- Three columns of text below the carousel -->
  <div class="row" style="margin-top: 42px;margin-left: 70px;">
    <div class="col-lg-4">
      <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
      <img src="../../UI-UX Designs/p1-modified.png" width="80%" height="20%" alt="">
      <h2 style="margin-top: 24px;" >Customer Service</h2>
      <p style="margin-left: 10px;margin-top: 10px; justify-content: left;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
      <img src="../../UI-UX Designs/p4-modified.png" width="80%" height="20%" alt="">
      <h2  style="margin-top: 24px; margin-left: 28px;" >Rate Workers</h2>
      <p style="margin-left: 10px;margin-top: 10px;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
      <img src="../../UI-UX Designs/p02-modified.png" width="80%" height="20%" alt="">
      <h2  style="margin-top: 24px; margin-left: 21px;">Complaint Form</h2>
      <p style="margin-left: 10px;margin-top: 10px;">"We are very much thankful to be with you.<br>Remember with great power comes great responsibility.We are very much thankful to <br> with you.Remember with great power comes<br> great responsibility"</p>
      <p></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  <h1 style="text-align: center;font-weight: lighter;margin-top: 20px;">Customer Service</h1>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="margin-top: 30px;">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 bg-success">
            <h4 class="my-0 fw-normal text-white">Dinajpur Branch</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light">Branch Details</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
              Dhap Branch<br>
              Contact: Manager<br>
              Phone:01709995543,01709995543<br>
              Radhapollob Office<br>
              Contact: Manager<br>
              Phone:01709995543,01709995543<br>
              Haragach Branch<br>
              Contact: Manager<br>
              Phone:01709995543,01709995543<br>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-dark">Contact</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm"">
          <div class="card-header py-3 bg-info">
            <h4 class="my-0 fw-normal text-white">Dhaka Branch</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light">Branch Details</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
                Banani Branch<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
                Uttara Office<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
                Khilgaon Branch<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
            
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-dark">Contact</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-white bg-warning">
            <h4 class="my-0 fw-normal text-white">Chittagong Branch</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light">Branch Details</small></h1>
            <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
                Patenga Branch<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
                Nilgiri Office<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
                Karnaphul Branch<br>
                Contact: Manager<br>
                Phone:01709995543,01709995543<br>
              
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-dark">Contact</button>
          </div>
        </div>
      </div>
    </div>


  </main>

  <h1 style="text-align: center;font-weight: lighter;margin-top: 20px;">Complaint Form</h1>

 <div <?php echo $css ?>>
                        <t><?php echo $msg ?></t>
</div>

  <div class="complaint-form" >
    <form action="contactUs.php#jump" method="POST">
        <h4 class="heading-of-complaint-form">Complaint Form</h4>
        <label for="name">Name</label><span class="required">*</span>
        <input type="text" id="name" name="name" required>
        <label for="email">Email</label><span class="required">*</span>
        <input type="email" id="email" name="email" required>
        <label for="phone-number">Phone-number</label><span class="required">*</span>
        <input type="text" id="phone-number" name="number" required>
        <label for="reson-for-complaining">Choose a reason for your complain</label><span
            class="required">*</span>
        <select id="Gender" name="specific_prob">
            <option value="Bad behaviour of employee">Bad behaviour of employee</option>
            <option value="Employee did not arrive on time">Employee did not arrive on time</option>
            <option value="Bad service of employee">Bad service of employee</option>
            <option value="Employee did not fix my problem properly">Employee did not fix my problem
                properly</option>
        </select>
        <label for="orderId">Order number</label><span class="required">*</span>
        <input type="text" id="orderId" name="orderid"></input>

        <!--changed part-->

        <!--Rate Worker-->
        <div class="rating-section">
            <label for="rate-worker">Give a rating</label><span class="required">*</span>
            <input name="rating" type="range" min="1" max="5" value="1" class="rate-bot"
                id="customer_rating" required>
            <p style="margin-bottom: 13px;color: red;font-weight: 700;">You Rated : <span
                    id="rated"></span></p>
        </div>
        <!--Rate Worker-->

        <label for="message">Describe your complain elaborately</label><span
            class="required">*</span>
        <textarea maxlength="200" id="address" name="describe" style="height:80px"
            placeholder="Please describe in between 200 characters"></textarea>
        <!-- <label for="address">Your Address</label><span class="required">*</span>
        <textarea id="address" name="address" style="height:60px"></textarea> -->

        <!--changed part-->



        <button class="btn_sub" style="resize:none;color: white;background-color: goldenrod;" type="submit" name="submit"
            <?php echo $css ?>>Submit</button>
    </form>
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
    <script src="ComplaintRating.js"></script>
    
</body>

</html>