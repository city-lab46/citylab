<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/mydoctor.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?> 
 
    
    <div class="nav">
      <a href="<?php echo BASEURL.'/doctor'?>">Doctors</a>
      <a class="activ" href="<?php echo BASEURL.'/doctor/mydoctor'?>">My Doctor</a>
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