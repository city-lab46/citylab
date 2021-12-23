<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>

<?php include "components/sidenav.php"; ?>
    
    <div class="main">
    <div class="searchBox">
    <form action=" " method="post">
        <input type="search" name="search" placeholder="search" >
        
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