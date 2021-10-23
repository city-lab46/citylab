<!DOCTYPE html>
<html lang="en">
<head>
<title>CityLab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo BASEURL.'/public/assets/img/favicon.png'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/all.min.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/styles.css'?>"/>
<!--  no local -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
               .MultiCheckBox {
            border:1px solid #e2e2e2;
            padding: 5px;
            border-radius:4px;
            cursor:pointer;
        }

        .MultiCheckBox .k-icon{ 
            font-size: 15px;
            float: right;
            font-weight: bolder;
            margin-top: -7px;
            height: 10px;
            width: 14px;
            color:#787878;
        } 

        .MultiCheckBoxDetail {
            display:none;
            position:absolute;
            border:1px solid #e2e2e2;
            overflow-y:hidden;
        }

        .MultiCheckBoxDetailBody {
            overflow-y:scroll;
        }

            .MultiCheckBoxDetail .cont  {
                clear:both;
                overflow: hidden;
                padding: 2px;
            }

            .MultiCheckBoxDetail .cont:hover  {
                background-color:#cfcfcf;
            }

            .MultiCheckBoxDetailBody > div > div {
                float:left;
            }

        .MultiCheckBoxDetail>div>div:nth-child(1) {
        
        }

        .MultiCheckBoxDetailHeader {
            overflow:hidden;
            position:relative;
            height: 28px;
            background-color:#3d3d3d;
        }

            .MultiCheckBoxDetailHeader>input {
                position: absolute;
                top: 4px;
                left: 3px;
            }

            .MultiCheckBoxDetailHeader>div {
                position: absolute;
                top: 5px;
                left: 24px;
                color:#fff;
            }
    </style>
    <script>
        $(document).ready(function () {
            $("#test").CreateMultiCheckBox({ width: '230px', defaultText : 'Select Below', height:'250px' });
        });

        $(document).ready(function () {
            $(document).on("click", ".MultiCheckBox", function () {
                var detail = $(this).next();
                detail.show();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
                e.stopPropagation();
                var hc = $(this).prop("checked");
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
                e.stopPropagation();
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).mouseup(function (e) {
                var container = $(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = { width: '220px', defaultText: 'Select Below', height: '200px' };

        jQuery.fn.extend({
            CreateMultiCheckBox: function (options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({ "width": localOption.width });

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function () {
                    var val = $(this).attr("value");

                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function () {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function () {
                    arr.push($(this).val());
                });

                this.val(arr);
            },
        });
    </script>
<script>

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

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function notification() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

</script>
</head>
<body>
  <div class="blue_bar"></div>
  <div class="container">
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?php echo BASEURL.'/home'?>"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="<?php echo BASEURL.'/test'?>"><i class="fas fa-vials"></i><span>Tests</span></a>
      <a href="<?php echo BASEURL.'/book'?>"><i class="fas fa-bookmark"></i><span> Book</span></a>
      <a href="<?php echo BASEURL.'/doctor'?>"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
      <a href="<?php echo BASEURL.'/settings'?>"><i class="fas fa-cog"></i><span>Settings</span></a>
      <a href="<?php echo BASEURL ?>"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>

    </div>
    <div id="menu">
      <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <!-- USER INFORMATION DETAILS -->
    <div class="info">

      <div class="dropdown">
        <button onclick="notification()" class="notifi"><i class="far fa-bell"><span class="badge">3</span></i></button>
          <div id="myDropdown" class="dropdown-content">
            
          </div>
      </div>

      <div class="user_image">
        <a href="<?php echo BASEURL.'/settings'?>">
          <img src="<?php echo BASEURL.'/public/assets/img/tuat.png'?>" alt="">
        </a>
      </div>
      <div class="user_name"><?php echo "Mrs. ".$_SESSION['first_name']." ".$_SESSION['last_name']?></div>
      <div id="user-role"><?php echo $_SESSION['title']?></div>
      
      <div class="Date">
        <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
        <script>
          var dt = new Date();
          document.getElementById('date').innerHTML=dt.toDateString();
        </script>
      </div> 
    </div>