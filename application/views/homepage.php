<!DOCTYPE html>
<html lang="en">
<head>
<title>CityLab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
<!-- Local Styles -->
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/homepage.css'?>"/>

<script src="<?php echo BASEURL.'/public/assets/js/homepage.js'?>"></script>
</head>

<body>

<!-- Navbar -->
<div class="header">
  <img class="logo" src="<?php echo BASEURL.'/public/assets/img/logo.png'?>" alt="">
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#home">Home</a>
    <a href="#about">About us</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
  </div>
  
  <div id="menu">
    <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
  </div>

  <div class="title">City Lab</div>
  <div class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About us</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
  </div>
  <button class="signup" onclick="window.location.href='<?php echo BASEURL . '/signup' ?>'">Sign up</button>
  <button class="login" onclick="window.location.href='<?php echo BASEURL . '/login' ?>'">Login</button>
</div>

<!-- Welcome -->
<div id="home" class="welcome">
  <img class="img1" src="<?php echo BASEURL.'/public/assets/img/dd.jpeg'?>" alt="">
  <div class="line"></div>
  <div class="wctxt">
    <p>WELCOME !!
      <br><br>(Home screen 400px height)
    </p>
    <button class="button" onclick="jumpServices()">Learn More</button>
  </div>
</div>

<!-- About Us -->
<div id="about" class="aboutus">
    <h3>About Us</h3>
    <p>City Lab is a private medical laboratory providing testing related services.
      <br><br>(About up page 400px height)
    </p>
  </div>
</div>

<!-- Services -->
<div id="services" class="services">
    <h3>Services</h3>
    <br><br>(services page 400px height)
  </div>
</div>

<!-- Contact -->
<div id="contact" class="contact">
    <h3>CONTACT US</h3>
    <br><br>(contact page 200px height)
</div>

</body>
</html>
