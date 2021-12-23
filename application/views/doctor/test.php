<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
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
            
    </div> 
</body>
</html>