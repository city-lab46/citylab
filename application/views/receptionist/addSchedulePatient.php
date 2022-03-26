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
              <th>first Name</th>
              <th>last Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          
          <tbody id="searchTable">
          <?php
          $datas = $this->result;
          if(!empty($datas)){
            foreach($datas as $data){
              $patient_id = $data['patient_id'];
              $first_name = $data['first_name'];
              $last_name = $data['last_name'];
              $contact = $data['contact'];
              $email = $data['email'];

          
          ?>
          <tr>
              <td><?php echo $patient_id; ?></td>
              <td><?php echo $first_name; ?></td>
              <td><?php echo $last_name; ?></td>
              <td><?php echo $contact; ?></td>
              <td><?php echo $email; ?></td>  
              <td>
                <a href="<?php echo BASEURL.'/schedule/addScheduleForm?patient_id='.$data['patient_id']?>"  class="bttn1">Add Schedule</i></a>          
              </td>
            </tr>
            <?php
              }   
            }
          ?>
            
        
          
        </tbody>
        </table>
        <?php 
          $pageno=$_SESSION['datas']['pageno'];
          $total_pages=$_SESSION['datas']['pages']; 
          //echo "<script>alert('{$total_pages}');</script>";     
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
 </html>
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