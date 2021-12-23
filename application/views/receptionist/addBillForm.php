<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
      <div class="contents">
        <div class="container">

          <form action=" " method="post">

            <div class="row">
              <div class="col-25">
                <label >Test Types</label>
              </div>
              <div class="col-25">
                <select  name="test_type" >    
                  <option value=""> <--select--> </option>
                  <option value="FCB">FCB</option>
                  <option value="Hb">Hb</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="lname">Total Payment</label>
              </div>
              <div class="col-75">
                <input type="text" id="total_payment" name="total_payment" placeholder="Total Payment">
              </div>
            </div>
                
            <div class="row">
              <input type="submit" value="Submit">
              <input type="submit" name="cancel" value="Cancel">
            </div>
            
          </form>
          
        </div>
      </div>
    </div>
  
</body>