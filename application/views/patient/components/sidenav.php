<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

<div class="sidebar">                               
    <header>
        <img src="<?php echo BASEURL.'/public/assets/img/logo.jpg'?>" alt=""></img>
    </header>
        <div id="nav">
            <a class="link" href="<?php echo BASEURL.'/home/patient'?>"><i class="fas fa-home"></i><span>Home</span></a>
            <a class="link" href="<?php echo BASEURL.'/test/records'?>"><i class="fas fa-vials"></i><span>Tests</span></a>
            <a class="link" href="<?php echo BASEURL.'/book'?>"><i class="fas fa-bookmark"></i><span> Book</span></a>
            <a class="link" href="<?php echo BASEURL.'/doctor'?>"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
            <a class="link" href="<?php echo BASEURL.'/settings/patient'?>"><i class="fas fa-cog"></i><span>Settings</span></a>
        </div>
        <div class="bttn"><button onclick="window.location.href='<?php echo BASEURL.'/login/logout'?>'">Logout</button></div>
</div>

<script>
$(function(){
    var current = location.pathname;
    $('#nav a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
})
</script>  