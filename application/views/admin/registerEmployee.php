<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>   

    <div class="main">
      <div class="container">
        <form action="" method="post">
            
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" placeholder="Enter First Name.." class="form-control" required>
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name.." class="form-control" required>
          <label for="title">Type</label>
            <select id="title" name="title">
              <option value="CLS">CLS (Clinical Laboratory Scientist)</option>
              <option value="Receptionist">Receptionist</option>
            </select>
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter Username.." class="form-control" required>
          <label for="contact">Contact Number</label>
          <input type="text" id="contact" name="contact" placeholder="Enter Contact Number.." class="form-control" required>
          <label for="email">Email</label>
          <input type="email" id="email" name=" email" placeholder="Enter Email.." class="form-control" required>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control" required>
          <label for="Confirm Password">Confirm Password</label>
          <input type="password" id="Confirm Password" name="Confirm Password" placeholder="Confirm Password.." class="form-control" required>
          <label for="dob">Birthday</label>
          <input type="date" id="dob" name="dob" placeholder="Enter DOB.." class="form-control" required>
          <label for="gender">Gender</label>
            <select id="gender" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
          <input type="reset" class="btn btn-primary" name="reset" value="Cancel">
        </form>

      </div>
    </div>
  
</body>
</html>