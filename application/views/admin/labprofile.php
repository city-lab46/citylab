<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/formInput.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/settings.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
        
        <?php $result=$data['result']; ?>

        <form class="form" action="<?php echo BASEURL.'/settings/updateLab'?>" method="post">
        
            <div class="inputContainer">
                <input type="text" name="name" id="name" class="input" value="<?php echo $result[0]['name']; ?>">
                <label for="name" class="label">Name</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="email" id="email" class="input" value="<?php echo $result[0]['email']; ?>">
                <label for="email" class="label">Email</label>
            </div>    
            <div class="inputContainer">
                <input type="text" name="address" id="address" class="input" value="<?php echo $result[0]['address']; ?>">
                <label for="address" class="label">Address</label>
            </div>
            <div class="inputContainer">
                <input type="number" name="contact" id="contact" class="input" value="<?php echo $result[0]['contact']; ?>">
                <label for="contact" class="label">Contact</label>
            </div>
    
            <button class="submitBtn">Submit</button>
        </form>
        
    </div> 
</body>
</html>