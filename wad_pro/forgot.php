<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->

	<meta name="description" content="forgot ,password,forgot password">
	<meta name="author" content="Muhammad Tanzeel - Ur- Rehman, Muhammad Hasssan Malik">
	<meta name="keywords" content="password,reset,change password">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Home</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
    CSS
    ============================================= -->
	<link rel="stylesheet" href="css/signup.css">

	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/hexagons.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header" id="home">

	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Service</a></li>

					<li><a href="contact.php">Contact</a></li>
					<li><a href="signin.php">Sigin</a></li>
					<li><a href="signup.php">SignUp</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12 col-md-12">
				<div class="login_box">
					<img src="img/avatar.png" class="avatar">

					<h1>    Forgot Password    </h1>
					<form class="contact-form" action ="signin.php" method = post>
						<p> Username </p><br><br>
						<input type="text"  class = "form-control" pattern="^[A-Za-z0-9_]{1,20}$" title="maximum 20 characters and only underscore are allowed " placeholder= "Enter Username" required>
						<p> New Password </p><br><br>
						<input type="password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="UpperCase, LowerCase, Number/SpecialChar and min 8 Chars" placeholder="Enter New Password" required>
						<p> Confirm Password </p><br><br>
						<input type="password"  class = "form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="UpperCase, LowerCase, Number/SpecialChar and min 8 Chars"placeholder= "Re-enter Password" required>

						<input type="submit" class = "contact-form-btn" value ="Change Password">
						<a class="link" href="index.php">
						</a>
					</form>


				</div>


			</div>
		</div>
	</div>
</section>

<!-- End banner Area -->

<!-- Start cat Area -->

<!-- End project Area -->

<!-- Start feedback Area -->

<!-- end blog Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>About Us</h6>
					<p>
                        Developed By Muhammad Tanzeel-Ur-Rehmn & Hassan Malik <br><br><br>
                        Copyright &copy; All rights reserved
					</p>

				</div>
			</div>
			<div class="col-lg-5  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>Stay update with our latest</p>
					<div class="" id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
							<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Let us be social</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/hexagons.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>



