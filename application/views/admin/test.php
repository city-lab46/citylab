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
                    <th>Test ID</th>
                    <th>Test Type Name</th>
                    <th>Description</th>
                    <th>Ref.Range</th>
                    <th>Cost</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result=$data['result'];
                  	foreach($result as $row) {
                ?>
                <tr>
                    <td> <?php echo $row["test_id"]; ?> </td>
                    <td> <?php echo $row["name"]; ?> </td>
                    <td> <?php echo $row["description"]; ?> </td>
                    <td> <?php echo $row["ref_range"]; ?> </td>
                    <td> <?php echo $row["cost"]; ?> </td>
                    <td>
                        &nbsp;<a href="<?php echo BASEURL.'/test/edit?test_id='.$row['test_id']; ?>"><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
                        &nbsp;<a href="<?php echo BASEURL.'/test/delete?test_id='.$row['test_id']; ?>"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
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

				if(confirmBox == true)
				{
					var getHref = $(this).attr('href');
					window.location.href=getHref;
				}


			});
		});
</script>
</html>