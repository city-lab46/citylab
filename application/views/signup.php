<?php session_start();  ?>

<html lang="en">
<head>
    <title>City-Lab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png"/>
    <!-- Local Styles -->
    <link rel="stylesheet" href="assets/css/signup.css"/>

</head>

<body>
<div class="signupFrm">
    <form  action="../controller/signup.php" class="form" method="POST">
      <h3>Sign up</h3>
      
      <?php if (isset($_SESSION['signup-errors'])): ?>

            <div> 
                <?php foreach ($_SESSION['signup-errors'] as $error) {
                    echo "<strong> $error </strong><br/>";
                } ?>
            </div>
            <?php unset($_SESSION['signup-errors']);?>
      
      <?php endif;?> 

      <div class="inputContainer">
        <input type="text" name="firstname" id="firstname" class="input" placeholder="firstname">
        <label for="firstname" class="label">First Name</label>
      </div>
      <div class="inputContainer">
        <input type="text" name="lastname" id="lastname" class="input" placeholder="lastname">
        <label for="lastname" class="label">Last Name</label>
      </div>
      <div class="inputContainer">
        <input type="email" name="email" id="email" class="input" placeholder="email">
        <label for="email" class="label">Email</label>
      </div>
      <div class="inputContainer">
        <input type="text" name="username" id="username" class="input" placeholder="username">
        <label for="username" class="label">Username</label>
      </div>
      <div class="inputContainer">
        <input type="password" name="password" id="password" class="input" placeholder="password">
        <label for="password" class="label">Password</label>
      </div>
      <div class="inputContainer">
        <input type="password" name="confirmPassword" id="confirmPassword" class="input" placeholder="Repeat Password">
        <label for="confirmPassword" class="label">Confirm Password</label>
      </div>
      <div class="inputContainer">
        <input type="date" name="dob" id="dob" class="input" placeholder="">
        <label for="dob" class="label">Date of Birth</label>
      </div>

      <!-- <div class="form-group">
                    <label class="form-label mt-4">Gender</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="m" checked>Male
                        </label>
                        <label class="form-check-label mx-5">
                            <input type="radio" class="form-check-input" name="gender" value="f">Female
                        </label>
                    </div>
          </div> -->

      <div class="inputContainer">
        <input type="text" name="contact" id="contact" class="input" placeholder="Enter Phone">
        <label for="contact" class="label">Contact</label>
      </div>
      

      <input type="submit" class="submitBtn" name="submit" value="Sign up">
    </form>
  </div>       

</body>

</html>
