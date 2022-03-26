
 <!-- CSS -->
 <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
 <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/calendar.css'?>"/>

 <script>
			$(document).ready(function(){
				$( "#booking_date" ).datepicker();
			});
		</script>
 

  
    
<?php include "components/sidenav.php"; ?>


    <div class="main">

    <div class="contents">
        
            
    <div class="container">
            
            <form action="<?php echo BASEURL.'/schedule/insert'?>" method="post">
            <div class="row">
              <div class="col-25">
                <label >Test Types</label>
              </div>
              <div class="col-75">
                    <select  name = "testTypes[]"class = "multiselect-container" multiple size="3" >
                      <option value="HB" >HB</option>
                      <option value="RBC">RBC</option>
                      <option value="Hematocrit">Hematocrit</option>
                      <option value="White blood cell cou">White blood cell cou</option>
                      <option value="Platelet count">Platelet count</option>
                      
                    </select>
            </div>
            </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="booking_date">Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="booking_date" name="booking_date" value="dd/mm/yyyy">
                        </div>
                    </div>
                    
                
                
                    <div class="row">
                        <div class="col-25">
                        </div>   
                    <div class="col-25">
                        <a class = "cal"href="<?php echo BASEURL.'/home'?>">View Booking Calendar</a>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="booking_time">Time</label>
                        </div>
                        <div class="col-75">
                        <input type="time"  name="booking_time" id="booking_time" value="" min="07:00" max="19:00" pattern="(07|1[0-9]):[0-5]\d" step="1800">
                        </div>
                    </div>
      
                    <div class="row">
                        <input type="submit" name="submit" value="Submit" >
                        <input type="reset" name="cancel" value="Cancel">
                    </div>
                    
                </form> 
    
            
                </div>
                
                </div>
    </div>
    
    <script>
        //disable past days
        var now = new Date();
        var month = (now.getMonth() + 1);
        var day = now.getDate();
        if(month<10)
        month = "0" + month;
        if(day<10)
        day = "0" + day;
        var today = now.getFullYear() +'-'+ month + '-' + day;
        document.getElementById("booking_date").min = today;

        
    </script>
    
    <script>
        //disable full booking dates
        //make an array of disable dates
        var dates = ["30-12-2021", "15-06-2021", "30-06-2021"];

        function disableDates(date) {
        var string = $.datepicker.formatDate('dd-mm-yy', date);
        return [dates.indexOf(string) == -1];
        }

       $("#booking_date").datepicker({
       beforeShowDay: disableDates
       });
    </script>
    
    
    
</body>