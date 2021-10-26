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
			<header class="site-header" >
				<div class="container">
					<div class="header-bar">
						<div class="branding">
							<img class="logo" src="" alt="logo">
						</div>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="home menu-item current-menu-item"><a href="<?php echo BASEURL?>">Home</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/blogs'?>">Blogs</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/services'?>">Services</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/about'?>">About</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/contact'?>">Contact</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/signup' ?>">Sign Up</a></li>
								<li class="menu-item"><a href="<?php echo BASEURL.'/login' ?>">Login</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="hero">

				<ul class="slides">
					<li data-bg-image="<?php echo BASEURL.'/public/assets/img/image-7.jpg'?>">
						<div class="container">
							<div class="slide-content">

								<p ><small>City Lab is a medical lab in Panandura.Here, you can take test types including blood and urine. There are other facilities also.They are booking and online payment...</small>
								</p>

								<a href="<?php echo BASEURL.'/homepage/services'?>" class="button" >Learn more</a>
							</div>
						</div>
					</li>
					<li data-bg-image="<?php echo BASEURL.'/public/assets/img/image-10.jpeg'?>">
						<div class="container">
							<div class="slide-content">

								<p><small>City Lab is a medical lab in Panandura.Here,you can take test types including blood and urine. There are other facilities also.They are booking and online payment...</small>
								</p>
								<a href="<?php echo BASEURL.'/homepage/services'?>" class="button" >Learn more</a>
							</div>
						</div>
					</li>
					<li data-bg-image="<?php echo BASEURL.'/public/assets/img/image-2.jpg'?>">
						<div class="container">
							<div class="slide-content">

								<p><small>City Lab is a medical lab in Panandura. Here,you can take test types including blood and urine. There are other facilities also.They are booking and online payment...</small>
								</p>
								<a href="<?php echo BASEURL.'/homepage/services'?>" class="button" >Learn more</a>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">

							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo BASEURL.'/public/assets/img/icon-research-small.png'?>" alt="" class="feature-image">
									<h2 class="feature-title">Test types</h2>
									<p style ="text-align:left;">Pathology tests cover blood tests, and tests on urine, stools (faeces) and bodily tissues. If you're sick, many of the decisions about your care will be based on the results of your blood and pathology tests. Some common tests in Australia include a full blood count, liver function tests, and urinalysis....</p>
									<a href="<?php echo BASEURL.'/homepage/services'?>" class="button">Learn more</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo BASEURL.'/public/assets/img/icon-genetics-small.png'?>" alt="" class="feature-image">
									<h2 class="feature-title">Lab Info</h2>
									<p style ="text-align:left;">City Lab is a medical lab in Panandura. Here, you can take test types including blood and urine. There are other facilities also. They are booking and online payment.We are introducing a web application that remotely connects all patients, doctors, employees and doctors with the facility.
									</p>
									<a href="<?php echo BASEURL.'/homepage/services'?>" class="button">Learn more</a>
								</div>
							</div>

						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<h2 class="section-title">Latest Articles</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-4.png'?>" alt=""></figure>
									<h2 class="entry-title"><a href="">Human biomonitoring</a></h2>
									<small class="date">2 oct 2014</small>
									<p>Human biomonitoring in urine samples from the Environmental Specimen Bank reveals a decreasing trend over time in the exposure to the fragrance chemical lysmeral from 2000 to 2018...</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-5.png'?>" alt=""></figure>
									<h2 class="entry-title"><a href="">e-cigarette (EC)</a></h2>
									<small class="date">2 oct 2014</small>
									<p>The formation of carbonyls and epoxides in e-cigarette (EC) aerosol is possible due to heating of the liquid constituents. However, high background levels of these compounds...</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-6.png'?>" alt=""></figure>
									<h2 class="entry-title"><a href="">Analysis of NNN</a></h2>
									<small class="date">2 oct 2014</small>
									<p>Quantitative analysis of NNN in plasma by LC-MS/MS: a suitable alternative to urinary determination to assess the exposure to this important toxicant...</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our mission and Solution</h2>
								<p>Each day, different types of tests are carried out in the facility using various biological samples. It is critical to collect the right specimen in the proper way and at the right time in order to get reliable results.
									The facility currently has been dealing with enormous data collection and must keep track of their patients’ records. It is necessary to have quick access to that information on a regular basis. They must be able to add, update, delete and retrieve data as required. They use registration forms, reports, receipts and other paper-based documentation. Although they use computers for basic tasks like generating reports, check attendance, they are not doing it in an orderly manner.
									They find it challenging to organize and manage information in this manner since it takes so much time and effort. After payments and testing are done, patients must come back again to the facility to collect their relevant test report within a given period...

								</p>
								<a href="<?php echo BASEURL.'/homepage/about'?>" class="button">See more</a>
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

					<p class="colophon" align="center" style="color:honeydew;">copyright 2021 CityLab.All rights reserved. <a href="#" >| Terms of use |</a> <a href="#" > Privacy policy</a> </p>
				</div> <!-- .container -->
			</footer>
		</div>

		<script src="<?php echo BASEURL.'/public/assets/js/jquery-1.11.1.min.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/plugins.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/app.js'?>"></script>
		
	</body>

</html>