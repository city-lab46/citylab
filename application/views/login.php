<html lang="en">

<head>
<title>City-Lab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <!-- Local Styles -->
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/login.css'?>"/>
    
</head>


<body>
    <div class="box">
        <h2>Sign in</h2>
        <p>Use your Account</p>
        <form action="<?php echo BASEURL.'/login/submit';?>" method="post">

            <?php if (isset($_SESSION['signup-message'])): ?>
            
                <div class="alert">
                    <?php
                    echo "<strong> " . $_SESSION['signup-message'] . " </strong><br/>";
                    unset($_SESSION['signup-message']);
                    ?>
                </div>

            <?php endif;?> 
    

            <?php if (isset($_SESSION['login-errors'])): ?>
          
                <div class="alert">
                    
                    <?php foreach ($_SESSION['login-errors'] as $error) {
                        echo "<strong> $error </strong><br/>";
                    } ?>
                </div>
            
                <?php unset($_SESSION['login-errors']);?>
            <?php endif;?>

            
            <div class="inputBox">
                <input type="text" id="username" placeholder="Username" name="username">
                <label for="username">Username</label>
            </div>
            <div class="inputBox">
                <input type="password" id="exampleInputPassword1" placeholder="Password" name="password">
                <label for="exampleInputPassword1">Password</label>
            </div>
            <input type="submit" name="login" value="Sign In">
        
        </form>
    </div>
</body>

</html>