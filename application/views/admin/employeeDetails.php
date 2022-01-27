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
                    <th>Emp_Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Salary</th>
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
                        <td> <?php echo $row["emp_id"]; ?> </td>
                        <td> <?php echo $row["first_name"]; ?> </td>
                        <td> <?php echo $row["last_name"]; ?> </td>
                        <td> <?php echo $row["type"]; ?> </td>
                        <td> <?php echo $row["gender"]; ?> </td>
                        <td> <?php echo $row["contact"]; ?> </td>
                        <td> <?php echo $row["salary"]; ?> </td>
                        <td> <?php echo $row["dob"]; ?> </td>
                        <td> <?php echo $diff->format('%y');?> y </td>
                        <td>
                            &nbsp;<a href="<?php echo BASEURL.'/employee/edit?user_id='.$row['user_id']; ?>"><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
                            &nbsp;<a href="<?php echo BASEURL.'/employee/delete?user_id='.$row['user_id']; ?>"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
                        </td>
                    </tr>
                    <?php 
                        } 
                    ?> 
                </tbody>
            </table>

    </div>
</div>    
</body>

<script>
    $(document).ready(function(){
		$(".delete-record").click(function(e){
			e.preventDefault();
			var confirmBox = confirm('Are you Sure?');
			if(confirmBox == true){
				var getHref = $(this).attr('href');
				window.location.href=getHref;
			}
		});
	});
</script>

</html>