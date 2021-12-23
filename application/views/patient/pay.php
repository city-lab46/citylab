<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/formInput.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
        
        <form class="form" action="https://sandbox.payhere.lk/pay/checkout" method="post">
            
            <?php $result=$data['result']; ?>
            
            <input type="hidden" name="merchant_id" value="">    <!-- Replace your Merchant ID -->
            <input type="hidden" name="return_url" value="http://7ba9a4e322be.ngrok.io/payhere/payhandler.php">
            <input type="hidden" name="cancel_url" value="http://7ba9a4e322be.ngrok.io">
            <input type="hidden" name="notify_url" value="http://7ba9a4e322be.ngrok.io">  
            <!-- <input type="hidden" name="order_id" value="<?php echo $data['adId']; ?>">
            <input type="hidden" name="items" value="Advertisement ID : <?php echo $data['adData']['advertisementID']; ?>"><br>
            <input type="hidden" name="currency" value="LKR">
            <input type="hidden" name="amount" value="<?php echo $data['adPrice']+$data['adPay']; ?>">  
            <input type="hidden" name="first_name" value="<?php echo $data['jobData']['userName']; ?>"> -->
            <input type="hidden" name="last_name" value="">
            <input type="hidden" name="email" value="samanp@gmail.com">
            <input type="hidden" name="phone" value="0771234567">
            <input type="hidden" name="address" value="No.1, Galle Road">
            <input type="hidden" name="city" value="Colombo">
            <input type="hidden" name="country" value="Sri Lanka">

            <div class="inputContainer">
                <input type="text" name="name" id="name" class="input" value="<?php echo $_SESSION['first_name'] . " ". $_SESSION['last_name'];?>" readonly>
                <label for="name" class="label">Name</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="date" id="date" class="input" value="<?php echo $result[0][2]; ?>" readonly>
                <label for="date" class="label">Date</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="test" id="test" class="input" value="<?php echo $result[0][7]; ?>" readonly>
                <label for="test" class="label">Test</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="cost" id="cost" class="input" value="<?php echo $result[0][8]; ?>" readonly>
                <label for="cost" class="label">Amount (LKR)</label>
            </div>
    
            <button class="submitBtn">Pay</button>

        </form>

    </div> 
</body>
</html>