<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/createTest.css'?>"/> 
<?php include "components/header.php"; ?>

    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/createReport'?>"><i class="fas fa-plus-circle"></i>Create Report</a>
      <a href="<?php echo BASEURL.'/viewHistory'?>">View History</a> 
    </div>
  

    <div class="main">
      
      <form action=" <?php echo BASEURL.'/createReport/insert'?>" method="post">     
       
        <div class="row">
          <div class="col-25">
            <label for="created_date">Date</label>
          </div>
          <div class="col-25">
              <input type="date"  name="created_date" id="created_date"
              value="dd/mm/yyyy">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="result">Result</label>
          </div>
          <div class="col-25">
            <input type="number"  name="result" id="result" placeholder="Result" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label >Unit</label>
          </div>
        <div class="col-25">
          <select  name="unit" >
          <option value=""><--select--></option>
            <option value="mmhg">mmhg</option>
            <option value="mg">mg</option>
          </select>
        </div>
      </div>
        <div class="row">
          <div class="col-25">
            <label >Specimend Examined</label>
          </div>
          <div class="col-25">
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
        <div class="col-25">
          <select  name="test" >
          <option value=""><--select--></option>
            <option value="FBC">FBC</option>
            <option value="Hb">Hb</option>
          </select>
        </div>
      </div>
      
     
    
     
      
      <div class="submit_cancel">
        <div class="row" >
          <input type="submit" name="submit"value="Submit">
          
        </div>
        <div class="row" >
          <input type="submit" name="cancel" value="Cancel">
        </div>
      </div>
      </form>
    
    
    </div>  

  </div>
</body>