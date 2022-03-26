<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/bill.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
<body id="report">
<div class="main">

<div class="contents" id="report">
<button onclick="printDiv('report')">Print only the above div</button>    
        

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
         <h2 class="bar"> TESTING INVOICE<br></h2>
         <div class="deta">
         
           <div class="column">

             <table>
             <?php
                $item_no = 1;
                $patient_id = $_SESSION['patientID'];
                $datas = $this->result;
                  if(!empty($datas)){
                   foreach($datas as $data){
                    $bill_id = $data['bill_id'];
                    $created_date = $data['created_date'];
                    
                    $created_date  = (string) $created_date;
                    $created_time = (string) $created_date;
                    $created_time = strtotime($created_time);
                    $total_payment = $data['total_payment'];
                    $first_name = $data['first_name'];
                    
                    
              ?> 
<hr class="solid">
               <tr>
                  <td>NAME OF THE PATIENT  </td>
                  <td> :- MR. <?php echo $first_name;?></td>
               </tr>
               <tr>
                 <td>DATE  </td>
                 <td> :- <?php echo date('Y:m:d', strtotime($created_date));?></td>
               </tr>
               <tr>
                 <td>TIME </td>
                 <td> :- <?php echo date('H:i:s', $created_time);?></td>
               </tr>
               
             </table>
           </div>
           <div class="column" >
             <table>
               <tr>
                 <td>PATIENT ID  </td>
                 <td> :- <?php echo $patient_id;?></td>
               </tr>
               <tr>
                 <td>BILL ID :- </td>
                 <td> :- <?php echo $bill_id;?></td>
               </tr>
             </table>
           </div>

         </div>
<?php
                   }}
?>
         
         <div class="table">
           <table class="report">
             <tr>
               <th>#</th>
               <th>TEST TYPE</th>
               <th>UNIT PRICE</th>
               <th>QTY</th>
               <th>SALE PRICE</th>
               <!-- <th>UNIT</th> -->
               
             </tr>
            <tbody >
            <?php
              $i = 0;
               
              if(!empty($_SESSION['testCost'])){
                foreach($_SESSION['testCost'] as $testCosts[$i]){
                foreach($testCosts[$i] as $testCost){
                  
                  $test_name = $testCost['name'];
                  $test_cost = $testCost['cost'];
               
              ?>
            <tr class="records">
              
              
              <td ><?php echo $item_no; $item_no = $item_no + 1; ?></td>
              <td ><?php echo $test_name; ?></td>
              <td ><?php echo $test_cost; ?></td>
              <td >1</td>
              <td ><?php echo $test_cost; ?></td>
              
              
            </tr>
            <?php
              }
               $i = $i + 1;
              }

              }
              
              ?>
            <tr class="records">
              <td>PAYABLE AMOUNT</td>
              <td>Rs</td>
              <td><?php echo $total_payment; ?></td>
            </tr>
            <tbody> 
            
   
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

<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>
 
</body>