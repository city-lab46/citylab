<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/forms.css'?>"/>
<?php include "components/sidenav.php"; ?>  

<div class="main">
  <div class="contents">
    <div class="container">
     <form action="" method="post">
            <div class="form-group">
             <div class="row">
               <div class="col-25">
                 <label for="first_name">First Name</label>
               </div>
               <div class="col-75">
                 <input type="text" id="first_name" name="first_name" placeholder="Enter First Name.." class="form-control" required>
               </div>
             </div>
             </div>
              <div class="form-group">
             <div class="row">
                       <div class="col-25">
                         <label for="last_name">Last Name</label>
                       </div>
                       <div class="col-75">
                         <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name.." class="form-control" required>
                       </div>
                     </div>
                     </div>
                     <div class="form-group">
        <div class="row">
                  <div class="col-25">
                    <label for="title">Specialization</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="title" name="title" placeholder="Enter Specialization.." class="form-control" required>
                  </div>
                </div>
                </div>
        <div class="form-group">
                       <div class="row">
                                         <div class="col-25">
                                           <label for="username">Username</label>
                                         </div>
                                         <div class="col-75">
                                           <input type="text" id="username" name="username" placeholder="Enter Username.." class="form-control" required>
                                         </div>
                                       </div>
                                       </div>
                   <div class="form-group">
               <div class="row">
                 <div class="col-25">
                   <label for="contact">Contact Number</label>
                 </div>
                 <div class="col-75">
                   <input type="text" id="contact" name="contact" placeholder="Enter Contact Number.." class="form-control" required>
                 </div>
               </div>
                </div>
        <div class="form-group">
        <div class="row">
                  <div class="col-25">
                    <label for="email">Email</label>
                  </div>
                  <div class="col-75">
                    <input type="email" id="email" name=" email" placeholder="Enter Email.." class="form-control" required>
                  </div>
                </div>
                 </div>
         <div class="form-group">
         <div class="row">
                  <div class="col-25">
                    <label for="password">Password</label>
                  </div>
                  <div class="col-75">
                    <input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control" required>
                  </div>
                </div>
                 </div>
                 <div class="form-group">
        <div class="row">
                  <div class="col-25">
                    <label for="Confirm Password">Confirm Password</label>
                  </div>
                  <div class="col-75">
                    <input type="password" id="Confirm Password" name="Confirm Password" placeholder="Confirm Password.." class="form-control" required>
                  </div>
                </div>
                 </div>

        <div class="form-group">
               <div class="row">
                 <div class="col-25">
                   <label for="dob">DOB</label>
                 </div>
                 <div class="col-75">
                   <input type="date" id="dob" name="dob" placeholder="Enter DOB.." class="form-control" required>
                 </div>
               </div>
                </div>
                <div class="form-group">
               <div class="row">
                     <div class="col-25">
                       <label for="gender">Gender</label>
                     </div>
                     <div class="col-75">
                       <select id="gender" name="gender">
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>

                       </select>
                     </div>
                   </div>
                    </div>
       <div class="form-group">
               <div class="row">
                 <div class="col-25">
                   <label for="address">Address</label>
                 </div>
                 <div class="col-75">
                   <input type="text" id="address" name="address" placeholder="Enter Address.." class="form-control" required>
                 </div>
               </div>
                </div>
               <div class="row">
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  <input type="reset" class="btn btn-primary" name="cancel" value="Cancel">
               </div>
      </form>
    </div>

  </div>
</div>
</body>

</html>