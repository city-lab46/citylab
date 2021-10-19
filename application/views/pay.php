<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/book.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?>
    
    <div class="nav">
      <a href="<?php echo BASEURL.'/book'?>">Book Test</a>
      <a class="activ" href="<?php echo BASEURL.'/pay'?>">Pay Test</a>
    </div> 

    <div class="main">
      <div class="box">
        <div class="form">

          <?php 
            $result=$data['result'];
            foreach ($result as $row): 
          ?>
            <div class="field">
              <p>Name<span class="data"><?php echo "Mr. " . $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></span></p>
            </div>

            <div class="field">
              <p>Test<span class="data"><?php echo  $row["name"] ;?></span></p>
            </div>
            <div class="field">
              <p>Date<span class="data"><?php echo  $row["created_date"] ;?></span></p>
            </div>
            <div class="field">
              <p>Contact<span class="data"><?php echo $_SESSION['contact'];?></span></p>
            </div>
            <div class="field">
              <p>Pay Amount<span class="data"><?php echo  $row["cost"] ;?></span></p>
            </div>
          <?php endforeach;?> 
        </div>

        <div class="btn">
          <button class="button3" onclick="window.location.href='https://sandbox.payhere.lk/pay/checkout'"><i class="fas fa-credit-card"></i>Pay now</button>
        </div>

      </div>

    </div>  

  </div>
</body>