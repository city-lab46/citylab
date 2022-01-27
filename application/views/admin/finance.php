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
            <br><th>Account</th>
            <th>Description</th>
            <th>Date</th>
            <th>Income Money</th>
            <th>Expense Money</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              $result=$data['result'];
              foreach($result as $row) {
            ?>
            <tr>
              <td> <?php echo $row["account"]; ?> </td>
              <td> <?php echo $row["description"]; ?> </td>
              <td> <?php echo $row["date"]; ?> </td>
              <td> <?php echo $row["income_money"]; ?> </td>
              <td> <?php echo $row["expense_money"]; ?> </td>
              <td>
                &nbsp;<a href="<?php echo BASEURL.'/finance/edit?finance_id='.$row['finance_id']; ?>"><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;
                &nbsp;<a href="<?php echo BASEURL.'/finance/delete?finance_id='.$row['finance_id']; ?>"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
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