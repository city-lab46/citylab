<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/inventoryHistory.css'?>"/>
<?php include "components/header.php"; ?>

<script src="../js/jquery-3.6.0.min.js" type="text/javascript">
</script>

    
    <div class="nav">
      <a href="<?php echo BASEURL.'/inventory/insert'?>" ><i class="fas fa-plus-circle"></i>Add Inventory</a>  
      <a href="<?php echo BASEURL.'/inventory/history'?>" class="activ">Inventory History</a> 
    </div> 

    <div class="main">
      <div class="search">
        <form action=" " method="post">
          <input type="text" name="search" placeholder="search" > 
        </form>
      </div>

      <div class="table-container">
        
        <table id="sample_data" class="table">
          <thead>
          <tr>
           <th>ID</th>
            <th>Name</th>
            <th>Count</th>
            <th>Action</th>
            
            
          </tr>
        </thead>
        <tbody id="myTable">
           
          <tr>        
            <td data-label = "ID" >1</td>
            <td data-label = "Name" >Test tubes</td>
            <td data-label = "Count" >24</td>
            <td data-label = "#">
             
              <a href=" " ><i class="fas fa-pen-square"></i></a>
              <a href=" " ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
          <tr>        
            <td data-label = "ID" >2</td>
            <td data-label = "Name" >Test tubes</td>
            <td data-label = "Count" >24</td>
            <td data-label = "#">
             
              <a href=" " ><i class="fas fa-pen-square"></i></a>
              <a href=" " ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
          <tr>        
            <td data-label = "ID" >3</td>
            <td data-label = "Name" >crucible tong</td>
            <td data-label = "Count" >10</td>
            <td data-label = "#">
             
              <a href=" " ><i class="fas fa-pen-square"></i></a>
              <a href=" " ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
          <tr>        
            <td data-label = "ID" >4</td>
            <td data-label = "Name" >disposable pipette</td>
            <td data-label = "Count" >8</td>
            <td data-label = "#">
             
              <a href=" " ><i class="fas fa-pen-square"></i></a>
              <a href=" " ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
          <tr>        
            <td data-label = "ID" >5</td>
            <td data-label = "Name" >erlenmeyer flasks</td>
            <td data-label = "Count" >15</td>
            <td data-label = "#">
             
              <a href=" " ><i class="fas fa-pen-square"></i></a>
              <a href=" " ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
        </tbody>
        </table>
      

    </div>  

  </div>
</body>