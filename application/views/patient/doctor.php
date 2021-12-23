<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
        <table class="styled-table">
        
            <thead>
              <tr>
                <th>Doctor</th>
                <th>Specialization</th>
                <th>Email</th>
                <th>Contact</th>
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
                <td><?php echo  $row["email"] ;?></td>
                <td><?php echo  $row["contact"] ;?></td>
              </tr>
            <?php endforeach;?> 
            
            </tbody>
        </table>
            
    </div> 
</body>
</html>