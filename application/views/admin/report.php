<!-- this has to be on main folder?? -->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Report</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/report.css'?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    </head>

    <body id="report">
       <page size="A4">
         <div class="header">
           <header>
              <img src="<?php echo BASEURL.'/public/assets/img/favicon.png'?>" alt=""></img>
              <h1> CITY LAB</h1>
              <div class="address">
                <p># 114, D.S. SENANAYAKE MW, PANADURA,SRI LANKA.<br> <p>TEL : 0385686844, HOT LINE:071-4411187<br>E-mail : citylab@yahoo.com</p>
              </div>

           </header>
         </div>
         <div class="deta">
          <hr class="solid">
            <div class="column">
              <table>
            
            <?php   
              $result=$data['result'];
      
              $created_date = date('d-m-Y',strtotime($result[0]['created_date']));
              $dob = date('d-m-Y',strtotime($result[0]['dob']));
              $today = date("Y-m-d");
              $diff = date_diff(date_create($dob), date_create($today));
            ?>

               <tr>
                 <td>NAME OF THE PATIENT  </td>
                 <td> :- MR. <?php echo $result[0]['first_name'];?></td>
               </tr>
               <tr>
                 <td>DATE  </td>
                 <td> :- <?php echo $created_date;?></td>
               </tr>
               <tr>
                 <td>SPECIMEN EXAMINED  </td>
                 <td> :- <?php echo $result[0]['speci_examined'];?></td>
               </tr>
               <tr>
                 <td>NAME OF THE TEST  </td>
                 <td> :- <?php echo $result[0]['test'];?></td>
               </tr>
             </table>
           </div>
           <div class="column" >
             <table>
               <tr>
                 <td>PATIENT ID  </td>
                 <td> :- <?php echo $result[0]['patient_id'];?></td>
               </tr>

               <tr>
                 <td>AGE  </td>
                 <td> :- <?php echo $diff->format('%y');?> Y</td>
               </tr>
               <tr>
                 <td>TEST ID :- </td>
                 <td> :- <?php echo $result[0]['report_id'];?></td>
               </tr>
             </table>
           </div>

         </div>

         <h2 class="bar"> LABORATORY REPORT<br></h2>
         <div class="table">
           <table class="report">
             <tr>
               <th>TEST</th>
               <th>RESULT</th>
               <th>UNIT</th>
               <th>REFERENCE RANGE</th>
             </tr>
             <tr>
               <th><?php echo $result[0]['test'];?></th>
               <th><?php echo $result[0]['result'];?></th>
               <th><?php echo $result[0]['unit'];?>/dl</th>
               <th><?php echo $result[0]['ref_range'];?></th>
             </tr>
 
           </table>
         </div>
         <div class="footer">
           <hr class="solid">
           <div class="column1">
             <table>
               <tr>
                 <th><br>Mr. Bandula Pethangoda <br>Registered Medical Laboratory Technologist <br>
                   Diploma in Medical Laboratory Technology <br>(MLT)Gov. Reg.No : 0684</th>
               </tr>
             </table>
           </div>
           <div class="column1">
             <table>
               <tr>
                 <th><br>Ms.Anula Jayasinghe Pethangoda <br>Registered Medical Laboratory Technologist <br>
                   Diploma in Medical Laboratory Technology <br>(MLT)Gov. Reg.No : 0683 <br> Retaired Microbiology Tutor NIHS</th>
               </tr>
             </table>
           </div>

       </page>

  </div>
</div>
</body>

</html>