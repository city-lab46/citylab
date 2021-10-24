<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/editTest.css'?>"/>
<?php include "components/header.php"; ?>


    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/report/edit'?>"><i class="fas fa-plus-circle"></i>Update Report</a>
      <a href="<?php echo BASEURL.'/report/history'?>">View History</a>
    </div>


  <?php
  $datas = $this->result;
 

  if(!empty($datas)){
    foreach($datas as $data){
      $report_id = $data['report_id'];
      $created_date= $data['created_date'];
      $result = $data['result'];
    
      $unit = $data['unit'];
      $speci_examined = $data['speci_examined'];
      //$test = $data['test'];
  ?>   
    
  <div class="main">
    
      <form action="#" method="post">
        
      <div class="row">
          <div class="col-25">
            <label for="report_id">report Id</label>
          </div>
          <div class="col-25">
              <input type="number"  name="report_id" id="report_id" value="<?php echo $report_id; ?>" disabled>
          </div>
        </div>
       
        <div class="row">
          <div class="col-25">
            <label for="created_date">Date</label>
          </div>
          <div class="col-25">
              <input type="date"  name="created_date" id="created_date" value="<?php echo $created_date; ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="result">Result</label>
          </div>
          <div class="col-25">
            <input type="number"  name="result" id="result"  value="<?php echo $result; ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label >Unit</label>
          </div>
        <div class="col-25">
          <select  name="unit" >
          <option value="<?php echo $unit; ?>"><?php echo $unit; ?></option>
            <option value="mm/g">mmhg</option>
            <option value="mm/g">mg</option>
          </select>
        </div>
      </div>
        <div class="row">
          <div class="col-25">
            <label >Specimend Examined</label>
          </div>
          <div class="col-25">
            <select name="speci_examined" >
            <option value="<?php echo $speci_examined; ?>"><?php echo $speci_examined; ?></option>
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
          <option value="<?php echo $test; ?>"><?php echo $test; ?></option>
            <option value="Hb">Hb</option>
            <option value="RBC">RBC</option>
          </select>
        </div>
      </div>
      <?php
  } 
              }else{
                echo "no such report";
            }
          

              ?>
      
      <div class="submit_cancel">
        <div class="row" >
      
        
        
     
       
          <input type="submit" name="update"value="Submit">
          
        </div>
        <div class="row" >
        
          <input type="submit" name="cancel" value="Cancel">
         
        </div>
      </div>
      </form>
    
    </div>  

  </div>
  

    <!-- Optional JavaScript -->
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
  </body>
</html>
