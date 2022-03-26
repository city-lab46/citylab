<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/pagination.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

      <div class="container">

        <div class="searchBox">
          <input type="search" name="search" placeholder="Search"><i class="fa fa-search"></i>
        </div>
        
        <table class="styled-table">
          
          <thead>
            <tr>
              <th>Date</th>
              <th>Test</th>
              <th>Report</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $result=$data['result'];
            foreach ($result as $row): 
            ?>
              <tr>
                <td><?php echo $row["created_date"] ;?></td>
                <td><?php echo $row["name"] ;?></td>
                <td><a href="<?php echo BASEURL.'/test/report'?>" target="_blank"><?php echo $row["speci_examined"] ;?>&nbspReport</a></td>
                <td><?php echo $row["status"] ;?></td>
              </tr>
            <?php endforeach;?> 
          </tbody>
        </table>
              
        <ul class="pagination">
          <li><a href="?pageno=1"><<</a></li>
          <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
          </li>
          <li><a href="<?php echo $pageno ?>"></a></li>
          <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
          </li>
          <li><a href="?pageno=<?php echo $total_pages; ?>">>></a></li>
        </ul>

      </div>
            
    </div> 
</body>
</html>