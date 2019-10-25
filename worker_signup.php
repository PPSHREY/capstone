<?php include('server.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Workforce Alliance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/WORKFORCE.JPEG.png"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>

</head>
    
<body>
    
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="signup.php">
                    <?php include('error.php'); ?>
					<span class="login100-form-title p-b-26" style= "font-family: 'Creepster';font-size: 50px; color:#46c294; font-weight: 10pt">
						Sign Up
					</span>
                    <div align="center">
					<img height="200dp" width="200dp" src="images/icons/WORKFORCE.JPEG.png">
                        </div>
					<div class="wrap-input100 validate-input" data-validate = "Enter First Name">
						<input class="input100" type="text" name="first_name">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>
                    	<div class="wrap-input100 validate-input" data-validate = "Enter Last Name">
						<input class="input100" type="text" name="last_name">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter User Name">
						<input class="input100" type="text" name="username" pattern="[a-zA-Z0-9]+">
						<span class="focus-input100" data-placeholder="User Name"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter Valid E-mail address">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="E-mail Address"></span>
					</div>
                    
                    <div class="input100" >
                        Select Your Expertisement 	</div>
						<select style="min-width: 280px">
                                <option value="Carpenter">Carpenter</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Nail Artist">Nail Artist</option>
                                <option value="Hair Artist">Hair Artist</option>
                        </select> 
                    <br><br>
				
            
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                    	<div class="wrap-input100 validate-input" data-validate="Confirm password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="cnfpassword">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								SIGN UP
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
    
    

</body>
</html>