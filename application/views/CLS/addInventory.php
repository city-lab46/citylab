<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>

    
    <div class="main">
      <div class="contents">
        <div class="container">

          <form action="<?php echo BASEURL.'/inventory'?>" method="post">
                
                <div class="row">
                <div class="col-25">
                <label >Inventory Tool Name</label>
                </div>
                <div class="col-75">
                <select  name="name" >
                    <option value=""><--select--></option>
                    <option value="Test Tubes">Test tubes</option>
                      <option value="crucible tong">crucible tong</option>
                      <option value="cdisposable pipette">cdisposable pipette</option>
                      <option value="erlenmeyer flasks">erlenmeyer flasks</option>
                    </select>
                </div>
              </div>
              <div class="row">
                  <div class="col-25">
                    <label for="action">Action</label>
                  </div>
                  <div class="col-75">
                    <input type="radio" id="take" name="action" value="take">
                    <label for="take">Take</label>
                    <input type="radio" id="put" name="action" value="put">
                    <label for="put">Put</label><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="count">Count</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="count" name="count" placeholder="count">
                  </div>
                </div>
                
                
              
                  
              <div class="row">
                <input type="submit"name="submit" value="Submit">
                <input type="submit" name="cancel" value="Cancel">
              </div>
              
            </form>
  
        </div>
      </div>
    </div>  

</body>