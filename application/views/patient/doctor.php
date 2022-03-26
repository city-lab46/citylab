<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/pagination.css'?>"/>

<?php include "components/sidenav.php"; ?>

    <div class="main">

      <div class="container">
        
        <div class="searchBox">
          <input type="search" id="searchText" name="search" placeholder="Search"><i class="fa fa-search"></i>
        </div>
        
        <table class="styled-table">
          
          <thead>
            <tr>
              <th>Doctor</th>
              <th>Specialization</th>
              <th>Email</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody id="searchTable">

          <?php 
          $result=$data['result'];
          if(!empty($result)):
            foreach ($result as $row): 
          ?>
            <tr>
              <td><?php echo "Dr. " .$row["first_name"] . "&nbsp" . $row["last_name"] ;?></td>
              <td><?php echo  $row["specialization"] ;?></td>
              <td><?php echo  $row["email"] ;?></td>
              <td><?php echo  $row["contact"] ;?></td>
            </tr>
          <?php endforeach; endif;?> 
          
          </tbody>
        </table>

        <?php 
          $pageno=$data['pageno'];
          $total_pages=$data['pages'];      
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