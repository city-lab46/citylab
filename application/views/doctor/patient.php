<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/profilecard.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

      <?php 
      $result=$data['result'];
      foreach ($result as $row): 
      ?>
        <div class="container">
          <div class="meatball-menu">
            <span></span><span></span><span></span>
          </div>
          <div class="cover-photo">
            <img class="profile-pic" src="<?php echo BASEURL.'/public/assets/img/profile/doc.jpg'?>" alt=""/>
          </div>
          <div class="profile-name"><?php echo $row["first_name"]."&nbsp".$row["last_name"] ;?></div>
          <div class="about"><i class="fas fa-phone-alt"></i>&nbsp&nbsp&nbsp<?php echo  $row["contact"] ;?></div>
          <div class="contact"><i class="fas fa-envelope"></i>&nbsp&nbsp&nbsp<?php echo  $row["email"] ;?></div>
          <button class="msg-btn" onclick="window.location.href='<?php echo BASEURL.'/chat?userId='.$row['user_id'];?>'">Message</button>
          <button class="msg-btn" onclick="window.location.href='<?php echo BASEURL.'/test/records?patientId='.$row['patient_id'];?>'">Report</button>
        </div>  
      
      <?php endforeach;?>     
          
    </div> 
</body>
</html>