<?php
session_start();
if (!isset($_SESSION['eID'])) {
    header("location:./employee login.php");
}

$se_id = $_SESSION['eID'];

require("../../Inc/function.php");

$query = "SELECT * FROM employee WHERE id = $se_id";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $number = $data['number'];
    $email = $data['email'];
    $company = $data['company'];
    $type = $data['type'];
    $gender = $data['gender'];
    $address = $data['address'];
}

if (isset($_POST['submit'])) {
    $company = $_POST['company_name'];
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $query = "UPDATE employee SET company = '$company', type = '$type', gender = '$gender', address = '$address'
                WHERE id = $se_id  ";
    mysqli_query($connect, $query);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS SCRIPTS/employee_panel/employeeProfiledesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/workers.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Employee Profile</title>
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
            <li><a href="employeeWorkNotifications.html"><img src="../../ICONS/bell.png" alt="notifications"> &nbsp;
                    Working
                    Notification</a></li>
            <li><a href="employeeWorkinprogress.html"><img src="../../ICONS/workon.png" alt="notifications"> &nbsp; Work
                    In-progress</a></li>
            <li><a href="PaymentInformation.html"><img src="../../ICONS/paymentmethod.png" alt="notifications"> &nbsp;
                    Payment
                    Information</a></li>
            <li><a href="workingHistory.html"><img src="../../ICONS/workhistorydocument.png" alt="notifications"> &nbsp;
                    Working
                    History</a></li>
            <!--<li><a href="#" ><img src="messageIncome.png" alt="notifications" > &nbsp; Incoming-Messages</a></li>-->
            <li><a href="#"><img src="../../ICONS/settings.png" alt="settings">&nbsp; Settings</a></li>
            <li><a href="employeePrivacy&Policy.html"><img src="../../ICONS/privacy-policy.png" alt="policy">&nbsp;
                    Privacy &
                    Policy</a></li>
            <li><a href="employeeHelp.html"><img src="../../ICONS/help.png" alt="helpme">&nbsp; Help</a></li>
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
                        <img src="../../ICONS/workerp.png" alt="worker">
                    </div>
                </div>
            </div>
        </div>
        <div class="description">
            <h2>Worker Profile</h2>
        </div>
        <!--form-->
        <div class="profileform">
            <form method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                <label for="phonenumber">Phone Number</label>
                <input type="text" id="phonenumber" name="number" value="<?php echo $number; ?>">
                <label for="company-name">Company-name</label>
                <input type="text" id="company-name" name="company_name" style="height:50px"
                    value="<?php echo $company; ?>"></input>
                <!--<select id=" company-name" name="company-name">
                    <option value="50">None</option>
                    <option value="51">Stark Industries</option>
                    <option value="52">Pran</option>
                    <option value="53">RFL</option>
                    <option value="54">Wayne Enterprise</option>
                    </select>-->
                <!--employee-type selection-->
                <label for="employee-type">Employee-Type -* </label>
                <select id="employee-type" name="type" value="<?php echo $type; ?>" required>
                    <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                    <option value="Electrician">Electrician</option>
                    <option value="AC Repairer">AC Repairer</option>
                    <option value="Refrigerator Repairer">Refrigerator Repairer</option>
                    <option value="Washing Machine repairer">Washing Machine repairer</option>
                    <option value="Television Repairer">Television Repairer</option>
                    <option value="Oven Repairer">Oven Repairer</option>
                    <option value="Carpenter">Carpenter</option>
                    <option value="Painter">Painter</option>
                    <option value="Plumber">Plumber</option>
                    <option value="Stove Repairer">Stove Repairer</option>
                    <option value="Elevator Repairer">Elevator Repairer</option>
                    <option value="Glass cleaner">Glass cleaner</option>
                    <option value="Steel Bar Reinforcers">Steel Bar Reinforcers</option>
                    <option value="Cement Masons">Cement Masons</option>
                    <option value="Concrete finishers">Concrete finishers</option>
                    <option value="Steel Bar Cutters">Steel Bar Cutters</option>
                    <option value="Drillers">Drillers</option>
                    <option value="Water Pipe-line Fixers">Water Pipe-line Fixers</option>
                    <option value="Piling Workers">Piling Workers</option>
                    <option value="Elevator Constructor">Elevator Constructor</option>
                    <option value="Construction-site Cleaner">Construction-site Cleaner</option>
                    <option value="Road-site Garbage Cleaner">Road-site Garbage Cleaner</option>
                    <option value="Sewerage Cleaner">Sewerage Cleaner</option>
                    <option value="Parking-Garage Cleaner">Parking-Garage Cleaner</option>
                </select>
                <!--gender of employee-->
                <label for="gender">Gender</label>
                <select id="Gender" name="gender" value="<?php echo $gender; ?>" required>
                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="address">Your Address (District)</label>
                <input type="text" id="address" name="address" style="height:50px"
                    value="<?php echo $address; ?>"></input>
                <!--submitted button-->
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
</body>

</html>