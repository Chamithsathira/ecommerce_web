

<!DOCTYPE html>
<html>
<head>
	<title>Online Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main11.css">
	
</head>
<body>
	<div class="main">
		<div class="topbar"></div>

		<div class="social_icon">
			<div class="container">
				<div class="icon">
					<a href="www.facebook.com"><img src="images/fb.png"></a>
					<a href="www.gplus.com"><img src="images/gplus.png"></a>
					<a href="www.twitter.com"><img src="images/tw.png"></a>
					<a href="www.youtube.com"><img src="images/yt.png"></a>
					
				</div>
				<div class="header_right">
					<div class="login ">
						<a href="login.php">Login  /  </a> 
						<a href="register.php">Register</a>
					</div>

					<a href="#"><div class="cart_btn">
						<img src="images/crt.png">
						<span>Cart</span>
					</div></a>
				</div>

			</div>
		</div>

		<div class="header">
			<div class="container">
				<div class="logo">
					<img src="images/logo.png">
				</div>
				<div class="navbar">
					<a href="#">Home</a>
					<a href="#">About Us</a>
					<a href="login.php">Login</a>
					<a href="register.php">Register</a>
					<a href="#">Contact Us </a>
				</div>
			</div>
		</div>
		<div>
			<?php if (isset($_GET['logout'])) {
				echo "logged out";
			} ?>

		</div>
		<br>
		<div class="slider">
			<div class="container">
				<div class="slideshow">
					<img src="images/slide1.jpg">
					<img src="images/slide2.jpg">
					<img src="images/slide3.jpg">
					<img src="images/slide4.jpg">
				</div>
				<div class="center">
					<a href="#" id="next"><img src="images/right.png"></a>
					<a href="#" id="prev"><img src="images/left.png"></a>
				</div>
			</div>
		</div>

	<div class="welcome_text">
		<div class="container">
			<h1>WELCOME TO <span>TECHBIT</span> CHECK OUR LATEST SMART PHONES</h1>
		</div>
	</div>

	<div class="event_section">
		<div class="container">
			<div class="event_one">
				<div class="image_a"><h3>CHECK LATEST APPLE PRODUCTS</h3>
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</P></div>
				<div class="middle">
					<div class="text_a">See More</div>
				</div>
			</div>

			<div class="event_two">
				<div class="image_a"><h3>CHECK LATEST SMART WATCHES</h3>
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</P></div>
				<div class="middle">
					<div class="text_a">See More</div>
				</div>
			</div>

			<div class="event_three">
				<div class="image_a"><h3>CHECK LATEST ANDROID PHONES</h3>
				<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</P></div>
				<div class="middle">
					<div class="text_a">See More</div>
				</div>
			</div>
		</div>
	</div>

	<div class="product">
		<div class="container">
			<div class="product_section_title">
				LATEST ARRIVALS IN TECHBIT
			</div>


			<div class="product_one">
				<div class="product_image">
					<img src="images/product/s10.jpg">
					<div class="overlay">
						<img src="images/product/p1.jpg">
					</div>
				</div>
				<div class="product_text">
					<h4>Samsung Galaxy S10</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_two">
				<div class="product_image">
					<img src="images/product/s10+.jpg">
					<div class="overlay">
						<img src="images/product/p2.jpg">
					</div>
				</div>
				<div class="product_text">
					<h4>Samsung Galaxy S10 plus</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.188,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_three">
				<div class="product_image">
					<img src="images/product/xs_max.jpg">
					<div class="overlay">
						<img src="images/product/p3.jpg">
					</div>

				</div>
				<div class="product_text">
					<h4>Apple iphone XS max</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_four">
				<div class="product_image">
					<img src="images/product/xr.jpg">

				</div>
				<div class="product_text">
					<h4>Apple iphone XR</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_five">
				<div class="product_image">
					<img src="images/product/note9.jpg">
				</div>
				<div class="product_text">
					<h4>Samsung Galaxy NOTE 9</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_six">
				<div class="product_image">
					<img src="images/product/a9.jpg">
				</div>
				<div class="product_text">
					<h4>Samsung Galaxy A9</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_seven">
				<div class="product_image">
					<img src="images/product/xs.jpg">
				</div>
				<div class="product_text">
					<h4>Apple iphone XS</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_eight">
				<div class="product_image">
					<img src="images/product/6t.jpg">
				</div>
				<div class="product_text">
					<h4>One Plus 6t</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_nine">
				<div class="product_image">
					<img src="images/product/pixel.jpg">
				</div>
				<div class="product_text">
					<h4>Google Pixel 3XL</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>

			<div class="product_ten">
				<div class="product_image">
					<img src="images/product/m20.jpg">
				</div>
				<div class="product_text">
					<h4>Samsung Galaxy M20</h4>
				</div>
				<div class="star_rating">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
					<img src="images/star.png">
				</div>
				<div class="product_desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut lab
				</div>
				<div class="product_price">
					<div class="price">
						Rs.170,000.00
					</div>
					<div class="button">
						<form><button type="submit" name="submit">ADD TO CART</button></form>
					</div>
				</div>
			</div>


		</div>
	</div>
		

	</div>

	<div class="footer">
	<div class="widget-footer">
		<div class="wrap-container">
			<div class="widget" style="margin-left: -80px; font-size: 17px">
				<h4>CONTACT INFORMATION </h4>
				<p>You can stay touch with us easily</p>
				<p><strong>Phone	: </strong> 012-34567893 </p>
				<p><strong>E-mail	: </strong> techbit@gmail.com</p>
			</div>


			<div class="widget" style="padding-left: 400px">
				<h4>FOLLOW US ON SOCIAL MEDIA </h4>
				<a href=""><img src="images/fb.png" alt="facebook"></a>
				<a href=""><img src="images/gplus.png" alt="Google plusk"></a>
				<a href=""><img src="images/tw.png" alt="Twitter"></a>
				<a href=""><img src="images/yt.png" alt="You Tube"></a>
			</div>
		</div>
		<div class="main-footer">
			<p> Coppyright &copy; 2019 | TECHBIT pvt(Ltd)</p>
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="javascript/jquery.cycle.all.js"></script>
	<script>
		$('.slideshow').cycle({
			next: '#next',
			prev: '#prev'
		});
	</script>

</body>
</html>