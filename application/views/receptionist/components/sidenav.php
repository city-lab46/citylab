<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>
    <script src="<?php echo BASEURL.'/public/assets/js/script.js'?>"></script>
    <title>CityLab</title>
    
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a href="<?php echo BASEURL.'/home'?>"><i class="fas fa-home"></i><span>Home</span></a>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="far fa-calendar"></i><span>Schedule</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a  href="<?php echo BASEURL.'/schedule'?>" >Add Schedule</a>
            <a href="<?php echo BASEURL.'/schedule/scheduleHistory'?>" >Schedule History</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-file-invoice-dollar"></i><span>Billings</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a  href="<?php echo BASEURL.'/bill/addBillForm'?>">Add Billings</a>
            <a href="<?php echo BASEURL.'/bill/billHistory'?>">Bill History</a>
        </div>        
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-user"></i><span>Patients</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a  href="<?php echo BASEURL.'/patient'?>">Add Patient</a>
            <a href="<?php echo BASEURL.'/patient/patientHistory'?>" >Patient Info</a> 
        </div>  
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="far fa-comment-dots"></i><span>Notification</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a  href="<?php echo BASEURL.'/notification'?>" >Add Notification</a>
            <a href="<?php echo BASEURL.'/notification/notificationHistory'?>" >Notification History</a> 
        </div>  
        </div>
        <div id="menu">
        <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
        </div>

        <div class="sidebar">                               
            
            <ul>   
                <li class="active">
                    <a href="<?php echo BASEURL.'/home'?>" ><i class="fas fa-home"></i><span>Home</span></a>
                </li>
                <li >
                    <a href="<?php echo BASEURL.'/schedule'?>" ><i class="far fa-calendar"></i><span>Schedule</span></a>
                    <ul>
                    <li><a href="<?php echo BASEURL.'/schedule'?>"><i class="far fa-calendar"></i><span>Add Schedule</span></a></li>
                    <li><a href="<?php echo BASEURL.'/schedule/scheduleHistory'?>"><i class="far fa-file-alt"></i><span>Schedule History</span></a></li>
                    </ul>
                </li>
                <li >
                    <a href="<?php echo BASEURL.'/bill'?>"><i class="fas fa-file-invoice-dollar"></i><span>Billings</span></a>
                    <ul>
                    <li><a href="<?php echo BASEURL.'/bill'?>"><i class="fas fa-file-invoice-dollar"></i><span>Add Bill</span></a></li>
                    <li><a href="<?php echo BASEURL.'/bill/billHistory'?>"><i class="far fa-file-alt"></i><span>Bill History</span></a></li>
                    </ul>                       
                </li>
                <li >
                    <a href="<?php echo BASEURL.'/patient'?>"><i class="fas fa-user"></i><span>Patients</span></a>
                    <ul>
                    <li><a href="<?php echo BASEURL.'/patient'?>"><i class="fas fa-user"></i><span>Add Patient</span></a></li>
                    <li><a href="<?php echo BASEURL.'/patient/patientHistory'?>"><i class="far fa-file-alt"></i><span>Patient Info</span></a></li>
                    </ul> 
                </li>
                <li >
                    <a href="<?php echo BASEURL.'/notification'?>"><i class="far fa-comment-dots"></i><span>Notification</span></a>
                    <ul>
                    <li><a href="<?php echo BASEURL.'/notification'?>"><i class="far fa-comment-dots"></i><span>Create Notification</span></a></li>
                    <li><a href="<?php echo BASEURL.'/notification/notificationHistory'?>"><i class="far fa-file-alt"></i><span>Notification History</span></a></li>
                    </ul>
                </li>
            </ul>

        </div>
        
        <div class="nav">

            <div class="icon">
                <img width="56px" height="56px" src="<?php echo BASEURL.'/public/assets/img/icon.jpg'?>" alt="">
                <img width="150px" height="25px" src="<?php echo BASEURL.'/public/assets/img/lab.png'?>" alt="">
            </div>
            <button onclick="dropS()" class="settings"><i class="fas fa-caret-down"></i></button>
            <button onclick="dropN()" class="notification"><i class="fas fa-bell"></i></button>
            <div class="username">Mr. Samaranayake <br>Receptionist </div>
            <div class="profile"><img src="<?php echo BASEURL.'/public/assets/img/profile/default.png'?>" alt=""></img>
            
        </div>
            
        </div> 
        </div>
        <!-- <div class="Date">
            <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
            <script>
            var dt = new Date();
            document.getElementById('date').innerHTML=dt.toDateString();
            </script>
        </div> -->
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
                <li><i class="fas fa-sign-out-alt icon"></i><a href="<?php echo BASEURL.'/Homepage'?>">Log Out</a></li>
            </ul>
        </div>
        <div id="notification-dropdown" class="dropdown-notification">
            <ul>
            <li><a href="#">Notification</a></li>
            <li><a href="#">Notification</a></li>
            <li><a href="#">Notification</a></li>
            </ul>
        </div>