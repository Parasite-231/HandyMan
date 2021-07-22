<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
   header("location:userLogin.php");
}

if (!isset($_SESSION['hire'])) {
   header("location:index.php");
}


//later submission part
$u_id = $_SESSION['uID'];

$query = "SELECT name, number, address FROM user WHERE id = $u_id";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
   $userdata = mysqli_fetch_assoc($result);

   $u_name = $userdata['name'];
   $u_number = $userdata['number'];
}



if (isset($_POST['submit'])) {
   $emp_id = $_POST['id'];
   $o_id = $u_id . $emp_id;
   $date = $_POST['date'];
   $shift = $_POST['shift'];


   $query = "SELECT * FROM employee WHERE id = $emp_id";
   $result = mysqli_query($connect, $query);
   if ($result && mysqli_num_rows($result) > 0) {
      $e_data = mysqli_fetch_assoc($result);
   }
   $e_name = $e_data['name'];
   $e_number = $e_data['number'];
}



if (isset($_POST['confirm'])) {
   $u_thana = $_POST['thana'];
   $u_address = $_POST['address'];
   $date = $_POST['date'];
   $shift = $_POST['shift'];
   $emp_id = $_POST['e_id'];
   $o_id = $_POST['o_id'];


   $query = "INSERT INTO orderlist (id, e_id, u_id, u_name, u_number, u_address, u_thana, date, shift) 
   VALUES ('$o_id', '$emp_id', '$u_id', '$u_name', '$u_number', '$u_address', '$u_thana', '$date', '$shift')";
   mysqli_query($connect, $query);

   if (isset($_SESSION['hire'])) {
      unset($_SESSION['hire']);
   }
   header("location:index.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/confirmHire.css">
    <title>Confirm Hire</title>
</head>

<body>
    <header>
        <div class="main-page">
            <div class="company-logo">
                <!--<img src="hANDYman.png">-->
            </div>
            <!--<ul>
               <li class="active-mode" ><a href="#">Home</a> </li>
               <li><a href="#">Abou us</a> </li>
               <li><a href="#">Contact us</a> </li>
               <li><a href="#">Help</a> </li>
               
               </ul>-->
        </div>
        <div class="Confirm-section">
            <!--<h2>Platform Selection</h2>-->
            <div class="Confirming-form">
                <form method="POST">
                    <label for="name">Worker Name</label>
                    <img src="../../ICONS/workerprofile.png" style="float: right;">
                    <input disabled type="text" id="name" name="name" value="<?php echo $e_name ?>">
                    <!-- <label for="name">Worker Category:</label>
                  <img src="worker88.png" style="margin-left: 3px;">
                  <input type="text" id="name" name="name" > -->


                    <label for="phonenumber">Worker Contact</label>
                    <img src="../../ICONS/callme.png" style="float: right;">
                    <input disabled type="text" id="phonenumber" name="phonenumber" value="<?php echo $e_number ?>">

                    <label for="upazilla">Your Upazilla</label><span class="required">*</span>
                    <img src="../../ICONS/askmap.png" style="float: right;">
                    <select id="upazilla" name="thana">
                        <option value="Dohar Upazila">Dohar Upazila </option>
                        <option value="Keraniganj Upazila">Keraniganj Upazila</option>
                        <option value="Dhamrai Upazila ">Dhamrai Upazila </option>
                        <option value="Nawabganj Upazila">Nawabganj Upazila</option>
                        <option value="Savar Upazila">Savar Upazila</option>
                    </select>

                    <label for="address">Your Address</label><span class="required">*</span>
                    <img src="../../ICONS/asklocation.png" style="float: right;">
                    <textarea id="address" name="address" style="height:70px"
                        placeholder="Write your address..."></textarea>

                    <label for="payment">Total Payment</label>
                    <img src="../../ICONS/paymecash.png" style="float: right;">
                    <input disabled type="text" id="payment" name="payment">

                    <input type='hidden' name='date' value='<?php echo $date ?>'>
                    <input type='hidden' name='shift' value='<?php echo $shift ?>'>
                    <input type='hidden' name='e_id' value='<?php echo $emp_id ?>'>
                    <input type='hidden' name='o_id' value='<?php echo $o_id ?>'>

                    <input type="submit" name="confirm" value=" Confirm Hire">
                    <input type="submit" name="cancel" value=" Cancel">
                </form>
            </div>
        </div>
    </header>
</body>

</html>