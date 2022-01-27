<?php include "components/sidenav.php"; ?>

<style>
body{width:1000px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;padding: 30px;}
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
                <a href="<?php echo BASEURL.'/test'?>" class="button_link">Back to List</a>
            </div>
            <div class="frm-add">
                <h1 class="demo-form-heading">Edit Record</h1>
                <form name="frmAdd" action="<?php echo BASEURL.'/test/update'?>" method="POST">
                    <input type="hidden" name="test_id" value="<?php echo $result[0]['test_id'];?>" required />
                    <div class="demo-form-row">
                        <label>Test Type Name: </label><br>
                        <input type="text" name="name" class="demo-form-field" value="<?php echo $result[0]['name']; ?>" required />
                    </div>
                    <div class="demo-form-row">
                        <label>Description: </label><br>
                        <input type="text" name="description" class="demo-form-field" value="<?php echo $result[0]['description']; ?>" required />
                    </div>
                    <div class="demo-form-row">
                        <label>Ref_range: </label><br>
                        <input type="text" name="ref_range" class="demo-form-field" value="<?php echo $result[0]['ref_range']; ?>"  />
                    </div>
                    <div class="demo-form-row">
                        <label>Cost: </label><br>
                        <input type="text" name="cost" class="demo-form-field" value="<?php echo $result[0]['cost']; ?>"  />
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