<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

if (!isset($_SESSION['hire'])) {
    header("location:index.php");
}


$msg = '';
$css = '';

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
    $o_id = $u_id . $emp_id . time();
    $date = $_POST['date'];
    $shift = $_POST['shift'];


    $query = "SELECT * FROM employee WHERE id = $emp_id";
    $result = mysqli_query($connect, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $e_data = mysqli_fetch_assoc($result);
    }
    $e_name = $e_data['name'];
    $e_number = $e_data['number'];
    $e_fee = $e_data['price'];
}




if (isset($_POST['confirm'])) {
    $o_id = $_POST['o_id'];
    $emp_id = $_GET['afdaeqeqeasfdewrt3eradr234rwefsdgreyerhrgrsgsrfwer'];
    $date = $_POST['date'];
    $shift = $_POST['shift'];


    $query = "SELECT * FROM employee WHERE id = $emp_id";
    $result = mysqli_query($connect, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $e_data = mysqli_fetch_assoc($result);
    }
    $e_name = $e_data['name'];
    $e_number = $e_data['number'];
    $e_fee = $e_data['price'];
    $e_type = $e_data['type'];
    $u_thana = $_POST['thana'];
    $u_address = $_POST['address'];
    $date = $_POST['date'];
    $shift = $_POST['shift'];
    $emp_id = $_POST['e_id'];
    $o_id = $_POST['o_id'];
    $payment = $_POST['payment'];
    $status = 'Not started';

    if (!empty($u_address)) {

        $query = "INSERT INTO orderlist (id, e_id, e_name, e_number, e_type, u_id, u_name, u_number, u_address, u_thana,
                 date, shift, payment, status) 
                VALUES ('$o_id', '$emp_id', '$e_name', '$e_number', '$e_type', '$u_id', '$u_name', '$u_number',
                         '$u_address', '$u_thana', '$date', '$shift', '$payment', '$status')";
        mysqli_query($connect, $query);
        if (isset($_SESSION['hire'])) {
            unset($_SESSION['hire']);
        }
        $msg = 'Order Placed Successfully';
        $css = "style='padding: 10px; margin-bottom: 10px; background-color: yellowgreen; color: white; width: 427px;'";
        header("location:./userOrderHistoryPage.php");
    } else {
        $msg = 'Please Enter your address !';
        $css = "style='padding: 10px; margin-bottom: 10px; background-color: #f44336; color: white; width: 427px;'";
    }
}

if (isset($_POST['cancel'])) {
    header("location:index.php");
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>vConfirm Hire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/Hireme.css">
    </head>

    <body>
        <div class="main">

        <div class="wrapper">
            <div class="inner" style="padding: 8px;">
                <div class="image-holder">
                    <img src="../../UI-UX Designs/wr.jpg" height="500px" width="700px" alt="">
                </div>
                <div <?php echo $css ?>>
                    <p><?php echo $msg ?></p>
                </div>
                <form method="POST">
                    <h3>Confirm Hire</h3>
                    <div class="form-row">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Worker Name</label>
                            <input disabled type="text" id="name" name="name" class="form-control" placeholder="Enter worker Name" value="<?php echo $e_name ?>">
                            
                        </div>
                
                    
                    </div>
                    <div class="form-row" style="margin-top: -20px;">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Worker Contact</label>
                            <input disabled type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Enter worker Name" value="<?php echo $e_number ?>">
                            
                        </div>
                
                    
                    </div>
                    <div class="form-row" style="margin-top: -20px;">  
                        <select id="upazilla" name="thana" class="form-control" style=" color: #999;" required>
                            <option value="" disabled selected>Choose Your Thana</option>
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
                            
                        </select>
        
                    </div>
                    <textarea id="address" name="address"  placeholder="Your Present Address" class="form-control" style="height: 130px;" required></textarea>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Total Payment</label>
                        <input disabled type="text" id="payment" name="payment" value="৳ <?php echo $e_fee ?>">
                        <input type='hidden' name='date' value='<?php echo $date ?>'>
                        <input type='hidden' name='shift' value='<?php echo $shift ?>'>
                        <input type='hidden' name='e_id' value='<?php echo $emp_id ?>'>
                        <input type='hidden' name='o_id' value='<?php echo $o_id ?>'>
                        <input type='hidden' name='payment' value='<?php echo $e_fee ?>'>
                    </div>
                    <div class="form-row">
                        <button type="submit" name="confirm" value=" Confirm Hire">Confirm Hire
                
                        </button>
                         <button type="submit" name="cancel" value=" Cancel">Cancel
                    
                        </button>
                        
                    </div>
                
                    
                </form>
                
            </div>
        </div>
    </div>

    
    </body>
</html>