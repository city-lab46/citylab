<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>

<div class="main">
        <div class="container">
            <form action="<?php echo BASEURL.'/article/new'?>" method="post" enctype="multipart/form-data">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" placeholder="">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="6" cols="50"></textarea>
                <label for="filename">Attach File</label>
                <input type="file" id="filename" name="filename" accept="image/*">

                <input type="submit" value="Submit">

            </form>
          </div>
    </div> 
</body>
</html>