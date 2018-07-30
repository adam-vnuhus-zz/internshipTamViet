<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

		<div id="content" class="clearfix">
			<div class="center">

				<div id="img_login" class="left">
					<img src="img/download.png">
				</div>

				<div id="login" style="width: 50%;margin: auto;text-align: center;padding: 50px;float: right;">
					<p class="text38 opensans black">
						<b>Member Login</b>
					</p>
					<input type="text" name="email" placeholder="Email" class="text18 opensans" width="100"> <br>
					<input type="text" name="email" placeholder="Password" class="text18 opensans"> <br>
					<button class="text20 opensans white">LOGIN</button>
					<p class="grey text14 opensans">Forgot <a href="#" class="black">Username / Password?</a></p> <br>
					<p class="grey text14 opensans">Or <a href="grid_signup.php" class="black">Sign Up</a></p>
				</div>
			</div>
		</div>	

		<?php include('partials/grid_footer.php') ?>
	</div>
</body>
</html>