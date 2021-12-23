<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/home.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

        <?php 
        $book=$data['book'];
        foreach ($book as $row): 
        ?>
            <div class="card">
                <div>Booking Placed</div>
                <span class="line"></span>
                <div>
                    <span><i class="fas fa-calendar-alt"></i><?php echo  $row["created_date"] ;?></span>
                    <span><i class="fas fa-flask"></i><?php echo  $row["name"] ;?></span>
                    <span>
                        <form action="<?php echo BASEURL.'/book/cancel'?>" method="post">
                            <input type="hidden" name="bookingId" value="<?php echo $row['booking_id'];?>">     
                            <button class="button" type="submit" name="cancel">Cancel</button>                                                     
                        </form>
                    </span>
                </div>
            </div>
        <?php endforeach;?>
    
        <?php 
        $articles=$data['articles'];
        foreach ($articles as $row): 
        ?>
            <div class="box">
                <div class="title"><?php echo  $row["title"] ;?></div>
                <div class="content"><?php echo  $row["content"] ;?>
                    <span>
                        <img src="<?php echo BASEURL; ?>/public/assets/img/article/<?php echo  $row["filename"] ;?>" alt=""/>
                    </span>
                </div>
                <div class="rate">
                    <span>Rate
                        <div class="rate-area">
                            <input type="radio" id="<?php echo  $row["article_id"] ;?>-5-star" name="rating" value="5"/><label for="<?php echo  $row["article_id"] ;?>-5-star" title="Amazing"></label>
                            <input type="radio" id="<?php echo  $row["article_id"] ;?>-4-star" name="rating" value="4"/><label for="<?php echo  $row["article_id"] ;?>-4-star" title="Good"></label>
                            <input type="radio" id="<?php echo  $row["article_id"] ;?>-3-star" name="rating" value="3"/><label for="<?php echo  $row["article_id"] ;?>-3-star" title="Average"></label>
                            <input type="radio" id="<?php echo  $row["article_id"] ;?>-2-star" name="rating" value="2"/><label for="<?php echo  $row["article_id"] ;?>-2-star" title="Not Good"></label>
                            <input type="radio" id="<?php echo  $row["article_id"] ;?>-1-star" name="rating" value="1"/><label for="<?php echo  $row["article_id"] ;?>-1-star" title="Bad"></label>
                        </div>
                    </span>
                    <span>
                        Published by : <?php echo "Dr. " .$row["first_name"] . "&nbsp" . $row["last_name"] ;?>
                    </span>
                </div>
            </div>
        <?php endforeach;?> 

    </div> 
</body>
</html>