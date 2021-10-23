<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?>
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/test/records'?>">My Tests</a>
    </div>

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
        <tr>
          <td>23-08-2020</td>
          <td>FBC</td>
          <td><a href="<?php echo BASEURL.'/test/report'?>" target="_blank">Blood Report</a></td>
          <td>Normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>Urine test</td>
          <td><a href="<?php echo BASEURL.'/test/report'?>" target="_blank">Urine Report</a></td>
          <td>Normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>FBC</td>
          <td><a href="<?php echo BASEURL.'/test/report'?>" target="_blank">Blood Report</a></td>
          <td>High glucose</td>
        </tr>
        </tbody>
      </table>

    </div>  

  </div>
</body>