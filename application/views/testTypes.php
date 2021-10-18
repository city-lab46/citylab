<?php include "components/header.php"; ?>

    <div class="sidebar">                               
      <header>
        <img src="<?php echo BASEURL.'/public/assets/img/logo.jpg'?>" alt=""></img>
      </header>
        <a class="active" href="<?php echo BASEURL.'/patientHome'?>"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
        <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
        <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
        <a href="<?php echo BASEURL.'/settings'?>"><i class="fas fa-cog"></i><span>Settings</span></a>
        <div><button onclick="window.location.href='<?php echo BASEURL?>">Logout</button></div>
      </div>
    
    <div class="nav">
      <a href="<?php echo BASEURL.'/patientHome/articles'?>">Articles</a>
      <a class="activ" href="<?php echo BASEURL.'/patientHome/testTypes'?>">Test types</a>
    </div> 

    <div class="main">

      <div class="box">
        <div>Fasting Serum Cholesterol</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quis rerum fugit veniam reprehenderit provident ab debitis! Beatae, exercitationem. Facilis accusamus ducimus voluptas eveniet consectetur repellat. Beatae dolore assumenda culpa.</p>
        <button class="btn" onclick="window.location.href='test_type.php'">Read more</button>
      </div>

      <div class="box">
        <div>Fasting Blood Sugar</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quis rerum fugit veniam reprehenderit provident ab debitis! Beatae, exercitationem. Facilis accusamus ducimus voluptas eveniet consectetur repellat. Beatae dolore assumenda culpa.</p>
        <button class="btn" onclick="window.location.href='test_type.php'">Read more</button>
      </div>

      <div class="box">
        <div>Full Blood Count</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quis rerum fugit veniam reprehenderit provident ab debitis! Beatae, exercitationem. Facilis accusamus ducimus voluptas eveniet consectetur repellat. Beatae dolore assumenda culpa.</p>
        <button class="btn" onclick="window.location.href='test_type.php'">Read more</button>
      </div>

      <div class="box">
        <div>Fasting Serum Cholesterol</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quis rerum fugit veniam reprehenderit provident ab debitis! Beatae, exercitationem. Facilis accusamus ducimus voluptas eveniet consectetur repellat. Beatae dolore assumenda culpa.</p>
        <button class="btn" onclick="window.location.href='test_type.php'">Read more</button>
      </div>
    </div>  

  </div>
</body>