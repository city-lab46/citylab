<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/book.css'?>"/>
<script src="<?php echo BASEURL.'/public/assets/js/book.js'?>"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?>

<script>
  $(document).ready(function () {
    $("#test").CreateMultiCheckBox({ width: '230px', defaultText : 'Select Below', height:'250px' });
  });
</script>
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/book'?>">Book Test</a>
      <a href="<?php echo BASEURL.'/pay'?>">Pay Test</a>
    </div> 

    <div class="main">
      
      <div class="box">

        <form action="<?php echo BASEURL.'/book/insert'?>" method="post">
          
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
              <input type="date" name="date" id="myDate" value="DD-MM-YYYY">
            </span></p>
          </div>
          <div class="field">
            <p>Test<span class="data">
              <select id="test" name="testID">
                <option value="1">Fasting Blood Sugar</option>
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

        <?php 
          $result=$data['result'];
          foreach ($result as $value): 
        ?>
          <div class="flip-card">
            <!-- <div class="flip-card-inner">
              <div class="flip-card-front"> -->
                <h4><center>Booking placed</center></h4>
                <div class="field">Date &nbsp:&nbsp <?php echo $value['created_date'];?></div>
                <div class="field">Test &nbsp:&nbsp <?php echo $value['name'];?></div>
                <div class="btn">
                  <form action="<?php echo BASEURL.'/book/cancel'?>" method="post">
                    <input type="hidden" name="bookingID" value="<?php echo $value['booking_id'];?>">     
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
