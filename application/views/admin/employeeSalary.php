<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>   

    <div class="main">

        <form action="" method="GET">
          <div class="searchBox">
            <input type="search" name="search" placeholder="Enter Employee ID"><i class="fa fa-search"></i>
          </div>
        </form>

        <table class="styled-table">
          <thead>
            <tr>
              <br><th>Emp_Id</th>
              <th>Name</th>
              <th>Type</th>
              <th>Avg.working Hours</th>
              <th>Total Leaves</th>
              <th>Total Salary</th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>
            <?php 
              $result=$data['result'];
              foreach ($result as $row): 
            ?>
            <tr>
              <td> <?php echo $row["emp_id"]; ?> </td>
              <td> <?php echo $row["first_name"] ." ".$row["last_name"]; ?></td>
              <td> <?php echo $row["type"]; ?> </td>
              <td> </td>
              <td> </td>
              <td> <?php echo $row["salary"]; ?> </td>
              <td>
                &nbsp;<a href='<?php echo BASEURL.'/salary/edit?emp_id='.$row['emp_id']; ?>'><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;&nbsp;
              </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>

    </div>
</body>
<script>
$(document).ready(function(){
			$(".delete-record").click(function(e){
				e.preventDefault();

				var confirmBox = confirm('Are you Sure?');

				if(confirmBox == true)
				{
					var getHref = $(this).attr('href');
					window.location.href=getHref;
				}


			});
		});
</script>
</html>