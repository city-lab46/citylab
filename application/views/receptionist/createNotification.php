<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<?php include "components/sidenav.php"; ?>
       
    <div class="main">
      <div class="contents">
        <div class="container">
          <form action="">
            <div class="row">
              <div class="col-25">
                <label for="Title">Title</label>
              </div>
              <div class="col-75">
                <input type="text" id="Title" name="Title" placeholder="Enter Title..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="Message">Mesaage</label>
              </div>
              <div class="col-75">
                <div class="bar">
                            <a ><button class="buttoni"><i class="fas fa-bold "></i></button></a>
                            <a><button class="buttoni"><i class="fas fa-italic"></i></button></a>
                            <a><button class="buttoni"><i class="fas fa-link"></i></button></a>
                            <a><button class="buttoni"><i class="fas fa-paperclip"></i></button></a>
                            <a><button class="buttoni"><i class="fas fa-image"></i></button></a>
                            <a><button class="buttoni"><i class="fas fa-pen-square"></i></button></a>
                            </div>
                            <textarea placeholder="Enter message here..." style="height:200px"></textarea>
              </div>
            </div>
    
            <div class="row">
              <input type="submit" value="Submit">
              <input type="submit" value="cancel">
            </div>
          </form>
        </div>

      </div>
    </div>
  
  

</body>