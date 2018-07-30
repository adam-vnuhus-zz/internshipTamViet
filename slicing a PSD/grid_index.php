<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
			<div id="slideshow">
				<img src="img/slideshow.png">
			</div>
			
			<?php include('partials/grid_benefit.php') ?>

			<div class="category1">
				<div class="center">
					<div class="nav clearfix">
						<button class="left next">
							<i class="fas fa-angle-left"></i>
						</button>

						<button class="tablink text18 white opensans" onclick="openTab('featured', this, 'white')" id="defaultOpen">Featured</button>
						<button class="tablink text18 white opensans" onclick="openTab('new_item', this, 'white')">New Item</button>
						<button class="tablink text18 white opensans" onclick="openTab('top_seller', this, 'white')">Top Seller</button>
						<button class="tablink text18 white opensans" onclick="openTab('top_ratting', this, 'white')">Top Ratting</button>

						<button class="right next">
							<i class="fas fa-angle-right"></i>
						</button>
					</div>

					<div id="featured" class="product_idx">
						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart
								</button>
								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>
								</button>
							</div>

						</div>

						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col right" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>
					</div>

					<div id="new_item" class="product_idx">
						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd2.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart
								</button>
								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd2.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col right" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd2.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>
					</div>

					<img src="img/index_banner.png" style="width: 100%; margin-top: 80px;">

				</div>
			</div>

			<div id="getupdate">
				<div>
					<input type="text" name="email" placeholder="Type your email">
					<button class="opensans text24 green">Let's go!</button>
				</div>
				
			</div>	

			<div class="category1">
				<div class="center">
					<div class="nav clearfix">
						<button class="left next">
							<i class="fas fa-angle-left"></i>
						</button>

						<button class="tablink text18 green opensans">Laptop</button>
						

						<button class="right next">
							<i class="fas fa-angle-right"></i>
						</button>
					</div>

					<div class="product_idx clearfix">
						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col right" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						
					</div>



					<div class="nav clearfix" style="margin-top: 8.5%;"s>
						<button class="left next">
							<i class="fas fa-angle-left"></i>
						</button>

						<button class="tablink text18 green opensans">Desktop</button>
						

						<button class="right next">
							<i class="fas fa-angle-right"></i>
						</button>
					</div>

					<div class="product_idx clearfix">
						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col left" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						<div class="products three_col right" onmouseover="hoverFn(this)" onmouseout="outFn(this)">
							<img src="img/prd.png">
							<p class="name text16 opensans green">Smart Phone Primo VI</p> <br>
							<p class="price opensans text18"><b>$10299</b></p>
							<div class="hover">
								<button class=" cart text18 green opensans left" >
									<i class="fas fa-shopping-cart"></i>
									Add to cart

								</button>

								<button class="button text18 grey">
									<i class="fas fa-edit"></i>
								</button>
								<button class="button text18 grey">
									<i class="fas fa-sync"></i>

								</button>
							</div>

						</div>

						
					</div>

					

				</div>	
			</div>	


			<?php include('partials/grid_brand.php') ?>

		</div>

		<?php include('partials/grid_footer.php') ?>

	</div>
</body>
</html>