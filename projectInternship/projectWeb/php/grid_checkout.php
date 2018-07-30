<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/grid_responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script type="text/javascript" src="js/grid_checkout.js"></script>
	<script type="text/javascript" src="js/grid_control.js"></script>
</head>
<body>
	<div class="container" ng-app="myCalApp" ng-controller= "myCtrl">
		<?php include('partials/grid_header.php') ?>
		<div id="content" class="clearfix">
			<div class="center">
				<div id="path" class="opensans text14 white">
					Home / Desktop / Checkout Information
				</div>
				<?php include('partials/grid_info.php') ?>

				<div id="checkout_content" class="left">
					<p class="title opensans text20 black">Checkout Information</p>
					<hr>
					<div class="step clearfix">
						<form>
							<p class="step_text opensans text14 black" ng-click= "clicked(1)">
								<b>STEP 1 :</b> Check Out Information
							</p>
							<div class="step_info opensans text14 black clearfix" ng-hide= "status1">
								<div class="new_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										NEW CUSTOMER
									</p>

									<p class="text14 opensans grey" style="line-height: 32px;">
										Checkout Option <br>
										<input type="radio" name="type" value="register"> REGISTER ACCOUNT<br>
	  									<input type="radio" name="type" value="guest"> GUEST ACCOUNT<br>
									</p>

									<p class="text14 opensans grey" style="line-height: 24px; margin-bottom: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

									<button type="button">
										<p class="opensans text20 white">CONTINUE</p>
									</button>
									
								</div>

								<div class="re_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										RETURNING CUSTOMER
									</p>

									<p class= "text14 opensans grey" style="line-height: 32px; margin-bottom: 38px;">I'm a returning customer <br>
										<label>Email</label>
										<input type="text" name="email"> <br>
										<label>Password</label>
										<input type="text" name="password"> <br>

										<a href="#" class="blue">Forgot your password ?</a>
									</p>

									<button type="button">
										<p class="opensans text20 white">LOG IN</p>
									</button>

								</div>
							</div>
						</form>
						

					</div>

					<div class="step clearfix">
						<form>
							<p class="step_text opensans text14 black" ng-click= "clicked(2)">
								<b>STEP 2 :</b> Billing Information
							</p>

							<div class="step_info opensans text14 black clearfix" ng-hide= "status2">
								<div class="new_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										NEW CUSTOMER
									</p>

									<p class="text14 opensans grey" style="line-height: 32px;">
										Checkout Option <br>
										<input type="radio" name="type" value="register"> REGISTER ACCOUNT<br>
	  									<input type="radio" name="type" value="guest"> GUEST ACCOUNT<br>
									</p>

									<p class="text14 opensans grey" style="line-height: 24px; margin-bottom: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

									<button type="button">
										<p class="opensans text20 white">CONTINUE</p>
									</button>
									
								</div>

								<div class="re_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										RETURNING CUSTOMER
									</p>

									<p class= "text14 opensans grey" style="line-height: 32px; margin-bottom: 38px;">I'm a returning customer <br>
										<label>Email</label>
										<input type="text" name="email"> <br>
										<label>Password</label>
										<input type="text" name="password"> <br>

										<a href="#" class="blue">Forgot your password ?</a>
									</p>

									<button type="button">
										<p class="opensans text20 white">LOG IN</p>
									</button>

								</div>
							</div>
							
						</form>
					</div>

					<div class="step clearfix">
						<form>
							<p class="step_text opensans text14 black" ng-click= "clicked(3)">
								<b>STEP 3 :</b> Delivery Information
							</p>
							<div class="step_info opensans text14 black clearfix" ng-hide= "status3">
								<div class="new_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										NEW CUSTOMER
									</p>

									<p class="text14 opensans grey" style="line-height: 32px;">
										Checkout Option <br>
										<input type="radio" name="type" value="register"> REGISTER ACCOUNT<br>
	  									<input type="radio" name="type" value="guest"> GUEST ACCOUNT<br>
									</p>

									<p class="text14 opensans grey" style="line-height: 24px; margin-bottom: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

									<button type="button">
										<p class="opensans text20 white">CONTINUE</p>
									</button>
									
								</div>

								<div class="re_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										RETURNING CUSTOMER
									</p>

									<p class= "text14 opensans grey" style="line-height: 32px; margin-bottom: 38px;">I'm a returning customer <br>
										<label>Email</label>
										<input type="text" name="email"> <br>
										<label>Password</label>
										<input type="text" name="password"> <br>

										<a href="#" class="blue">Forgot your password ?</a>
									</p>

									<button type="button">
										<p class="opensans text20 white">LOG IN</p>
									</button>

								</div>
							</div>
							
						</form>
					</div>

					<div class="step clearfix">
						<form>
							<p class="step_text opensans text14 black" ng-click= "clicked(4)">
								<b>STEP 4 :</b> Payment Methods
							</p>
							<div class="step_info opensans text14 black clearfix" ng-hide= "status4">
								<div class="new_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										NEW CUSTOMER
									</p>

									<p class="text14 opensans grey" style="line-height: 32px;">
										Checkout Option <br>
										<input type="radio" name="type" value="register"> REGISTER ACCOUNT<br>
	  									<input type="radio" name="type" value="guest"> GUEST ACCOUNT<br>
									</p>

									<p class="text14 opensans grey" style="line-height: 24px; margin-bottom: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

									<button type="button">
										<p class="opensans text20 white">CONTINUE</p>
									</button>
									
								</div>

								<div class="re_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										RETURNING CUSTOMER
									</p>

									<p class= "text14 opensans grey" style="line-height: 32px; margin-bottom: 38px;">I'm a returning customer <br>
										<label>Email</label>
										<input type="text" name="email"> <br>
										<label>Password</label>
										<input type="text" name="password"> <br>

										<a href="#" class="blue">Forgot your password ?</a>
									</p>

									<button type="button">
										<p class="opensans text20 white">LOG IN</p>
									</button>

								</div>
							</div>
							
						</form>
					</div>

					<div class="step clearfix">
						<form>
							<p class="step_text opensans text14 black" ng-click= "clicked(5)">
								<b>STEP 5 :</b> Confirm Order
							</p>
							<div class="step_info opensans text14 black clearfix" ng-hide= "status5">
								<div class="new_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										NEW CUSTOMER
									</p>

									<p class="text14 opensans grey" style="line-height: 32px;">
										Checkout Option <br>
										<input type="radio" name="type" value="register"> REGISTER ACCOUNT<br>
	  									<input type="radio" name="type" value="guest"> GUEST ACCOUNT<br>
									</p>

									<p class="text14 opensans grey" style="line-height: 24px; margin-bottom: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

									<button type="button">
										<p class="opensans text20 white">CONTINUE</p>
									</button>
									
								</div>

								<div class="re_cus left">
									<p class="text20 opensans grey" style="line-height: 44px;">
										RETURNING CUSTOMER
									</p>

									<p class= "text14 opensans grey" style="line-height: 32px; margin-bottom: 38px;">I'm a returning customer <br>
										<label>Email</label>
										<input type="text" name="email"> <br>
										<label>Password</label>
										<input type="text" name="password"> <br>

										<a href="#" class="blue">Forgot your password ?</a>
									</p>

									<button type="button">
										<p class="opensans text20 white">LOG IN</p>
									</button>

								</div>
							</div>
							
						</form>
					</div>

				</div>

			</div>
			<?php include('partials/grid_benefit.php') ?>	
			<?php include('partials/grid_brand.php') ?>	
		</div>	

		<?php include('partials/grid_footer.php') ?>

	</div>

</body>
</html>