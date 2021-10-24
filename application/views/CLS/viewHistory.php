<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/viewHistory.css'?>"/>
<?php include "components/header.php"; ?>


    <div class="nav">
      <a  href="<?php echo BASEURL.'/createReport'?>"><i class="fas fa-plus-circle"></i>Create Report</a>
      <a href="<?php echo BASEURL.'/viewHistory'?>" class="activ">View History</a> 
    </div>

    <div class="main">
      
      <div class="search">
        
        <form action=" <?php echo BASEURL.'/viewHistory/search'?>" method="post">
          <input type="text" name="search" placeholder="search" >
          <button type="submit" name="search_btn" class="fabtn" id="searchbtn" >
            <i class="fa fa-search fa-lg" ></i>
          </button>
        </form>
      
      </div>
      <div class="table-container">
      
        <table id="sample_data" class="table" >
          <thead>
          <tr>
            <th>ID</th>
            <th>Created Date</th>
            <th>Result</th>
            <th>Unit</th>
            <th>Specimend Examined </th>
            <th>Test</th>
            <th>Actions</th>
          </tr>
        </thead>
        <?php 
 
 $datas = $this->result;
 

  if(!empty($datas)){
    foreach($datas as $data){
    $report_id = $data['report_id'];
    $created_date= $data['created_date'];
    $result = $data['result'];
    
    $unit = $data['unit'];
    $speci_examined = $data['speci_examined'];
    $test = $data['test'];
  ?>
  <tbody id="myTable">
           
          <tr>        
            <td data-label = "ID" ><?php echo $report_id; ?></td>
            <td data-label = "Created Date" ><?php echo $created_date; ?></td>
            <td  data-label = "Result" ><?php echo $result; ?></td>
            <td  data-label = "Unit" ><?php echo $unit; ?></td>
            <td data-label = "specimend examined" ><?php echo $speci_examined; ?></td>
            <td  data-label = "Test" ><?php echo $test; ?></td>
            <td data-label = "#">
             
              <a href="<?php echo BASEURL.'/edit?report_id='.$data['report_id'].''?>" ><i class="fas fa-pen-square"></i></a>
              <a href="<?php echo BASEURL.'/edit/delete?report_id='.$data['report_id'].''?>" ><i class="fas fa-trash-alt"></i></a>
              
            </td>
          </tr>
          
          <?php
        }   
              }else{
                echo "no such report";
            }
          

              ?>
        
        
        </tbody>
        </table>
      </div>
      <div class="pages">
        <a href=" "  class="btn1">Back</a>
        
        
      </div>
     

    </div>  

  </div>
</body>
</html>