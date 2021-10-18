<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?>
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/test'?>">My Tests</a>
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
          <td><a href="#">Blood Report</a></td>
          <td>normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>Urine test</td>
          <td><a href="#">Urine Report</a></td>
          <td>normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>FBC</td>
          <td><a href="#">Blood Report</a></td>
          <td>High glucose</td>
        </tr>
        </tbody>
      </table>

    </div>  

  </div>
</body>