<?php $errors=$data['errors'] ?> 
<html lang="en">
<head>
    <title>CityLab</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <!-- Local Styles -->
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/signup.css'?>"/>

</head>

<body>
<div class="signupFrm">
    <form  action="<?php echo BASEURL.'/signup/submit'?>" class="form" method="POST">
      <h3>Sign up</h3>
      
      <div class="inputContainer">
        <input type="text" name="firstname" id="firstname" class="input" placeholder="firstname">
        <label for="firstname" class="label">First Name</label>
        <span class="error"><?php echo $errors["firstname"];?></span>
      </div>
      <div class="inputContainer">
        <input type="text" name="lastname" id="lastname" class="input" placeholder="lastname">
        <label for="lastname" class="label">Last Name</label>
        <span class="error"><?php echo $errors["lastname"];?></span>
      </div>
      <div class="inputContainer">
        <input type="email" name="email" id="email" class="input" placeholder="email">
        <label for="email" class="label">Email</label>
        <span class="error"><?php echo $errors["email"];?></span>
      </div>
      <div class="inputContainer">
        <input type="text" name="username" id="username" class="input" placeholder="username">
        <label for="username" class="label">Username</label>
        <span class="error"><?php echo $errors["username"];?></span>
      </div>
      <div class="inputContainer">
        <input type="password" name="password" id="password" class="input" placeholder="password">
        <label for="password" class="label">Password</label>

      </div>
      <div class="inputContainer">
        <input type="password" name="confirmPassword" id="confirmPassword" class="input" placeholder="Repeat Password">
        <label for="confirmPassword" class="label">Confirm Password</label>
        <span class="error"><?php echo $errors["password"];?></span>
      </div>
      <div class="inputContainer">
        <input type="date" name="dob" id="dob" class="input" placeholder="">
        <label for="dob" class="label">Date of Birth</label>
        <span class="error"><?php echo $errors["dob"];?></span>
      </div>

      <div class="inputContainer">
        <input type="radio" name="gender" id="male" value="male">
        <label for="male" >male</label>
        <input type="radio" name="gender" id="female"  value="female">
        <label for="female" >female</label>
        <span class="error"><?php echo $errors["gender"];?></span>
      </div>

      <div class="inputContainer">
        <input type="text" name="contact" id="contact" class="input" placeholder="Enter Phone">
        <label for="contact" class="label">Contact</label>
        <span class="error"><?php echo $errors["contact"];?></span>
      </div>
      

      <input type="submit" class="submitBtn" name="submit" value="Sign up">
    </form>
  </div>       

</body>

</html>
