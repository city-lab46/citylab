<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/forms.css'?>"/>
<?php include "components/sidenav.php"; ?>

  <div class="main">
    <div class="contents">

      <form action="" method="GET">
        <div class="searchBox">
          <input type="text" name="patient_id" placeholder="Search" value="<?php echo $_GET['patient_id']; ?>" class="form-control" >
          <button type="submit" ><i class="fa fa-search"></i></button>
        </div>
      </form>

      <div class="container">
        <form action="" method="GET">
          <center><label><b>About Patient Details</b></label></center>
          <center><img src="images/about_patient.jpg"  style="display:flex;width:200px;height:150px;"></center>
          
          <?php
            $patient_id = $_GET['patient_id'];
            $query = "SELECT * FROM doctor_patient inner join doctor on doctor_patient.doctor_id=doctor.doctor_id inner join user on doctor.user_id=user.user_id WHERE patient_id='$patient_id' ";
            $result=$data['result'];
            foreach($result as $row) {
          ?>
          
          <div class="row">
            <div class="col-25"><label for="Name">Sent by Dr.</label></div>
            <div class="col-75"><input type="text"  placeholder="name" value="Dr. <?= $row['first_name']; ?> <?= $row['last_name']; ?>" class="form-control"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="Specialization">Patient ID</label></div>
            <div class="col-75"><input type="text" value="<?= $row['patient_id']; ?>" class="form-control"  ></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="Contact Number">Patient Name</label></div>
            <div class="col-75"><input type="text" value="<?= $row['patient_name']; ?>" class="form-control" ></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="Description">Description</label></div>
            <div class="col-75"><input type="text"  value="<?= $row['about_patient']; ?>" class="form-control"  style="height:200px" ></div>
          </div>

          <?php
            }
          ?>

          <div class="row">
            <input type="submit" value="Send">
            <input type="submit" value="Edit">
            <input type="reset" value="Cancel">
          </div>
        
        </form>
      </div>

    </div>
  </div>

</body>

</html>