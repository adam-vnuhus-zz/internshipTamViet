<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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

		<!-- header -->
		<?php include('partials/grid_header.php') ?>

		<!-- content -->
		<div id="content" class="clearfix">
			<div class="center">
				<div id="path" class="opensans text14 white">
					Home / Desktop / Contact Information
				</div>

				<!-- info -->
				<?php include('partials/grid_info.php') ?>

				<!-- contact -->
				<div id="contact_content" class="left">
					<p class="opensans text20 black">Contact Information</p>
					<hr>
					<p class="opensans text14 black">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>

					<form>
						<div class="input left">
							<input type="text" name="name" placeholder="Name">
						</div>
						<div class="input right">
							<input type="text" name="email" placeholder="Email">
						</div>
						<textarea rows="10" placeholder="Type Your Message">
						</textarea>

						<button type="button">
							<p class="opensans text20 white">SEND</p>
						</button>

					</form>

				</div>
			
			</div>

			<?php include('partials/grid_benefit_brand.php') ?>	

		</div>

		<!-- footer -->
		<?php include('partials/grid_footer.php') ?>


	</div>
</body>
</html>