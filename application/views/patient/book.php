<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
        <div class="container">
            <form action="<?php echo BASEURL.'/book/create'?>" method="get">
                <label for="firstname">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"] ;?>" readonly>
                <label for="date">Date</label>
                <input type="date" id="date" name="date" placeholder="">
                <label for="test">Test</label>
                    <select id="test" name="testId">
                        <?php 
                        $result=$data['result'];
                        foreach ($result as $row): 
                        ?>
                        <option value="<?php echo  $row["test_id"] ;?>"><?php echo  $row["name"] ;?></option>
                        <?php endforeach;?> 
                    </select>
                <label for="contact">Contact</label>
                <input type="text" id="contact" value="<?php echo $_SESSION['contact'];?>" readonly>
                <input type="submit" value="Submit">
            </form>
          </div>
    </div> 
</body>
</html>