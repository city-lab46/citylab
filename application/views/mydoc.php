<!DOCTYPE html>
<html lang="en">
<head>
<title>City-Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../../public/assets/img/favicon.png"/>
<link rel="stylesheet" href="../../public/css/all.min.css"/>
<link rel="stylesheet" href="../../public/styles.css"/>
<link rel="stylesheet" href="mydoc.css"/>

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

  function openForm() {
  document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
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
        <a href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
        <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
        <a class="active" href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
        <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
        <div><button onclick="window.location.href='homepage.php'">Logout</button></div>
      </div>
    
    <div class="nav">
      <a href="doctor.php">Doctors</a>
      <a class="activ" href="mydoc.php">My Doctor</a>
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
        <div>
          <p>Name<span>Dr. U. Dissanayaka</span><button class="button" onclick="openForm()"><i class="fas fa-comment"></i></p></button>
        </div>
        <div>
          <p>Specialization<span>General Physician</span></p>
        </div>
      </div>

      <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">      
          <label for="msg"><b>New message</b></label>
          <textarea placeholder="Message.." name="msg" required></textarea>
      
          <button type="submit" class="btn">Send</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

    </div>  

  </div>
</body>