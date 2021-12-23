<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?> 

    <div class="main">
    <div class="searchBox">
        <form action="<?php echo BASEURL.'/inventory/search'?>" method="post">
          <input type="text" name="search" placeholder="search" >
          <i class="fa fa-search fa-lg" ></i>
          
        </form>
      </div>
    

      

     
      <div class="table-container">
        
        <table class="styled-table">
          <thead>
          <tr>
           <th>ID</th>
            <th>Name</th>
            <th>Count</th>
            <!-- <th>Action</th> --> 
          </tr>
        </thead>
        <?php 

$datas = $this->result;

if(!empty($datas)){
  foreach($datas as $data){
  $inventory_id = $data['inventory_id'];
  $name= $data['name'];
  $count= $data['count'];
?>
        <tbody >
           
          <tr>        
            <td data-label = "ID" ><?php echo $inventory_id; ?></td>
            <td data-label = "Name" ><?php echo $name; ?></td>
            <td data-label = "Count" ><?php echo $count; ?></td>
            <!-- <td data-label = "#"> -->
             
              <!-- <a class="bttn1" href="<?php echo BASEURL.'/inventory/updateInventory?inventory_id='.$data['inventory_id'].''?> " ><i class="fas fa-pen-square"></i></a> -->
              
              
            <!-- </td> -->
          </tr>
          <?php
              }   
            }else{
                echo "No tools available";
            }
          ?>
          
        </tbody>
      </table>
    </div>  
  </div>

</body>