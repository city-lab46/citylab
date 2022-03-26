<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>

<?php include "components/sidenav.php"; ?>
       
    <div class="main">
      <div class="contents">
        <div class="container">
          <form action="<?php echo BASEURL.'/notification/insert'?>" method="post">
            <div class="row">
              <div class="col-25">
                <label for="Title">Title</label>
              </div>
              <div class="col-75">
                <input type="text" id="Title" name="title" placeholder="Enter Title..">
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="Message">Mesaage</label>
              </div>
              <div class="col-75">
                <textarea type="text" id="message" name="message" placeholder="Enter message.."></textarea>
              </div>
            </div>
            
            
            <div class="row">
              <input type="submit" name="submit" value="Submit">
              <input type="submit" name="cancel" value="cancel">
            </div>
          </form>
        </div>

      </div>
    </div>
  
  

</body>