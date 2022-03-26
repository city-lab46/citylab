
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/back.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/pagination.css'?>"/>

 <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
 <?php include "components/sidenav.php"; ?> 
    <div class="main">
      <div class="container">
         <div class="searchBox">
      <input type="search" id="searchText" name="search" placeholder="Search"><i class="fa fa-search"></i></div>
       <table class="styled-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Created Date</th>
              <th>Result</th>
              <th>Unit</th>
              <th>Specimend Examined </th>
              <th>Test</th>
              <th>Actions</th>
            </tr>
          </thead>
        
          
            
            <tbody id="searchTable"> 
            <?php 
          $datas = $this->result;
          $report_id = $this->report_id;
            if(!empty($datas)){
              foreach($datas as $data){
              $report_id = $data['report_id'];
              $created_date= $data['created_date'];
              $result = $data['result'];
              
              $unit = $data['unit'];
              $speci_examined = $data['speci_examined'];
              $test = $data['test'];
          ?>    
                <tr>        
                  <td  ><?php echo $report_id; ?></td>
                  <td  ><?php echo $created_date; ?></td>
                  <td  ><?php echo $result; ?></td>
                  <td ><?php echo $unit; ?></td>
                  <td  ><?php echo $speci_examined; ?></td>
                  <td  ><?php echo $test; ?></td>
                  <td >
                    <a href="<?php echo BASEURL.'/report/edit?report_id='.$data['report_id']?>"><i class="fas fa-pen-square"></i></a>
                    <a href="<?php echo BASEURL.'/report/delete?report_id='.$data['report_id']?>"><i class="fas fa-trash-alt"></i></a>                   
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
        <?php 
          $pageno=$_SESSION['data7']['pageno'];
          $total_pages=$_SESSION['data7']['pages'];      
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

      

    <div class="pages">
      <a href="<?php echo BASEURL.'/report'?>" class="btn11">Back</a>
    </div>
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