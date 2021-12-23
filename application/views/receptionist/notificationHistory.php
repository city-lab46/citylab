<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
    <div class="search">
    <form action=" " method="post">
        <input type="text" name="search" placeholder="search" >
        <button type="submit" name="search_btn" class="fabtn" id="searchbtn" >
				<i class="fa fa-search fa-lg" ></i>
			</button>
      </div>
    <div class="table-container">
        
        <table class="styled-table">
          <thead>
          <tr>
           <th>ID</th>
            <th>Message</th>
            <th>Created Date</th>
            
            
            
          </tr>
        </thead>
        <tbody >
           
          <tr>        
            <td data-label = "ID" >110</td>
            <td data-label = "Message" >Coming 22nd of August lab will be closed</td>
            <td data-label = "Created Date" >10-08-2021</td>
            
          </tr>
          <tr>        
          <td data-label = "ID" >113</td>
            <td data-label = "Message" >Coming 10th of July lab will be closed from 9.00a.m to 1.00p.m</td>
            <td data-label = "Created Date" >4-07-2021</td>
           
          </tr>
          <tr>        
          <td data-label = "ID" >114</td>
            <td data-label = "Message" >Coming 12th of June lab will be closed</td>
            <td data-label = "Created Date" >08-06-2021</td>
            
          </tr>
          
        </tbody>
        </table>
      

    </div>  

  </div>
</body>