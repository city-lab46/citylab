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
            
            <th>Bill ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Total Amount</th>
            <th>Created Date</th>
            <th>Created Time</th>
            
          </tr>
        </thead>
        <tbody >
          <?php
          $datas = $this->result;
          if(!empty($datas)){
            foreach($datas as $data){
              $bill_id = $data['bill_id'];
              $first_name = $data['first_name'];
              $last_name = $data['last_name'];
              $total_amount = $data['total_payment'];
              $created_date = $data['created_date'];
              $created_date  = (string) $created_date;
              $created_time = (string) $created_date;
              $created_time = strtotime($created_time);
           
          ?>
        <tr id="searchTable">
            <td><?php echo $bill_id; ?></td>
            <td><?php echo $first_name; ?></td>
            <td><?php echo $last_name; ?></td>
            <td><?php echo $total_amount; ?></td>
            <td><?php echo date('Y:m:d', strtotime($created_date)); ?></td>
            <td><?php echo date('H:i:s', $created_time); ?></td>
            
          </tr>
          <?php
           }
          }
          ?>
          </tbody>
        </table>
        <?php 
          $pageno=$_SESSION['data4']['pageno'];
          $total_pages=$_SESSION['data4']['pages'];     
        ?>

        <div class="pagination">
          <a href="?pageno=1"><<</a></li>
          <div class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
          </div>
          <div><a href="?pageno=<?php echo $paheno; ?>"><?php echo $pageno ?></a></div>
          <div class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
          </div>
          <div><a href="?pageno=<?php echo $total_pages; ?>">>></a></div>
        </div>

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