<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>
    <script src="<?php echo BASEURL.'/public/assets/js/script.js'?>"></script>
    <title>CityLab</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo BASEURL.'/home'?>"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="<?php echo BASEURL.'/patient/myPatients'?>"><i class="fas fa-calendar"></i><span>Patients</span></a>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-stethoscope"></i><span>Publications</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/article'?>">Search Article</a>
            <a href="<?php echo BASEURL.'/article/create'?>">Create Article</a>
        </div>
    </div>

    <div id="menu">
        <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <div class="nav">
        <div class="icon">
            <img width="56px" height="56px" src="<?php echo BASEURL.'/public/assets/img/icon.jpg'?>" alt="">
            <img width="150px" height="25px" src="<?php echo BASEURL.'/public/assets/img/LAB.png'?>" alt="">
        </div>
        <button onclick="dropS()" class="settings"><i class="fas fa-caret-down"></i></button>
        <button onclick="dropN()" class="notification"><i class="fas fa-bell"></i></button>
        <div class="username"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name']?></div>
        <div class="profile"><i class="fas fa-user-circle"></i></div>
    </div>

    <div id="settings-dropdown" class="dropdown-settings">
        <ul>
            <li><i class="fas fa-cog icon"></i><a href="<?php echo BASEURL.'/settings'?>">Profile Settings</a></li>
            <li class="darkmode"><i class="fas fa-moon icon"></i>
                Dark Mode
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
            </li>
            <li><i class="fas fa-sign-out-alt icon"></i><a href="<?php echo BASEURL.'/logout'?>">Log Out</a></li>
        </ul>
    </div>
    <div id="notification-dropdown" class="dropdown-notification">
        <ul>
          <li><a href="#">Notification</a></li>
          <li><a href="#">Notification</a></li>
          <li><a href="#">Notification</a></li>
        </ul>
    </div>

    <div class="sidebar">
        <ul>
            <li class="active">
                <a href="<?php echo BASEURL.'/home'?>"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/patient/myPatients'?>"><i class="fas fa-calendar-alt"></i><span>Patients</span></a>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/article'?>"><i class="fas fa-calendar-alt"></i><span>Articles</span></a>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/article/create'?>"><i class="fas fa-calendar-alt"></i><span>New Publication</span></a>
            </li>
        </ul>
    </div>