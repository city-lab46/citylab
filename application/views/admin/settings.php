<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/formInput.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/settings.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

        <div class="container">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <form action="<?php echo BASEURL.'/settings/profile'?>" method="post" enctype="multipart/form-data">
                        <input type='file' id="imageUpload" name="imageUpload" onchange="this.form.submit()" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><i class="fas fa-camera upload-button"></i></label>   
                    </form>
                </div>

                <?php $result=$data['result']; ?>

                <div class="avatar-preview">
                    <div id="imagePreview">
                        <img width="100%" height="100%" src="<?php echo BASEURL; ?>/public/assets/img/profile/<?php if ($result['image']){
                                                                                                                        echo $result['image'];
                                                                                                                    }else{
                                                                                                                        echo "default.jpg";
                                                                                                                    } ?>" alt=""/>
                    </div>
                </div>
            </div>
        </div>

        <form class="form" action="<?php echo BASEURL.'/settings/update'?>" method="post">
        
            <div class="inputContainer">
                <input type="text" name="firstname" id="firstname" class="input" value="<?php echo $_SESSION['first_name'];?>">
                <label for="firstname" class="label">First Name</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="lastname" id="lastname" class="input" value="<?php echo $_SESSION['last_name'];?>">
                <label for="lastname" class="label">Last Name</label>
            </div>
            <div class="inputContainer">
                <input type="date" name="dob" id="dob" class="input" value="<?php echo $_SESSION['dob'];?>">
                <label for="dob" class="label">Birthday</label>
            </div>
            <div class="inputContainer">
                <input type="text" name="email" id="email" class="input" value="<?php echo $_SESSION['email'];?>">
                <label for="email" class="label">Email</label>
            </div>    
            <div class="inputContainer">
                <input type="number" name="contact" id="contact" class="input" value="<?php echo $_SESSION['contact'];?>">
                <label for="contact" class="label">Contact</label>
            </div>
            <!-- <div class="inputContainer">
                <input type="password" name="password" id="password" class="input" placeholder="**********">
                <label for="password" class="label">Password</label>
            </div> -->
            <button class="submitBtn">Submit</button>
        </form>
        
    </div> 
</body>
</html>