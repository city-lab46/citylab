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
                        <th>Inventory ID</th>
                        <th>Tool Name</th>
                        <th>Count</th>
                        <th>Updated Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                        $result=$data['result'];
                      	foreach($result as $row) {
                			/*$created = date('Y-m-d ',strtotime($row['created']));
                            $updated = date('Y-m-d ',strtotime($row['updated']));*/
                	  ?>
                    <tr>
                        <td> <?php echo $row['inventory_id']?> </td>
                        <td> <?php echo $row['name']?> </td>
                        <td> <?php echo $row['count']?> </td>
                        <td> <?php echo $row['updated_date']?> </td>
                        <td>
                            &nbsp;<a href="<?php echo BASEURL.'/inventory/edit?inventory_id='.$row['inventory_id']; ?>"><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
                            &nbsp;<a href="<?php echo BASEURL.'/inventory/delete?inventory_id='.$row['inventory_id']; ?>"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
                        </td>
                    </tr>
                      <?php
                		}
                	  ?>
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