<div id="header">
			<div class="center">

				<div class="left">
					<a href="grid_index.php" class="bottom_radius text14" style="background-color: #ffffff; color: #709b1d;">
						<i class="fas fa-home"></i>
						Home
					</a>

					<a href="grid_contact.php" class="text14">
						<i class="fas fa-user"></i>
						My Account
					</a>

					<a href="#" class="text14">
						<i class="fas fa-shopping-cart"></i>
						Shopping Cart
					</a>

					<a href="grid_checkout.php" class="text14">
						<i class="fas fa-check"></i>
						Checkout
					</a>
				</div>

				<div class="right">
					<button class="topright bottom_radius text14 opensans">
						<img src="img/england.png">
						English
						<i class="fas fa-chevron-down"></i>
						<div id="lang_drop" class="drop_down bottom_radius">
							<a href="#">
								Vietnamese
							</a>
							<a href="#">
								Catalunya
							</a>
						</div>
					</button>

					<button class="topright bottom_radius text14 opensans">
						<i class="fas fa-dollar-sign"></i>
						Doller
						<i class="fas fa-chevron-down"></i>
						<div id="currency_drop" class="drop_down bottom_radius">
							<a href="#">
								VND
							</a>
							<a href="#">
								Euro
							</a>
						</div>
					</button>
				</div>

			</div>

			

		</div>

		<div id="header1">
			<div id="logo" class="center clearfix">
				<div class="left">
					<b class="green text38 left opensans">LO</b>
					<p class="text38 left opensans">GO</p>
				</div>

				<div class="right" style="width: 55.53%;">
					<!-- <img src="img/notifi.png" class="right" style="margin-left: 30px; margin-right: 30px; width: 20
					%"> -->
					<button id="cart_btn" class="dd_btn right white text24" onclick="drop_downFn3();">
						<!-- it's an error when click on the icon on the button, this code only run when click the edges of button -->
						<i class="fas fa-shopping-cart" onclick="drop_downFn3();"></i>
						<p class="number text12 white opensans">03</p>
						<div id="quick_cart" class="cart_dd" style="border-top: 2px solid rgb(112, 155, 29); display: none;">
							<span class="tip tip-up"></span>
							<p class="title_dd text12 opensans grey">
								Showing 2 of 2 items added
							</p>
							<div class="list_dd clearfix">
								<img src="img/quick-cart.png" class="left">
								<div class="desc_dd left">
									<p class="text14 black opensans">
										BEAUTIFUL CROAD
									</p>
									<p class="text12 opensans grey left">
										Size: One size<br>Quantity: 01
									</p>

								</div>

								<div class="price_dd right">
									<p class="opensans text14 green">
										$30.00 <br>
										<i class="fas fa-times-circle"></i>
									</p>

								</div>

							</div>

							<div class="list_dd clearfix">
								<img src="img/quick-cart.png" class="left">
								<div class="desc_dd left">
									<p class="text14 black opensans">
										DRESS $ T-SHIRT
									</p>
									<p class="text12 opensans grey left">
										Size: One size<br>Quantity: 01
									</p>

								</div>

								<div class="price_dd right">
									<p class="opensans text14 green">
										$30.00 <br>
										<i class="fas fa-times-circle"></i>
									</p>
								</div>
							</div>

							<div class="total_dd clearfix">
								<p class="text14 opensans grey left">Total excluding delivery: </p>
								<p class="text14 opensans green right">$60.00</p>
							</div>

							<div class="button_dd clearfix">
								
								<a href="#" class="opensans text12 white left">View Cart</a>
								<a href="#" class="opensans text12 white right">Continue To Checkout</a>
							</div>

						</div>
					</button>

					

					<button id="wish_btn" class="dd_btn right white text24" onclick="drop_downFn4()";>
						<i class="fas fa-edit"></i>
						<p class="number text12 white opensans">02</p>
						<div id="wish_list" class="cart_dd" style="border-top: 2px solid rgb(112, 155, 29); display: none;">
							<span class="tip tip-up"></span>
							<p class="title_dd text12 opensans grey">
								Showing 2 of 2 items added
							</p>
							<div class="list_dd clearfix">
								<img src="img/quick-cart.png" class="left">
								<div class="desc_dd left">
									<p class="text14 black opensans">
										BEAUTIFUL CROAD
									</p>
									<p class="text12 opensans grey left">
										Size: One size<br>Quantity: 01
									</p>

								</div>

								<div class="price_dd right">
									<p class="opensans text14 green">
										$30.00 <br>
										<i class="fas fa-times-circle"></i>
									</p>

								</div>

							</div>

							<div class="list_dd clearfix">
								<img src="img/quick-cart.png" class="left">
								<div class="desc_dd left">
									<p class="text14 black opensans">
										DRESS $ T-SHIRT
									</p>
									<p class="text12 opensans grey left">
										Size: One size<br>Quantity: 01
									</p>

								</div>

								<div class="price_dd right">
									<p class="opensans text14 green">
										$30.00 <br>
										<i class="fas fa-times-circle"></i>
									</p>
								</div>
							</div>

							<div class="list_dd clearfix">
								<img src="img/quick-cart.png" class="left">
								<div class="desc_dd left">
									<p class="text14 black opensans">
										DRESS $ T-SHIRT
									</p>
									<p class="text12 opensans grey left">
										Size: One size<br>Quantity: 01
									</p>

								</div>

								<div class="price_dd right">
									<p class="opensans text14 green">
										$30.00 <br>
										<i class="fas fa-times-circle"></i>
									</p>
								</div>
							</div>

							<div class="total_dd clearfix">
								<p class="text14 opensans grey left">Total excluding delivery: </p>
								<p class="text14 opensans green right">$90.00</p>
							</div>

							<div class="button_dd clearfix">
								
								
								<a href="#" class="opensans text12 white" style="margin: auto;">Continue To Cart</a>
							</div>
						</div>
					</button>
					

					<a href="grid_signup.php"><p class="green text14 right opensans">CREATE AN ACCOUNT</p></a>
					<p class="text14 right opensans">or </p>
					<a href="grid_login.php"><p class="green text14 right opensans">LOG IN </p></a>
				</div>
			</div>

			<div id="menu" class="clearfix">
				<div class="center">
					<div id="menu1">
						<a href="#" class="opensans left green text14">SMART PHONE</a>
						<a href="grid_desktop.php" class="opensans left green text14
						">DESKTOP</a>
						<a href="#" class="opensans left green text14">LAPTOP</a>
						<a href="#" class="opensans left green text14">ACCESSORIES</a>
						<a href="#" class="opensans left green text14">NETWORKING</a>
						<a href="#" class="opensans left green text14">SOFTWARE</a>
					</div>
					
					<div id="search" class="right">
						<input type="text" name="search" class="left" placeholder="Search Your Items...">
						<a href="#" class="left text20 white">
							<i class="fas fa-search"></i>
						</a>
					</div>
					
				</div>
			</div>

		</div>