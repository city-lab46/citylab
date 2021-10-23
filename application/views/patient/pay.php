<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/book.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?>
    
    <div class="nav">
      <a href="<?php echo BASEURL.'/book'?>">Book Test</a>
      <a class="activ" href="<?php echo BASEURL.'/pay'?>">Pay Test</a>
    </div> 

    <div class="main">
      <div class="box">
      
      <?php 
        $result=$data['result'];
        foreach ($result as $row): 
      ?>
        <form action="https://sandbox.payhere.lk/pay/checkout" method="post">
          <div class="form">

              <input type="hidden" name="merchant_id" value="1218755">
              <input type="hidden" name="return_url" value="">
              <input type="hidden" name="cancel_url" value="">
              <input type="hidden" name="notify_url" value="">
              <input type="hidden" name="order_id" value="ItemNo12345">
              <input type="hidden" name="items" value="Door bell wireless">
              <input type="hidden" name="currency" value="LKR">
              <input type="hidden" name="amount" value="1000">
              <input type="hidden" name="first_name" value="Saman">
              <input type="hidden" name="last_name" value="Perera">
              <input type="hidden" name="email" value="samanp@gmail.com">
              <input type="hidden" name="phone" value="0771234567">
              <input type="hidden" name="address" value="No.1, Galle Road">
              <input type="hidden" name="city" value="Colombo">
              <input type="hidden" name="country" value="Sri Lanka">  
              
              <div class="field">
                <p>Name<span class="data"><?php echo "Mr. ".$_SESSION['first_name']." ".$_SESSION['last_name'];?></span></p>
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
          </div>

          <div class="btn">
            <button class="button3" type="submit"><i class="fas fa-credit-card"></i>Pay now</button>
          </div>
     
        </form>
        <?php endforeach;?>
      </div>

    </div>
  </div>
</body>