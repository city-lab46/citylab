<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/home.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
    
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
                            <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
                            <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
                            <input type="radio" id="3-star" name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
                            <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
                            <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
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