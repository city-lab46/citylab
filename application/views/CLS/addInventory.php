<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/addInventory.css'?>"/>
<?php include "components/header.php"; ?>
    
    <div class="nav">
      <a  href="<?php echo BASEURL.'/addInventory'?>" class="activ"><i class="fas fa-plus-circle"></i>Add Inventory</a>
      <a href="<?php echo BASEURL.'/inventoryHistory'?>" >Inventory History</a> 
    </div>

    <div class="main">
      
      <form action="action_page.php">
        <div class="row">
          <div class="col-25">
            <label for="toolName">Inventory Tool Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="toolName" name="toolName" placeholder="Tool Name">
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
          <div class="col-25">
            <label for="date">Date</label>
          </div>
          <div class="col-25">
              <input type="date" id="date" name="date"
              value="dd/mm/yyyy">
          </div>
        </div>
        
       
     
      <div class="submit_cancel">
        <div class="row">
          <input type="submit" value="Submit">
        </div>
        <div class="row">
          <input type="submit" value="cancel">
        </div>
      </div>
      </form>

    </div>  

  </div>
  

</body>