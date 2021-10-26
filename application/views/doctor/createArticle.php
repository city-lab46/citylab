<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/createarticle.css'?>"/>
<?php include "components/header.php"; ?>
    
    <div class="nav">
      <a  href="<?php echo BASEURL.'/article/search'?>"><i class="fas fa-search"></i>Search</a> 
      <a class="activ" href="<?php echo BASEURL.'/article/create'?>"><i class="fas fa-plus-circle"></i>Create Article</a>
    </div>

    <div class="main">
      
      <form action="<?php echo BASEURL.'/article/create'?>" method="get"> 
    
        <div class="writingbox">
          <div class="bar">
            <i class="fas fa-bold "></i>
            <i class="fas fa-italic"></i>
            <i class="fas fa-link"></i>
            <i class="fas fa-paperclip"></i>
            <i class="fas fa-image"></i>
            <i class="fas fa-pen-square"></i>
          </div>
          <textarea placeholder="title" name="title" class="title"></textarea>
          <textarea placeholder="type here..." name="content" class="content" ></textarea>
          
        </div>
        <button class="button1" type="submit" name="submit">Submit</button>
        <button class="button2" type="reset">Cancel</button>       
      
      </form>
    </div>  

  </div>
</body>
