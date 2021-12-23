<?php

if(isset($_GET['doctor_id'])){
  $_SESSION['doctor_id'] = $_GET['doctor_id']; 
}
if(isset($_GET['patient_id'])){
  $_SESSION['patient_id'] = $_GET['patient_id']; 
}
?>

<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/back.css'?>"/>
<?php include "components/sidenav.php"; ?>   

    <div class="main">
      <div class="contents">
        <div class="container">

          <form action=" <?php echo BASEURL.'/report/recommendDoctor'?>" method="post">
            <div class="row" id="doctor">
              <div class="col-25">
                <label >Recommend Doctor<br>(If required)</br></label>                  
              </div>
              <div class="col-25">
                <input type="submit" name="selectDoctor"value="Recommend Doctor">
              </div>
            </div>
          </form>
  
          <form action="<?php echo BASEURL.'/report/insert'?>">
            
            <div class="row">
              <div class="col-25">
                <label for="result">Result</label>
              </div>
              <div class="col-75">
                <input type="number"  min=0 step="0.01" name="result" id="result" placeholder="Result" >              
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label >Unit</label>
              </div>
              <div class="col-75">
                <select  name="unit" >
                  <option value=""><--select--></option>
                  <option value="mmhg">mmhg</option>
                  <option value="mg">mg</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
              <label >Specimen Examined</label>
              </div>
              <div class="col-75">
              <select name="speci_examined" >
                    <option value=""><--select--></option>
                      <option value="blood">Blood</option>
                      <option value="Urine">Urine</option>
                    </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
              <label >Test Type</label>
              </div>
              <div class="col-75">
              <select  name="test" >
              <option value=""><--select--></option>
                <option value="FBC">FBC</option>
                <option value="Hb">Hb</option>
              </select>
              </div>
            </div>
         
            <div class="row">
              <input type="submit" value="Submit">
              <input type="submit" name="cancel" value="Cancel">
            </div>
            
          </form>
  
        </div>
      </div>

      <div class="pages">
        <a href=" <?php echo BASEURL.'/report'?>"  class="btn11">Back</a> 
      </div>
    </div>
    
</body>

</html>