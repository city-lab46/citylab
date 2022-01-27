<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/forms.css'?>"/>
<?php include "components/sidenav.php"; ?>  

    <div class="main">
        <div class="contents">
            <div class="container">
                <form action="<?php echo BASEURL.'/test/add'?>" method="post">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label for="name">Test Type Name</label></div>
                            <div class="col-75"><input type="text" id="name" name="name" placeholder="Enter Test Type Name.." class="form-control" required></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label for="Description">Description</label></div>
                            <div class="col-75"><textarea type="text" id="description" name="description" placeholder="Enter test type details..." style="height:200px" class="form-control" required></textarea></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label for="Ref.Range">Ref.Range</label></div>
                            <div class="col-75"><input type="text" id="Ref_Range" name="ref_range" placeholder="Enter Ref.Range.." class="form-control" required></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label for="Cost">Cost</label></div>
                            <div class="col-75"><input type="text" id="cost" name="cost" placeholder="Enter Cost.." class="form-control" required></div>
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