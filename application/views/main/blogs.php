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
    <header class="site-header " data-bg-image="">
        <div class="container">
            <div class="header-bar">
                <div class="branding">
                    <img class="logo" src="" alt="logo">
                </div>

                <nav class="main-navigation">
                    <button class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="<?php echo BASEURL?>">Home</a></li>
						<li class="home menu-item current-menu-item"><a href="<?php echo BASEURL.'/homepage/blogs'?>">Blogs</a></li>
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
    <div class="page-head" data-bg-image="<?php echo BASEURL.'/public/assets/img/image-2.jpg'?>">
        <div class="container">
            <h2 class="page-title">Articles</h2>
            <small>All articles here. </small>
        </div>
    </div>

    <main class="main-content">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Select category</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">All topics</a>
                <a href="#">###</a>
                <a href="#">###</a>
            </div>
        </div>
        <div class="fullwidth-block" data-bg-color="#edf2f4">
            <div class="container">
                <h2 class="section-title">Articles</h2>           
                   
                    <div class="col-md-4">
                        <div class="post">
                            <figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-4.png'?>" alt=""></figure>
                            <h2 class="entry-title"><a href="">Human biomonitoring</a></h2>
                            <small class="date">2 oct 2014</small>
                            <p>Human biomonitoring in urine samples from the Environmental Specimen Bank reveals a decreasing trend over time in the exposure to the fragrance chemical lysmeral from 2000 to 2018...</p>
                        <p style="text-align:right;"> Posted by Dr.H.H.R.Samarasinghe.</p>
                        </div>
                    </div>
                 
                   
                    <div class="col-md-4">
                        <div class="post">
                            <figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-5.png'?>" alt=""></figure>
                            <h2 class="entry-title"><a href="">e-cigarette (EC)</a></h2>
                            <small class="date">2 oct 2014</small>
                            <p>The formation of carbonyls and epoxides in e-cigarette (EC) aerosol is possible due to heating of the liquid constituents. However, high background levels of these compounds...</p>
                            <p style="text-align:right;"> Posted by Dr.K.P.Senevirathne.</p>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="post">
                            <figure class="featured-image"><img src="<?php echo BASEURL.'/public/assets/img/image-6.png'?>" alt=""></figure>
                            <h2 class="entry-title"><a href="">Analysis of NNN</a></h2>
                            <small class="date">2 oct 2014</small>
                            <p>Quantitative analysis of NNN in plasma by LC-MS/MS: a suitable alternative to urinary determination to assess the exposure to this important toxicant...</p>
                            <p style="text-align:right;"> Posted by Dr.S.R.Perera.</p>
                        </div>
                    </div>
                   
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .fullwidth-block -->


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
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    <script src="<?php echo BASEURL.'/public/assets/js/jquery-1.11.1.min.js'?>"></script>
	<script src="<?php echo BASEURL.'/public/assets/js/plugins.js'?>"></script>
	<script src="<?php echo BASEURL.'/public/assets/js/app.js'?>"></script>

</body>

</html>