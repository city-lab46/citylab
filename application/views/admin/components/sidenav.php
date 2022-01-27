<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>
  <script src="<?php echo BASEURL.'/public/assets/js/script.js'?>"></script>
  <title>Admin Dashboard</title>
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo BASEURL.'/home'?>"><i class="fas fa-home"></i><span>Home</span></a>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-user-nurse"></i><span>Employee</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/employee'?>">Employee Info</a>
            <a href="<?php echo BASEURL.'/employee/register'?>">Register Employee</a>
            <a href="<?php echo BASEURL.'/salary/employee'?>">Salary</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-user-md"></i><span>Doctor</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/doctor'?>">Doctor Info</a>
            <a href="<?php echo BASEURL.'/doctor/register'?>">Register Doctor</a>
            <a href="<?php echo BASEURL.'/salary/doctor'?>">Salary</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-users"></i><span>Patient</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/patient'?>">Patient Info</a>
            <a href="Cls recomendation.html">Recomendation</a>
            <a href="<?php echo BASEURL.'/patient/appointments'?>">Appointments</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-boxes"></i><span>Inventory</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/inventory'?>">Inventory History</a>
            <a href="<?php echo BASEURL.'/inventory/insert'?>">Add Inventory</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-chart-line"></i><span>Finance</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/finance'?>">Income & Expenses</a>
            <a href="<?php echo BASEURL.'/finance/insert'?>">Add Record</a>
            <a href="<?php echo BASEURL.'/finance/graph'?>">Financial Graphs</a>
        </div>
        <button onclick="sidenavdrop()" class="dropdown-btn"><i class="fas fa-vial"></i><span>Test Types</span><i style="position: absolute; right: 10px;" class="fas fa-caret-down"></i></button>
        <div class="dropdown-container">
            <a href="<?php echo BASEURL.'/test'?>">Test Type Info</a>
            <a href="<?php echo BASEURL.'/test/insert'?>">Add New Test</a>
        </div>
        <a href="<?php echo BASEURL.'/settings/lab'?>"><i class="fas fa-cog"></i><span>Lab Info</span></a>
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
        <div class="profile"><img src="<?php echo BASEURL.'/public/assets/img/profile/default.jpg'?>" alt=""></div>
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
                <a href="<?php echo BASEURL.'/employee'?>"><i class="fas fa-user-nurse"></i><span>Employee</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/employee'?>"><i class="fas fa-info-circle"></i><span>Employee Info</span></a></li>
                    <li><a href="<?php echo BASEURL.'/employee/register'?>"><i class="fas fa-user-plus"></i><span>Register Employee</span></a></li>
                    <li><a href="<?php echo BASEURL.'/salary/employee'?>"><i class="fas fa-dollar-sign"></i><span>Salary</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/doctor'?>"><i class="fas fa-user-md"></i><span>Doctor</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/doctor'?>"><i class="fas fa-info-circle"></i><span>Doctor Info</span></a></li>
                    <li><a href="<?php echo BASEURL.'/doctor/register'?>"><i class="fas fa-user-plus"></i><span>Register Doctor</span></a></li>
                    <li><a href="<?php echo BASEURL.'/salary/doctor'?>"><i class="fas fa-dollar-sign"></i><span>Salary</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/patient'?>"><i class="fas fa-users"></i><span>Patient</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/patient'?>"><i class="fas fa-info-circle"></i><span>Patient Info</span></a></li>
                    <li><a href="Cls recomendation.php"><i class="fas fa-user-clock"></i><span>Recomendation</span></a></li>
                    <li><a href="<?php echo BASEURL.'/patient/appointments'?>"><i class="fas fa-dollar-sign"></i><span>Appointments</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/inventory'?>"><i class="fas fa-boxes"></i><span>Inventory</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/inventory'?>"><i class="fas fa-info-circle"></i><span>Inventory History</span></a></li>
                    <li><a href="<?php echo BASEURL.'/inventory/insert'?>"><i class="fas fa-user-plus"></i><span>Add Inventory</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/finance'?>"><i class="fas fa-chart-line"></i><span>Finance</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/finance'?>"><i class="fas fa-info-circle"></i><span>Income & Expenses</span></a></li>
                    <li><a href="<?php echo BASEURL.'/finance/insert'?>"><i class="fas fa-user-plus"></i><span>Add Record</span></a></li>
                    <li><a href="<?php echo BASEURL.'/finance/graph'?>"><i class="fas fa-user-clock"></i><span>Financial Graphs</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/test'?>"><i class="fas fa-vial"></i><span>Test types</span></a>
                <ul>
                    <li><a href="<?php echo BASEURL.'/test'?>"><i class="fas fa-info-circle"></i><span>Test type Info</span></a></li>
                    <li><a href="<?php echo BASEURL.'/test/insert'?>"><i class="fas fa-user-plus"></i><span>Add New Test</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo BASEURL.'/settings/lab'?>"><i class="fas fa-cog"></i><span>Lab Info</span></a>
            </li>
        </ul>
    </div>