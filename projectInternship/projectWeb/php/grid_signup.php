<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<script type="text/javascript" src="js/grid_control.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/grid_responsive.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<?php include('partials/grid_header.php') ?>

		<div id="content" class="signup_ct clearfix">
			<div class="center">

				<div id="img_signup" class="left">
					<img src="img/signup-new.png">
				</div>

				<div id="login" style="width: 50%;margin: auto;text-align: center;padding: 50px;float: right;">
					<p class="text38 opensans black">
						<b>Sign Up</b>
					</p>
					<input type="text" name="first_name" placeholder="First Name" class="text18 opensans" width="50"> 
					<input type="text" name="last_name" placeholder="Last Name" class="text18 opensans" width="50"> <br>
					<input type="text" name="age" placeholder="Age" class="text18 opensans" width="100"> <br>
					<input type="text" name="email" placeholder="Email" class="text18 opensans" width="100"> <br>
					<input type="password" name="password" placeholder="Password" class="text18 opensans"> <br>
					<input type="password" name="re_passw" placeholder="Retype Password" class="text18 opensans"> <br>
					<button class="text20 opensans white">SIGN UP</button>
					
					<p class="white text14 opensans">Or <a href="grid_login.php" style="color: #d7e467;">Log in</a></p>
				</div>
			</div>
		</div>	

		<?php include('partials/grid_footer.php') ?>
	</div>
</body>
</html>