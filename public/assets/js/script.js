    $(document).ready(function(){
        $('ul li').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
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

    function sidenavdrop() {
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    }
    function dropS() {
        document.getElementById("settings-dropdown").classList.toggle("show");
    }
    function dropN() {
        document.getElementById("notification-dropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (event.target.matches('.darkmode, .darkmode i, .switch, .switch input, .slider')) {
            var dropdowns = document.getElementsByClassName("dropdown-settings");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    continue;
                }
            }
        }
        else if (!event.target.matches('.settings, .settings i')) {
            var dropdowns = document.getElementsByClassName("dropdown-settings");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.notification, .notification i')) {
            var dropdowns = document.getElementsByClassName("dropdown-notification");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
