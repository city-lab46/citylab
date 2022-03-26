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
           <th>ID</th>
            <th>Message</th>
            <th>Created Date</th>
            
            
            
          </tr>
        </thead>
        
        <tbody id="searchTable">
        <?php
          $datas = $this->result;
          if(!empty($datas)){
            foreach($datas as $data){
              $notification_id = $data['notification_id'];
              $message = $data['message'];
              $created_date = $data['created_date'];
              

          
          ?> 
          <tr>        
            <td><?php echo $notification_id ?></td>
            <td><?php echo $message ?></td>
            <td><?php echo $created_date ?></td>
            
          </tr>
         
          <?php
              }   
            }else{
                echo "No tools available";
            }
          ?>
        </tbody>
        </table>
      
        <?php 
          $pageno=$_SESSION['data']['pageno'];
          $total_pages=$_SESSION['data']['pages'];      
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