<?php include "components/sidenav.php"; ?>

<style>
body{width:1000px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}
.demo-form-row{margin-top:20px;}
.demo-form-field{width:600px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>

    <div class="main">

    <?php 
      $result=$data['result'];
    ?>
        <div class="contents">

            <div style="margin:20px 0px;text-align:right;">
                <a href="<?php echo BASEURL.'/doctor'?>" class="button_link">Back to List</a>
            </div>

            <div class="frm-add">
                <h1 class="demo-form-heading">Edit Record</h1>
                <form name="frmAdd" action="<?php echo BASEURL.'/doctor/update'?>" method="POST">

                    <input type="hidden" name="docId" value="<?php echo $result[0]['doctor_id'];?>" required />

                    <div class="demo-form-row">
                        <label>Address: </label><br>
                        <input type="text" name="address" class="demo-form-field" value="<?php echo $result[0]['address']; ?>" required />
                    </div>

                    <div class="demo-form-row">
                        <label>Contact: </label><br>
                        <input type="text" name="contact" class="demo-form-field" value="<?php echo $result[0]['contact']; ?>" required />
                    </div>

                    <div class="demo-form-row">
                        <label>Salary: </label><br>
                        <input type="text" name="salary" class="demo-form-field" value="<?php echo $result[0]['salary']; ?>" required />
                    </div>

                    <div class="demo-form-row">
                        <input name="save_record" type="submit" value="Save" class="demo-form-submit">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
</html>