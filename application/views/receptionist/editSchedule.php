<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/back.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/calendar.css'?>"/>

<?php include "components/sidenav.php"; ?> 

<?php
 
 $datas = $this->result;
 

 if(!empty($datas)){
  foreach($datas as $data){
    $patient_id = $data['patient_id'];
    $date = $data['booking_date'];
    $time = $data['booking_time'];
?>   
    
    <div class="main">
      <div class="contents" >
      
        <div class="container">
        
          <form action="<?php echo BASEURL.'/schedule/edit?patient_id='.$patient_id.'&booking_date='.$date.'&booking_time='.$time?>" method="post">
          
            <div class="row">
              <div class="col-25">
              <label for="patient_id">Patient Id</label>
              </div>
              <div class="col-75">
              <input type="text"  name="patient_id" id="patient_id" value="<?php echo $patient_id; ?>" disabled>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label >Test Types</label>
              </div>
              <div class="col-75">
                <select  name = "testTypes[]"class = "multiselect-container" multiple size="2" >
                  <option value="HB" >HB</option>
                  <option value="RBC">RBC</option>
                  <option value="Hematocrit">Hematocrit</option>
                  <option value="White blood cell cou">White blood cell cou</option>
                  <option value="Platelet count">Platelet count</option>
                </select>
            </div>
            </div>
            <div class="row">
              <div class="col-25">
              <label for="booking_date">Date</label>
              </div>
              <div class="col-75">
               <input type="date"  name="booking_date" id="booking_date" value="<?php echo $date; ?>">
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                </div>   
                <div class="col-25">
                    <a class = "cal"href="<?php echo BASEURL.'/home'?>">View Booking Calendar</a>
                </div>
                </div>
            <div class="row">
              <div class="col-25">
              <label for="booking_time">Time</label>
              </div>
              <div class="col-75">
               <input type="time"  name="booking_time" id="booking_time" value="<?php echo $time; ?>" min="07:00" max="19:00" pattern="(07|1[0-9]):[0-5]\d" step="1800">
              </div>
            </div>
            <?php
                 } 
                      
                    }
                  ?>
            <div class="row">
              <input type="submit" name="update" value="update">
              <input type="reset" name="cancel" value="Cancel">
            </div>
            
          </form>
  
        </div>
      </div>
      
      <div class="pages">
        <a href=" <?php echo BASEURL.'/schedule/scheduleHistory'?>"  class="btn11">Back</a>  
      </div>
    </div>
    <script>
        //disable past days
        var now = new Date();
        var month = (now.getMonth() + 1);
        var day = now.getDate();
        if(month<10)
        month = "0" + month;
        if(day<10)
        day = "0" + day;
        var today = now.getFullYear() +'-'+ month + '-' + day;
        document.getElementById("booking_date").min = today;

        
    </script>
     
    
  

    <!-- Optional JavaScript -->
  
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    
  </body>
</html>
