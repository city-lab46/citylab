<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
      <div class="search">
        <form action=" " method="post">
          <input type="text" name="search" placeholder="search" >
          <button type="submit" name="search_btn" class="fabtn" id="searchbtn" ><i class="fa fa-search fa-lg" ></i></button> 
        </form>
      </div>
    
      <div class="table-container">
     
        <table class="styled-table">
          <thead>
          <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Test Types</th>
            
            <th>Actions </th>
          </tr>
        </thead>

        
          <tbody >
          <tr>
            <td data-label = "patient_id" >P110</td>
            <td data-label = "name" >V.Hiruni</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >8.00 am</td>
            <td  data-label = "Test Type" >FBS </td>
            
            <td data-label = "#">
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td data-label = "patient_id" >P100</td>
            <td data-label = "name" >M.Nirushan</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >8.15 am</td>
            <td  data-label = "Test Type" >Hb </td>
            
            <td data-label = "#">
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td data-label = "patient_id" >P113</td>
            <td data-label = "name" >R.Sanjith</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >9.00 am</td>
            <td  data-label = "Test Type" >FBS </td>
            
            <td data-label = "#">
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td data-label = "patient_id" >P103</td>
            <td data-label = "name" >K.Sunil</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >9.15 am</td>
            <td  data-label = "Test Type" >FBS </td>
            <td data-label = "#">
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td data-label = "patient_id" >P003</td>
            <td data-label = "name" >Mr.Kumar</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >11.30 am</td>
            <td  data-label = "Test Type" >RBC </td>
            <td data-label = "#">
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td data-label = "patient_id" >P002</td>
            <td data-label = "name" >V.Nalin</td>
            <td  data-label = "date" >24-08-2021</td>
            <td  data-label = "time" >4.30 pm</td>
            <td  data-label = "Test Type" >RBC </td>
            <td data-label = "#" class="buttons" >
              <a href="#"  class="bttn1"><i class="fas fa-pen-square"></i></a>
              <a href="#"  class="bttn2"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        
        </tbody>
        </table>
      

    </div>  

  
</body>