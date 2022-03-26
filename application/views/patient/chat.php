<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/chat.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">
        <!-- <div class="side-container">
            <div class="user"></div>
            <div class="user"></div>
        </div> -->
        <div class="main-container">  
            <div class="chat-header">
                <img width="50px" height="50px" src="<?php echo BASEURL.'/public/assets/img/profile/doc.jpg'?>" alt="">
                <span><?php  echo "&nbsp&nbsp".$data['userDetails'][0][1] ." ". $data['userDetails'][0][2]?></span>
            </div>
            <div class="chat-container" id="#chat-container">        
                <?php
                    $chat=$data['chat'];
                    foreach ($chat as $row){
                        if($row['sender']==$data['sender']){
                            echo "<div align='right'><div class='message-container' id='sender' >".$row['message']."<span class='time'>".substr($row['time'],0,5)."</span></div></div>";
                        }
                        else{
                            echo "<div align='left'><div class='message-container' id='receiver' >"."<span class='msg'>".$data['userDetails'][0][1]."</span><br>".$row['message']."<span class='time'>".substr($row['time'],0,5)."</span></div></div>";
                        }
                    }
                ?>

            </div>
            <form class="message-input-container" action="<?php echo BASEURL.'/chat/send'?>" method="post">   
                <input type="hidden" name="userId" value="<?php echo $data['userDetails'][0][0];?>">     
                <input class="message-input" type="text" id="message" name="message" placeholder="send message...">
                <input class="message-submit" type="submit" value="send">
            </form> 
            
        </div>              
    </div>

<!-- 
        $chat=$data['chatStatus'];
        $user=$data['userDetails'];
        if($chat['status']=='1')
        {
            $status=" Online";
        }
        else
        {
            $status="Last Seen ".$chat['date_time'];
        }
        $render = "
        <div class='data-section' style='background-color:#0370e4;padding:5px;margin-top:10px;margin-bottom:4px;border-radius:30px;margin-right:10px;margin-left:10px;box-shadow: 0 0px 2px 0 rgba(0, 0, 0, 0.1);'><img src='".userIMG($user['profilePicture'])."' class='profile-picture'>
        <span class='username'>".$user['firstName']." ".$user['lastName']."</span><span class='user-status'>".
        $status."</span></div>
        ";
        echo $render;
     -->