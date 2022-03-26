<link rel="stylesheet" href=""/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/calendar.css'?>"/>
 <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/evo-calendar.min.css'?>"/>

 <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
  
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
    <div class="contents">
        
            
        <div class="container">
        <div id="calendar" ></div>
        </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script  src="<?php echo BASEURL.'/public/assets/js/evo-calendar.min.js'?>"></script>
    <script >
       <?php
         $datas = $this->result;
        ?>
        $(document).ready(function(){
            
             $("#calendar").evoCalendar(
                {
                    
                    calendarEvents: [
                        <?php
             if(!empty($datas)){
               foreach($datas as $data){
               $date= $data['booking_date'];
               $time= $data['booking_time'];
        
             ?>
      {
        name: "Booking",
        badge: ['<?php echo $time;?>'], // Event badge (optional)
        date: ['<?php echo $date;?>'], // Date range
        description: "Booking", // Event description (optional)
        type: "event",
        color: "#63d867" // Event custom color (optional)
      },
      <?php
          }
        }
         ?> 
    ]

                }
            );
            
        });
        //                     {
    //     id: 'bHay68s', // Event's ID (required)
    //     name: "New Year", // Event name (required)
    //     date: "January/1/2020", // Event date (required)
    //     type: "holiday", // Event type (required)
    //     everyYear: true // Same event every year (optional)
    //   }
    //   ,
        
    
    </script>
    
</body>