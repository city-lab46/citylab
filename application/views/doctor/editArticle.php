<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>

<div class="main">
        <div class="container">
            <form action="<?php echo BASEURL.'/article/update'?>" method="post" enctype="multipart/form-data">
                <?php 
                $result=$data['result'];
                foreach ($result as $row): 
                ?>
					<input type="hidden" name="articleId" value="<?php echo $row['article_id'];?>">     
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="<?php echo $row['title'];?>">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" rows="6" cols="50"><?php echo $row['content'];?></textarea>
                    <label for="filename">Update Image</label>
                    <input type="file" id="filename" name="filename" accept="image/*">

                    <input type="submit" value="Submit">
                <?php endforeach;?>
            </form>
          </div>
    </div> 
</body>
</html>