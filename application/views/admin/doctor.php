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
            <!-- <th>Register No</th> -->
            <th>Name</th>
            <th>Specialization</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $result=$data['result'];
            foreach($result as $row) {
              $dob = date('d-m-Y',strtotime($row['dob']));
              $today = date("Y-m-d");
              $diff = date_diff(date_create($dob), date_create($today));
          ?>
          <tr>
            <td> <?php echo $row["doctor_id"]; ?> </td>
            <!-- <td> <?php echo $row["reg_no"]; ?> </td> -->
            <td> <?php echo $row["first_name"]." ".$row["last_name"]; ?> </td>
            <td> <?php echo $row["specialization"]; ?> </td>
            <td> <?php echo $row["gender"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["contact"]; ?> </td>
            <td> <?php echo $row["dob"]; ?> </td>
            <td> <?php echo $diff->format('%y');?> y </td>
            <td>
              &nbsp;<a href="<?php echo BASEURL.'/doctor/edit?doctor_id='.$row['doctor_id']; ?>"><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
              &nbsp;<a href="<?php echo BASEURL.'/doctor/delete?user_id='.$row['user_id']; ?>"class="delete-record"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

  </div>

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
</body>
</html>