<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/pagination.css'?>"/>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php include "components/sidenav.php"; ?>
    
<div class="main">
    <div class="container">
         <div class="searchBox">
         <input type="search" id="searchText" name="search" placeholder="Search"><i class="fa fa-search"></i></div>
        
        <table class="styled-table" >
          <thead>
            <tr>
            <th>Patient ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Test Types</th>
            <th>Action</th>
            </tr>
          </thead>
          
        
          <tbody id="searchTable">
          <?php
            
            $datas = $this->result;
            
            foreach($datas as $data){
              $patient_id = $data['patient_id'];
              $date = $data['booking_date'];
              $time = $data['booking_time'];
              $count[$patient_id] = 0;
              $count[$date] = 0;
              $count[$time] = 0;
              
            }

            if(!empty($datas)){
              foreach($datas as $data){
                $patient_id = $data['patient_id'];
                $date = $data['booking_date'];
                $first_name = $data['first_name'];
                $last_name = $data['last_name'];
                $test = $data['name'];
                $time = $data['booking_time'];
                $count[$patient_id] = $count[$patient_id] + 1;
                $count[$date] = $count[$date] + 1;
                $count[$time]  = $count[$time]  + 1;
                if($count[$patient_id]>1 && $count[$date] > 1 && $count[$time] > 1  ){
                  continue;
                }
              
            ?>
            <tr>
            <td><?php echo $patient_id; ?></td>
            <td><?php echo $first_name; ?></td>
            <td><?php echo $last_name; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $time; ?></td>
            <td>
            <?php
            foreach($datas as $json_arr){ 
              if($json_arr['patient_id'] == $patient_id && $json_arr['booking_date'] == $date && $json_arr['booking_time'] == $time){ 
                
                echo $json_arr['name'] ." <br>";
                       
              }
          
          }
          
            ?>
            
            </td>
                      
              <td>
                <a href="<?php echo BASEURL.'/bill/addBillForm?patient_id='.$data['patient_id'].'&booking_date='.$data['booking_date'].'&booking_time='.$data['booking_time']?>" onclick="return confirmBill()" class="bttn1">Create Bill</i></a>   
              </td>
            </tr>
            <?php
            }}
            ?>
          </tbody>
        </table>
        <?php 
          $pageno=$_SESSION['data3']['pageno'];
          $total_pages=$_SESSION['data3']['pages'];      
        ?>

        <ul class="pagination">
          <li><a href="?pageno=1"><<</a></li>
          <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
          </li>
          <li><a href="?pageno=<?php echo $paheno; ?>"><?php echo $pageno ?></a></li>
          <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
          </li>
          <li><a href="?pageno=<?php echo $total_pages; ?>">>></a></li>
        </ul>
      </div>  
    </div> 
    

 
</body>
<script>
$(document).ready(function(){
    $("#searchText").keyup(function(){
        _this = this;
          $.each($("#searchTable tr"), function() {
             if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){
                 $(this).hide();
               }else{
                 $(this).show();
              }
          });
    });
});

</script>