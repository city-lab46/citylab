<!DOCTYPE html>
<html lang="en">
<head>
<title>CityLab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/all.min.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>
<!--  no local -->

<script>

  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("menu").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("menu").style.display = 'none';
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("menu").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("menu").style.display = 'block';
  }

</script>
</head>
<body>
  <div class="blue_bar"></div>
  <div class="container">
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?php echo BASEURL.'/patientHome'?>"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="<?php echo BASEURL.'/test'?>"><i class="fas fa-vials"></i><span>Tests</span></a>
      <a href="<?php echo BASEURL.'/book'?>"><i class="fas fa-bookmark"></i><span> Book</span></a>
      <a href="<?php echo BASEURL.'/doctor'?>"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
      <a href="<?php echo BASEURL.'/settings'?>"><i class="fas fa-cog"></i><span>Settings</span></a>
      <a href="<?php echo BASEURL ?>"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>

    </div>
    <div id="menu">
      <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <!-- USER INFORMATION DETAILS -->
    <div class="info">
      <button class="notifi"><i class="far fa-bell"></i></button>
      <div class="user_image">
        <img src="<?php echo BASEURL.'/public/assets/img/tuat.png'?>" alt=""></img>
      </div>
      <div class="user_name"><?php echo "Mrs. ".$_SESSION['first_name']." ".$_SESSION['last_name']?></div>
      <div id="user-role"><?php echo $_SESSION['title']?></div>
      
      <div class="Date">
        <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
        <script>
          var dt = new Date();
          document.getElementById('date').innerHTML=dt.toDateString();
        </script>
      </div> 
    </div>