<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
        
      <div class="contents">
        <div class="container">

          <form action="<?php echo BASEURL.'/patient/submit'?>" method= "post">

            <div class="row">
              <div class="col-25">
                <label for="fname">First Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="First Name">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="lname">Last Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Last Name">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="username">User Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="username" name="username" placeholder="username">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="contact">Contact No</label>
              </div>
              <div class="col-75">
                <input type="text" id="contact" name="contact" placeholder="Contact No">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="email">Email</label>
              </div>
              <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Email">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="password">Password</label>
              </div>
              <div class="col-75">
                <input type="password" id="password" name="password" placeholder="password">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="confirm_password">Confirm Password</label>
              </div>
              <div class="col-75">
                <input type="password" id="confirm_password" name="confirmPassword" placeholder="confirm password">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="dob">Date Of Birth</label>
              </div>
              <div class="col-25">
                <input type="date" id="dob" name="dob" value="dd/mm/yyyy">
              </div>
            </div>

            <!-- <div class="gender-age"> -->

            <div class="row" >
              <div class="col-25">
                <label for="gender">Gender</label>
              </div>
              <div class="col-75">
                <select id="gender" name="gender" placeholder="--select--">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>

            <div class="row">
              <input type="submit" name="submit" value="Submit">
              <input type="submit" name="cancel" value="Cancel">
            </div>
  
          </form>

        </div>
      </div>

    </div>
  
</body>