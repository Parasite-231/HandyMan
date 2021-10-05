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


    if (preg_match("/(^(\+88|0088)?(01){1}[356789]{1}(\d){8})$/", $u_number)) {
        if (filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT * FROM orderlist WHERE u_id = $u_id AND id = $o_id AND status = 'Completed'";
            $result = mysqli_query($connect, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $query = "INSERT INTO complain(o_id, u_name, u_email, u_number, problem, description) 
                            VALUES ('$o_id', '$u_name', '$u_email', '$u_number', '$problem', '$description')";
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/contactUs.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Contact Us</title>
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
        <h1>Contact Us</h1>
        <div class="contact-company">
            <div class="contact">
                <div class="contact-type">
                    <img src="../../ICONS/locationcontactpng.png">
                </div>
                <h3>Branches</h3>
                <p class="information"></p>
                <p>
                    Banani Branch<br>
                    156 Concord Colosseum, 1st Floor, Road# 12, Kemal Ataturk Ave, Dhaka.<br>
                    Uttara Branch<br>
                    Syed Grand Center, 119, 3rd Floor, Road No: 28, Sector : 7, Uttara.<br>
                    Rangpur Branch<br>
                    Chadima Hotel Building (1st Floor), Near Payra Chottor, Khilgaon.<br>
                </p>
            </div>
            <div class="contact">
                <div class="contact-type">
                    <img src="../../ICONS/phone-company.png">
                </div>
                <h3>Phone</h3>
                <p class="information"></p>
                <p>
                    Banani Branch<br>
                    Contact: Manager<br>
                    Phone:01709995543,01709995543<br>
                    Mohakhali Branch<br>
                    Contact: Manager<br>
                    Phone:01709995543,01709995543<br>
                    Uttara Office<br>
                    Contact: Manager<br>
                    Phone:01709995543,01709995543<br>
                    Moghbazar Office<br>
                    Contact: Manager<br>
                    Phone:01709995543,01709995543<br>
                    Khilgaon Branch<br>
                    Contact: Manager<br>
                    Phone:01709995543,01709995543<br>
                </p>
            </div>
            <div class="contact">
                <div class="contact-type">
                    <img src="../../ICONS/mailcompany.png">
                </div>
                <h3>E-mail</h3>
                <p class="information"></p>
                <p>
                    Request for Help
                    Info@handymangroup.com<br>
                    All Bid Opportunities
                    estimate@handymangroup.com<br>
                    Electrical Service Calls
                    service@handymancontract.com<br>
                    Employment Opportunities
                    careers@handymancontract.com<br>
                    For Financial Help
                    finance@handymanfinance.com<br>
                </p>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-2">
            <div class="content-section">
                <div class="title">
                    <h4 id="jump">Message Us</h4>
                </div>
                <div class="content">
                    <!--<h3>HandyMan</h3>-->
                    <p>If you face any problem or disturbance with our any services of our
                        company like <br>employee-issues,management issues, service issues please
                        feel free to leave any<br> complaint message by filling up the form below. Thankyou sir for
                        being with us.
                        We<br> assure you we will give you a feedback to your complaint message as soon as it's
                        <br>possible.
                    </p>

                    <div <?php echo $css ?>>
                        <t><?php echo $msg ?></t>
                    </div>
                    <!--form-->
                    <div class="complaint-form">
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
                            <label for="message">Describe your complain elaborately</label><span
                                class="required">*</span>
                            <textarea maxlength="200" id="address" name="describe" style="height:80px"
                                placeholder="Please describe in between 200 characters"></textarea>
                            <!-- <label for="address">Your Address</label><span class="required">*</span>
                            <textarea id="address" name="address" style="height:60px"></textarea> -->

                            <button class="btn_sub" style="resize:none;" type="submit" name="submit"
                                <?php echo $css ?>>Submit</button>
                        </form>
                    </div>
                    <div class=" button">
                        <!--<a href="">Connect with us</a>-->
                    </div>
                </div>
                <!--form-->
                <!--<div class="social-media">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin"></i></a>
                  <a href=""><i class="fab fa-instagram-square"></i></a>
                  <a href=""><i class="fab fa-twitter-square"></i></a>
                  </div>-->
            </div>
            <div class="img-section">
                <img src="../../UI-UX Designs/customercare.jpg">
                <img src="../../UI-UX Designs/customer.jpg">
            </div>
        </div>
    </div>
</body>

</html>