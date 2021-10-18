<?php require_once('bookController.php'); ?>

<html lang="en">
<head>
<title>City-Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../../public/assets/img/favicon.png"/>
<link rel="stylesheet" href="../../public/assets/css/all.min.css"/>
<link rel="stylesheet" href="../../public/assets/css/styles.css"/>
<link rel="stylesheet" href="../../public/assets/css/book.css"/>
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
        <a href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
        <a class="active" href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
        <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
        <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
        <div><button onclick="window.location.href='homepage.php'">Logout</button></div>
      </div>
    
    <div class="nav">
      <a class="activ" href="book.php">Book Test</a>
      <a href="pay.php">Pay Test</a>
    </div>

    <div class="info">
      <button class="notifi"><i class="far fa-bell"></i></button>
      <div class="user_image">
        <img src="../../public/assets/img/tuat.png" alt=""></img>
      </div>
      <div class="user_name"><?php echo "Mr. " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></div>
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

        <form action="bookController.php" method="get">
          
          <div class="form">
          <div class="field">
            <p>Name<span class="data"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></span></p>
          </div>
          <div class="field">
            <p>Age<span class="data">
            <?php
              $dob= $_SESSION['dob'];
              $today = date("Y-m-d");
              $age = date_diff(date_create($dob), date_create($today));
              echo $age->format('%y');
            ?>
            </span></p>
          </div>
          <div class="field">
            <p>Date<span class="data">
              <input type="date" name="date" id="myDate" value="dd-mm-yyyy">
            </span></p>
          </div>
          <div class="field">
            <p>Test<span class="data">
              <select name="test_id">
                <option value="1">Fasting Blood Suger</option>
                <option value="2">Complete Blood Count</option>
                <option value="3">Urinalysis</option>
              </select>
            </span></p>
          </div>    
          <div class="field">
            <p>Contact<span class="data"><?php echo $_SESSION['contact'];?></span></p>
          </div>

          </div>
          
          <div class="btn">
            <button type="submit" name="submitData" class="button1">Book</button>
            <button type="reset" class="button2">Cancel</button>
          </div>
        
        </form>
      </div>
      
        <?php foreach ($result as $value): //var_dump($value)?>
          <div class="flip-card">
            <!-- <div class="flip-card-inner">
              <div class="flip-card-front"> -->
                <h4><center>Booking placed</center></h4>
                <div class="field">Date &nbsp:&nbsp <?php echo $value['created_date'];?></div>
                <div class="field">Test &nbsp:&nbsp <?php echo $value['name'];?></div>
                <div class="btn">
                  <form action="bookController.php" method="get">
                    <input type="hidden" name="booking_id" value="<?php echo $value['booking_id'];?>">     
                    <button type="submit" name="cancel" class="button2">Cancel</button>                                                     
                  </form>
                </div>   
              <!-- </div>
              <div class="flip-card-back">
                <div class="field">Test &nbsp:&nbsp <php echo $value['name'];?></div>
              </div>            
            </div> -->
          </div>
        <?php endforeach; ?>
        
      
    </div>
  </body>
</html>
