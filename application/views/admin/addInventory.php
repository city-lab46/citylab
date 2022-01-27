<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/forms.css'?>"/>
<?php include "components/sidenav.php"; ?>  

    <div class="main">
        <div class="contents">

            <div class="container">
                <form action="<?php echo BASEURL.'/inventory/add'?>" method="post">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label>Tool Name</label></div>
                            <div class="col-75"><input type="text" name="name" class="form-control" required></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-25"><label>Count</label></div>
                            <div class="col-75"><input type="text" name="count" class="form-control" required></div>
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