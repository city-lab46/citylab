<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>CityLab</title>
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo BASEURL.'/public/assets/css/all.min.css'?>" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/homepage.css'?>">
	

	</head>
	<body>

		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<div class="branding">
						<img src="<?php echo BASEURL.'/public/assets/img/logo2.png'?>" alt="" class="logo">
						</div>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
                                <li class="menu-item"><a href="<?php echo BASEURL.'/homepage'?>">Home</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/blogs'?>">Blogs</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/services'?>">Services</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/about'?>">About</a></li>
								<li class="home menu-item current-menu-item"><a href="<?php echo BASEURL.'/homepage/contact'?>">Contact</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/signup' ?>">Sign Up</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/login' ?>">Login</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
				    </div>
				</div>
			</header>

			<div class="page-head" data-bg-image="<?php echo BASEURL.'/public/assets/img/image-2.jpg'?>">
				<div class="container">
					<h2 class="page-title">Contact</h2>
					<small>These are the contact details. </small>
				</div>
			</div>

			<main class="main-content">
				
				<div class="fullwidth-block">
					<div class="container">
						 <div class="map" data-latitude="6.7140731" data-longitude="79.9083109"></div>

						 <div class="row">
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Address</h2>
						 			<address>
						 				<p>CityLab-Panadura.</p>
										<p>Janapriya Mawatha, Panadura.</p>
									</address>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Telephone</h2>
						 			<p><strong>Lab:</strong> +94 38 5686844</p>
									<p><strong>Support:</strong> +94 71 4411187</p>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Email</h2>
						 			<p><strong>Lab:</strong> <a href="mailto:citylab-panadura@gmail.com">citylab-panadura@gmail.com</a></p>

						 		</div>
						 	</div>
						 </div>


					</div>
				</div>



			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<strong>CityLab-Panadura</strong>
								<address>Janapriya Mawatha, Panadura.</address>
								<a href="tel:+94 38 5686844">+94 38 5686844</a> <br>
								<a href="mailto:citylab-panadura@gmail.com">citylab-panadura@gmail.com</a>
							</div>
						</div>




						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social media</h3>
								<p>You can connect with us on this social medias</p>
								<div class="social-links">
									<a href="#"><i class="fab fa-facebook"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon" align="center">copyright 2021 CityLab.All rights reserved. <a href="#" >| Terms of use |</a> <a href="#" > Privacy policy</a> </p>
				</div> <!-- .container -->
			</footer>
		</div>

		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/jquery-1.11.1.min.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/plugins.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/app.js'?>"></script>
		
	</body>

</html>