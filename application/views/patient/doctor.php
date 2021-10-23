<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/> 
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?> 
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/doctor'?>">Doctors</a>
      <a href="<?php echo BASEURL.'/doctor/mydoctor'?>">My Doctor</a>
    </div>

    <div class="main">

      <table class="styled-table">
        
        <thead>
          <tr>
            <th>Doctor</th>
            <th>Specialization</th>
            <th>Articles</th>
          </tr>
        </thead>
        <tbody>

        <?php 
          $result=$data['result'];
          foreach ($result as $row): 
        ?>
          <tr>
            <td><?php echo "Dr. " .$row["first_name"] . "&nbsp" . $row["last_name"] ;?></td>
            <td><?php echo  $row["specialization"] ;?></td>
            <td><a href="<?php echo BASEURL.'/article'?>"><?php echo $row["title"];?></a></td>
          </tr>
        <?php endforeach;?> 
        
        </tbody>
      </table>      
      
    </div>  

  </div>
</body>