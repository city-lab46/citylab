<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>

  <div class="main">

      <form action="" method="GET">
        <div class="searchBox">
          <input type="search" name="search" placeholder="Search"><i class="fa fa-search"></i>
        </div>                
      </form>

      <table class="styled-table">
        <thead>
          <tr>
            <th>Doctor_Id</th>
            <th>Doctor_Id</th>
            <th>Doctor_Id</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            $result=$data['result'];
            foreach($result as $row) {
          ?>
          <tr>
            <td> <?php echo $row["emp_id"]; ?> </td>
            <td> <?php echo $row["doctor_id"]; ?> </td>
            <td> <?php echo $row["patient_id"]; ?> </td>
            <td>
              &nbsp;<a href=""><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
              &nbsp;<a href=""><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

  </div>
</body>

</html>