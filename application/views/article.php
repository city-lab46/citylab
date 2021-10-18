<!DOCTYPE html>
<html lang="en">
<head>
<title>City-Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../../public/assets/img/favicon.png"/>
<link rel="stylesheet" href="../../public/css/all.min.css"/>
<link rel="stylesheet" href="../../public/styles.css"/>
<link rel="stylesheet" href="article.css"/>

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
      <a href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
      <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
      <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
      <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
      <a href="homepage.php"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>

    </div>
    <div id="menu">
      <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <div class="sidebar">                               
      <header>
        <img src="../../public/assets/img/logo.jpg" alt=""></img>
      </header>
        <a class="active" href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
        <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
        <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
        <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
        <div><button onclick="window.location.href='homepage.php'">Logout</button></div>
      </div>
    
    <div class="nav">
      <a class="activ" href="home_articles.php">Articles</a>
      <a href="home_test_types.php">Test types</a>
    </div>

    <div class="info">
      <button class="notifi"><i class="far fa-bell"></i></button>
      <div class="user_image">
        <img src="../../public/assets/img/tuat.png" alt=""></img>
      </div>
      <div class="user_name">Mr. Jayantha</div>
      <div id="user-role">Patient</div>
      
      <div class="Date">
        <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
        <script>
          var dt = new Date();
          document.getElementById('date').innerHTML=dt.toDateString();
        </script>
      </div> 
    </div> 

    <div class="main">

      <div class="box">
        <h3>Assessment of the potential vaping‑related exposure to carbonyls and epoxides using stable isotope‑labeled precursors in the e‑liquid</h3>
        <p>
          The formation of carbonyls and epoxides in e-cigarette (EC) aerosol is possible due to heating of the liquid constituents. However, high background levels of these compounds have inhibited a clear assessment of exposure during use of ECs. An EC containing an e-liquid replaced with 10% of 13C-labeled propylene glycol and glycerol was used in a controlled use clinical study with 20 EC users. In addition, five smokers smoked cigarettes spiked with the described e-liquid. 
          Seven carbonyls (formaldehyde, acetaldehyde, acrolein, acetone, crotonaldehyde, methacrolein, propionaldehyde) were measured in the aerosol and the mainstream smoke. Corresponding biomarkers of exposure were determined in the user’s urine samples. 13C-labeled formaldehyde, acetaldehyde and acrolein were found in EC aerosol, while all seven labeled carbonyls were detected in smoke. 
        </p>
      </div>
      <button class="btn" onclick="history.back();">Back<i class="fas fa-angle-double-left"></i></button>
    </div>  

  </div>
</body>