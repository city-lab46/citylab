<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>
    <?php
    $patient_id = $this->patient_id;
    $datas = $this->result;
    if(!empty($datas)){
        foreach($datas as $results){
          
        
    ?>
    <div class="main">
        
      <div class="contents">
        <div class="container">

          <form action="<?php echo BASEURL.'/patient/edit?patient_id='.$patient_id; ?>" method= "post">
          
            <div class="row">
              <div class="col-25">
                <label for="fname">First Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" value="<?php echo $results['first_name'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="lname">Last Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" value="<?php echo $results['last_name'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="username">User Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="username" name="username" value="<?php echo $results['username'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="contact">Contact No</label>
              </div>
              <div class="col-75">
                <input type="text" id="contact" name="contact" value="<?php echo $results['contact'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="email">Email</label>
              </div>
              <div class="col-75">
                <input type="email" id="email" name="email" value="<?php echo $results['email'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="password">Password</label>
              </div>
              <div class="col-75">
                <input type="password" id="password" name="password" value="<?php echo $results['password'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="confirm_password">Confirm Password</label>
              </div>
              <div class="col-75">
                <input type="password" id="confirm_password" name="confirmPassword" value="<?php echo $results['password'];?>">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="dob">Date Of Birth</label>
              </div>
              <div class="col-25">
                <input type="date" id="dob" name="dob" value="<?php echo $results['dob'];?>">
              </div>
            </div>

            <!-- <div class="gender-age"> -->

            <div class="row" >
              <div class="col-25">
                <label for="gender">Gender</label>
              </div>
              <div class="col-75">
                <select id="gender" name="gender" value="<?php echo $results['gender'];?>">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <?php
            }
        }
        ?>
            <div class="row">
              <input type="submit" name="update" value="Submit">
              <input type="submit" name="cancel" value="Cancel">
            </div>
  
          </form>

        </div>
      </div>

    </div>
  
</body>