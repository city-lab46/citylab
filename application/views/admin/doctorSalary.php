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
              <th>Doc_Id</th>
              <th>Name</th>
              <th>Avg.working Hours</th>
              <th>Total Leaves</th>
              <th>Last Month Salary</th>
              <th>New Month Salary</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result=$data['result'];
              foreach ($result as $row):
            ?>
            <tr>
              <td> <?php echo $row["doctor_id"]; ?> </td>
              <td> <?php echo $row["first_name"] ." ".$row["last_name"]; ?></td>
              <td>  </td>
              <td>  </td>
              <td>  </td>
              <td>  </td>
              <td>
                &nbsp;<a href='<?php echo BASEURL.'/salary/edit?doctor_id='.$row['doctor_id']; ?>'><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;&nbsp;
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