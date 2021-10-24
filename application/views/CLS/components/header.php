
<!DOCTYPE html>
<html lang="en">
<head>
<title>CLS Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/all.min.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
function myFunction() {
     document.getElementById("myDropdown").classList.toggle("show");
 }
 $(document).ready(function(){

function load_unseen_notifications(view = '')
{
 $.ajax({
  url:"Notification/fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-content').html(data.notifications);
   if(data.unseen_notifications > 0)
   {
    $('.count').html(data.unseen_notifications);
   }
  }
 });
}

load_unseen_notifications();



$(document).on('click', 'myFunction()', function(){
 $('.count').html('');
 load_unseen_notifications('yes');
});

setInterval(function(){
 load_unseen_notifications();;
}, 5000);

});  
  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("menu").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("menu").style.display = 'none';
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("menu").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("menu").style.display = 'block';
  }

</script>
</head>
<body>
  <div class="blue_bar"></div>
  <div class="container">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="far fa-file-alt"></i><span>Test Report</span></a>
        <a href="#"><i class="fas fa-vials"></i><span>Inventory</span></a>
        <a href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
        <button class="button" onclick="window.location.href='../Login/view/index.php'">Logout</button>
       
    </div>
    <div id="menu">
      <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <div class="sidebar">                               
      <header>
        <img src="<?php echo BASEURL.'/public/assets/img/logo.jpg'?>" alt=""></img>
      </header>
      <div id="nav">
        <a class="link" href="<?php echo BASEURL.'/home/CLS'?>"><i class="fas fa-home"></i><span>Home</span></a>
        <a class="link" href="<?php echo BASEURL.'/createReport'?>"><i class="far fa-file-alt"></i><span>Test Report</span></a>
        <a class="link" href="<?php echo BASEURL.'/addInventory'?>"><i class="fas fa-vials"></i><span>Inventory</span></a>
        <a class="link" href="<?php echo BASEURL.'/settings/CLS'?>"><i class="fas fa-cog"></i><span>Settings</span></a>
      </div>
      <div class="bttn"><button onclick="window.location.href='<?php echo BASEURL.'/login/logout'?>'">Logout</button></div>
    </div>

    <div class="info">
    <div class="dropdown">
        <button onclick=""  class="notifi"  data-toggle="dropdown"><i class="far fa-bell"><span class="count"></span></i></button>
        <div id="myDropdown" class="dropdown-content">
          <a class="dropdown-content"></a>


        </div>
     </div>

      <div class="user_image">
        <a href="<?php echo BASEURL.'/settings/CLS'?>">
          <img src="<?php echo BASEURL.'/public/assets/img/tuat.png'?>" alt=""></img>
        </a>
      </div>
      <div class="user_name">Mr. Samaranayake</div>
      <div id="user-role">Laboratory Scientist</div>
      
      <div class="Date">
        <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
        <script>
          var dt = new Date();
          document.getElementById('date').innerHTML=dt.toDateString();
        </script>
      </div> 
    </div> 