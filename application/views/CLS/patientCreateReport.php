<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?> 
    
    <div class="main">
      
        <div class="search">
            <form action=" <?php echo BASEURL.'/report/search'?>" method="post">
                <input type="text" name="search" placeholder="search by patient ID" >
                <button type="submit" name="search_btn" class="fabtn" id="searchbtn" ><i class="fa fa-search fa-lg" ></i></button>
            </form>          
        </div>

      <div class="table-container">
      
        <table class="styled-table" >
          <thead>
          <tr>
            <th>Patient ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <?php 
            $datas = $this->result;

            if(!empty($datas)){
                foreach($datas as $data){
                $patient_id = $data['patient_id'];
                $first_name= $data['first_name'];
                $last_name= $data['last_name'];    
        ?>
  
        <tbody >
           
            <tr>        
                <td data-label = "ID" ><?php echo $patient_id; ?></td>
                <td data-label = "First Name" ><?php echo $first_name; ?></td>
                <td  data-label = "Last Name" ><?php echo $last_name; ?></td>
                
                <td data-label = "#">
                
                <a class="bttn1" href="<?php echo BASEURL.'/report/createReport?patient_id='.$data['patient_id'].''?>" style="text-decoration:none" >Create Report</i></a>
                
                
                </td>
          </tr>
          
          <?php
    }
              }else{
                echo "no such report";
            }
          

              ?>
        </tbody>
        
        
        </table>
      </div>

    </div>  

  </div>
</body>
</html>