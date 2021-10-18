<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/settings.css'?>"/>
<?php include "components/header.php"; ?>
<?php include "components/sidenav.php"; ?> 
    
    <div class="nav">
      <div><img src="<?php echo BASEURL.'/public/assets/img/tuat.png'?>" alt=""></div>
    </div>

    <div class="main">
      <div class="box">
          <div>
            <p>Name<span><?php echo $this->result['first_name']. "&nbsp" .$this->result['last_name'];?></span><i class="far fa-edit"></i></p>
          </div>
          <div>
            <p>Birthday<span>september 5 1998</span><i class="far fa-edit"></i></p>
          </div>
          <div>
            <p>Gender<span>Male</span><i class="far fa-edit"></i></p>
          </div>    
          <div>
            <p>Contact<span>077 141 5912</span><i class="far fa-edit"></i></p>
          </div>     
          <div>
            <p>Password<span>**********</span><i class="far fa-edit"></i></p>
          </div>
      </div>

    </div>  

  </div>
</body>