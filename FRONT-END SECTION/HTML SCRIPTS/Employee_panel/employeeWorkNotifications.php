<?php
require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

$e_id = $_SESSION['eID'];
$shift = '';
$u_area = '';


//updatestatus func


if (isset($_POST['search'])) {
    $shift = $_POST['shift'];
    $u_area = $_POST['working_area'];

    if ($shift == '' && $u_area == '') {
        $query = "SELECT * FROM orderlist WHERE e_id = $e_id";
        $result = mysqli_query($connect, $query);
        updateStatus($result, $connect);
        $query = "SELECT * FROM orderlist WHERE e_id = $e_id";
        $result = mysqli_query($connect, $query);
    } else {
        $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND shift = '$shift' AND u_thana = '$u_area' ";
        $result = mysqli_query($connect, $query);
        updateStatus($result, $connect);
        $query = "SELECT * FROM orderlist WHERE e_id = $e_id AND shift = '$shift' AND u_thana = '$u_area' ";
        $result = mysqli_query($connect, $query);
    }
} else {
    $query = "SELECT * FROM orderlist WHERE e_id = $e_id";
    $result = mysqli_query($connect, $query);
    updateStatus($result, $connect);
    $query = "SELECT * FROM orderlist WHERE e_id = $e_id";
    $result = mysqli_query($connect, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeeWorkNotificationDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Working Notifications</title>
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
            <li><a href="workingHistory.php"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li>
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <!--<li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>-->
            <li><a href="employeePrivacy&Policy.php"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.php"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
            <li><a href="../../Inc/e_logout.php"><img src="../../ICONS/logou.png" alt="logmeout">&nbsp; Log out</a></li>
        </ul>
    </div>
    <!--upper bar-->
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="../../ICONS/search.png" alt=""></button>
                </div>
                <div class="user">
                    <!--<a href="#" class="btn">Log Out</a>-->
                    <div class="img-case">
                        <!--<img src="../../ICONS/worknotifications.png" alt="worknotifications">-->
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <h2>Working Notifications</h2>
        </div>
        <!--profile-icon-->
        <div class="Description">
            <!--working-criteria-for-employee-->
            <div class="working-criteria-form--of-employee">
                <form method="POST">
                    <label for="working-hour">Choose shift:</label><img src="../../ICONS/clock1.png"
                        style="margin-left: 3px;">
                    <select id="working-hour" name="shift">
                        <option value='<?php echo $shift ?>'><?php echo $shift ?></option>
                        <option value="9AM - 12PM">9AM - 12PM</option>
                        <option value="3PM - 6PM">3PM - 6PM</option>
                    </select>
                    <label for="working-area">Choose working-area:</label><img src="../../ICONS/location4.png"
                        style="margin-left: 5px;">
                    <select id="working-aarea" name="working_area">
                        <option value='<?php echo $u_area ?>'><?php echo $u_area ?></option>
                        <option value="Azimpur">Azimpur</option>
                        <option value="Badda">Badda</option>
                        <option value="Banani">Banani</option>
                        <option value="Bashundhara">Bashundhara</option>
                        <option value="Cantonment">Cantonment</option>
                        <option value="ChaowkBazar">ChaowkBazar</option>
                        <option value="Demra">Demra</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Hazaribagh">Hazaribagh</option>
                        <option value="Jatrabari">Jatrabari</option>
                        <option value="Kadamtali">Kadamtali</option>
                        <option value="Kafrul">Kafrul</option>
                        <option value="Kalabagan">Kalabagan</option>
                        <option value="Khilgaon">Khilgaon</option>
                        <option value="Khilkhet">Khilkhet</option>
                        <option value="Lalbagh">Lalbagh</option>
                        <option value="Malibagh">Malibagh</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Mohammadpur">Mohammadpur</option>
                        <option value="Motijheel">Motijheel</option>
                        <option value="Mughda">Mughda</option>
                        <option value="Paltan">Paltan</option>
                        <option value="Panthapath">Panthapath</option>
                        <option value="Ramna">Ramna</option>
                        <option value="Rampura">Rampura</option>
                        <option value="Shabujbagh">Shabujbagh</option>
                        <option value="Shahjahanpur">Shahjahanpur</option>
                        <option value="Shahbagh">Shahbagh</option>
                        <option value="Tejgaon">Tejgaon</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Wari">Wari</option>
                        <input type="submit" name="search" value=" Search">
                    </select>
                </form>
            </div>
            <div class="headlineofrecords">
                <h2>Searched Records</h2>
            </div>
            <!--record-table-->
            <div class="records-Of-Working-Notifications">
                <table>
                    <tr>
                        <th>Customer name</th>
                        <th>Contact</th>
                        <th>Area</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Shift</th>
                        <th>Total Payment</th>
                        <th>Working State</th>
                    </tr>




                    <?php


                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($list = mysqli_fetch_assoc($result)) {
                            $o_id = $list['id'];
                            $u_name = $list['u_name'];
                            $u_number = $list['u_number'];
                            $u_area = $list['u_thana'];
                            $u_address = $list['u_address'];
                            $date = $list['date'];
                            $payment = $list['payment'];
                            $shift = $list['shift'];
                            $status = $list['status'];
                            echo "
                            <tr>
                                <td>$u_name</td>
                                <td>$u_number</td>
                                <td>$u_area</td>
                                <td>$u_address</td>
                                <td>$date</td>
                                <td>$shift</td>
                                <td>$payment</td>
                                <td>$status</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "No Notifications to show";
                    }

                    ?>

                    <!--<tr>
                        <td>Ahsan Habib</td>
                        <td>0189634766</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>Not started</td>
                    </tr>
                    <tr>
                        <td>Md Karim</td>
                        <td>0189634700</td>
                        <td>10/22, Mirpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>Not started</td>
                    </tr>
                    <tr>
                        <td>Md Rahim</td>
                        <td>0189634733</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Shahbudddin</td>
                        <td>0189634755</td>
                        <td>120/2, Mohakhali, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Mondol Chowdhury</td>
                        <td>0189634727</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>In-progress</td>
                    </tr>
                    <tr>
                        <td>Sakibul Esraq</td>
                        <td>0159634724</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>10:00am</td>
                        <td>5 hour</td>
                        <td>1099</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Muhammed Abir</td>
                        <td>0189634720</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>7:00pm</td>
                        <td>7 hour</td>
                        <td>1999</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Alam Haque</td>
                        <td>0189634721</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Karimullah</td>
                        <td>0189634722</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Rafiqul Islam</td>
                        <td>0189634725</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Mantu Sarkar</td>
                        <td>0189634726</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Samuel Gomez</td>
                        <td>0189634720</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Ahsanullah</td>
                        <td>0189634728</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Safayet Haque</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Prangon Mollah</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Shahbuddin</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Md Shadman Karim</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Sohel Bhuyian</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Sakibul Alam</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Talimul Bari </td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Kowshik Chakraborty</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>5 hour</td>
                        <td>1299</td>
                        <td>End</td>
                    </tr>
                    <tr>
                        <td>Raghav Pal</td>
                        <td>0189634729</td>
                        <td>120/22, Shahjanpur, Dhaka</td>
                        <td>3:00pm</td>
                        <td>9 hour</td>
                        <td>7299</td>
                        <td>End</td>
                    </tr>-->
                </table>
            </div>
</body>

</html>