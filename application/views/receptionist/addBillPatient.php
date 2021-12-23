<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
      
      <div class="searchBox">
        <form action=" <?php echo BASEURL.'/bill/searchPatient'?>" method="post">
          <input type="search" name="search" placeholder="search" >
          <i class="fa fa-search fa-lg" ></i> 
        </form>
      </div>
    
      <div class="table-container">
        
        <table class="styled-table">
          <thead>
            <tr>
              <th>Patient ID</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody >
            <tr>
              <td data-label = "patient_id" >P110</td>
              <td data-label = "name" >V.Hiruni</td>
              <td  data-label = "contact" >0771112233</td>
              <td  data-label = "email" >hir@gmail.com</td>        
              <td data-label = "#">
                <a href="<?php echo BASEURL.'/bill/addBillForm'?>"  class="bttn1">Create Bill</i></a>   
              </td>
            </tr>
            <tr>
              <td data-label = "patient_id" >P100</td>
              <td data-label = "name" >M.Nirushan</td>
              <td  data-label = "contact" >0771112243</td>
              <td  data-label = "email" >niru@gmail.com</td>
              <td data-label = "#">
                <a href="<?php echo BASEURL.'/bill/addBillForm'?>"  class="bttn1">Create Bill</i></a>               
              </td>
            </tr>
            <tr>
              <td data-label = "patient_id" >P113</td>
              <td data-label = "name" >R.Sanjith</td>
              <td  data-label = "contact" >0772112233</td>
              <td  data-label = "email" >sanjith@gmail.com</td>
              <td data-label = "#">
                <a href="<?php echo BASEURL.'/bill/addBillForm'?>"  class="bttn1">Create Bill</i></a>                
              </td>
            </tr>
            <tr>
              <td data-label = "patient_id" >P002</td>
              <td data-label = "name" >V.Nalin</td>
              <td  data-label = "contact" >0775112233</td>
              <td  data-label = "email" >nalin@gmail.com</td>
              <td data-label = "#" class="buttons" >
                <a href="<?php echo BASEURL.'/bill/addBillForm'?>"  class="bttn1">Create Bill</i></a>    
              </td>
            </tr>        
          </tbody>
        </table>
      
      </div>  
    </div> 
 
</body>