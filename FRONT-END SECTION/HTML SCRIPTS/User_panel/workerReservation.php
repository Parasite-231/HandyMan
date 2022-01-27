<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}
$msg = '';
$css = '';
$type = $_GET['type'];
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/WR.css">
        <link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Reserve Worker</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-7 d-none d-md-flex bg-image"></div>
                <!-- The content half -->
                <div class="col-md-5 bg-light">
                    <div class="login d-flex align-items-center py-5">
                        <!-- Demo content-->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <h3 class="display-4">Worker Reservation Form</h3>
                                    <p class="text-muted mb-4"></p>
                                    <div <?php echo $css ?>>
                                        <p><?php echo $msg ?></p>
                                    </div>
                                    <form action="workerSelection.php?type='<?php echo $type ?>'" method="POST">
                                        <div class="form-group mb-3">
                                            <!-- <input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> -->
                                            <label for="Date" style="font-size: 20px; font-weight: lighter ;margin-right: 20px;">Select a Date</label>
                                            <input type="date" id="start"  name="date" value="yyyy-mm-dd" min="<?php echo newDate('0') ?>"
                                            max="<?php echo newDate('30') ?>" style="resize: none;" required>
                                      
                                            
                                        </div>
                                        <div class="form-row" style="margin-top: 20px;">  
                                            <select  id="Timeline" name="shift" class="form-control" style=" color: #999;" required>
                                                <option value="" disabled selected>Reserve a Time</option>
                                                <option value='9AM - 12PM'>9AM - 12PM</option>
                                                <option value='3PM - 6PM'>3PM - 6PM</option>
                                               
                        
                                                
                                            </select>
                            
                                        </div>
                                        <!-- <div class="form-group mb-3">
                                            <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                        </div> -->
                                        <input type='hidden' name='type' value='<?php echo $type ?>'>
                                        <button type="submit" name="hire" value="Hire" class="btn  btn-warning btn-block  mb-2 rounded-pill shadow-sm" style="height: 42px;font-size: 17px;margin-top: 20px;">Reserve Worker&nbsp;<i class='bx bxs-log-in-circle'></i></button>
                                        <a href="#" style="color: white ;font-weight: lighter;" ><button type="submit" name="back" value="Go Back" class="btn btn-info btn-block  mb-2 rounded-pill shadow-sm" style="height: 42px;font-size: 17px;">Go back&nbsp;<i class='bx bxs-log-out-circle'></i></button></a>
    
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </body>
</html>