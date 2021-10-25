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
        <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/about.css'?>">

	</head>

    <body>

    <div class="site-content">
        <header class="site-header" data-bg-image="">
            <div class="container">
                <div class="header-bar">
                    <div class="branding">
                        <img src="" alt="" class="logo">
                    </div>

                    <nav class="main-navigation">
                        <button class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item"><a href="<?php echo BASEURL?>">Home</a></li>
							<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/blogs'?>">Blogs</a></li>
							<li class="menu-item"><a href="<?php echo BASEURL.'/homepage/services'?>">Services</a></li>
							<li class="home menu-item current-menu-item"><a href="<?php echo BASEURL.'/homepage/about'?>">About</a></li>
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
                <h2 class="page-title">About Us</h2>
                <small>About us. </small>
            </div>
        </div>

        <main class="main-content">

            <div class="fullwidth-block" data-bg-color="#edf2f4">
                <div class="container">
                    <h2 class="section-title">About Us</h2><br>
                    <div class="custom-container">
                        <p>City Lab is a medical lab in Panandura.Here,you can take test types including blood and urine.There are other facilities also.They are booking and online payment...</p>
                    </div>

                    <div class="slideshow-container fade">

                        <!-- Full images with numbers and message Info -->
                        <div class="Containers">
                            <div class="MessageInfo">1 / 5</div>
                            <img src="<?php echo BASEURL.'/public/assets/img/image-11.jpg'?>" style="width:100%">
                        </div>

                        <div class="Containers">
                            <div class="MessageInfo">2 / 5</div>
                            <img src="<?php echo BASEURL.'/public/assets/img/image-12.jpg'?>" style="width:100%">
                        </div>

                        <div class="Containers">
                            <div class="MessageInfo">3 / 5</div>
                            <img src="<?php echo BASEURL.'/public/assets/img/image-13.jpg'?>" style="width:100%">
                        </div>

                        <div class="Containers">
                            <div class="MessageInfo">4 / 5</div>
                            <img src="<?php echo BASEURL.'/public/assets/img/image-14.jpg'?>" style="width:100%">
                        </div>

                        <div class="Containers">
                            <div class="MessageInfo">5 / 5</div>
                            <img src="<?php echo BASEURL.'/public/assets/img/image-15.jpg'?>" style="width:100%">
                        </div>

                        <!-- Back and forward buttons -->
                        <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="forward" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The circles/dots -->
                    <div style="text-align:center">
                        <span class="dots" onclick="currentSlide(1)"></span>
                        <span class="dots" onclick="currentSlide(2)"></span>
                        <span class="dots" onclick="currentSlide(3)"></span>
                        <span class="dots" onclick="currentSlide(4)"></span>
                        <span class="dots" onclick="currentSlide(5)"></span>
                    </div>


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
    var slidePosition = 0;
    SlideShow(slidePosition);

    // forward/Back controls
    function plusSlides(n) {
    SlideShow(slidePosition += n);
    }

    //  images controls
    function currentSlide(n) {
    SlideShow(slidePosition = n);
    }

    function SlideShow(n) {
    var i;
    var slides = document.getElementsByClassName("Containers");
    var circles = document.getElementsByClassName("dots");
    if (n > slides.length) {slidePosition = 1}
    if (n < 1) {slidePosition = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slidePosition++;
    for (i = 0; i < circles.length; i++) {
        circles[i].className = circles[i].className.replace(" enable", "");
    }
    if (slidePosition > slides.length) {slidePosition = 1}
    slides[slidePosition-1].style.display = "block";
    circles[slidePosition-1].className += " enable";
    setTimeout(SlideShow, 5000);
    }

    </script>

        <script src="<?php echo BASEURL.'/public/assets/js/jquery-1.11.1.min.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/plugins.js'?>"></script>
		<script src="<?php echo BASEURL.'/public/assets/js/app.js'?>"></script>
   
    </body>

</html>

