<?php

require("../../Inc/function.php");
session_start();
if (!isset($_SESSION['uID'])) {
    header("location:userLogin.php");
}

$se_uid = $_SESSION['uID'];

$query = "SELECT * FROM user WHERE id = $se_uid";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $number = $data['number'];
    $email = $data['email'];
    $address = $data['address'];
}

if (isset($_POST['submit'])) {

    $address = $_POST['address'];

    $query = "UPDATE user SET address = '$address' WHERE id = $se_uid  ";
    mysqli_query($connect, $query);
}

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    	<link rel="shortcut icon" type="image/x-icon" href="../../ICONS/worker.png">
    	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../../CSS SCRIPTS/user_panel/UrProfileDesign.css">
	</head>


	<body>
		<div class="main">

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="../../UI-UX Designs/b000.webp" height="500px" width="600px" alt="">
				</div>
				<form method="POST">
					<h3 style="font-size: 30px;color: brown;">My Profile </h3>
					<div class="form-row">
						<input type="text" id="name" name="name"  class="form-control" placeholder="Enter your Name"  value="<?php echo $name; ?>">
						<input type="text" id="email" name="email" class="form-control" placeholder="Enter your Mail" value="<?php echo $email; ?>">
					</div>
					<div class="form-row">
						<input type="text" id="email" name="number" class="form-control"  placeholder="Mobile Number" value="<?php echo $number; ?>">
						
					</div>
					<textarea  id="address" name="address" placeholder="Your Present Address"  class="form-control"  style="height: 130px;resize: none;" ><?php echo $address; ?></textarea>
				
						<div class="form-row">
							<button type="submit" name="submit" value="Submit">Submit
								<!-- <i class="zmdi zmdi-long-arrow-right"></i> -->
							</button>
							<a href="index.php" style="color: white;"> <button type="submit" name="submit" value="Submit">Go Back</a>
								<!-- <i class="zmdi zmdi-long-arrow-right"></i> -->
							</button>
							
						</div>
				
				
					
				</form>
				
			</div>
		</div>
	</div>

	</body>
</html>