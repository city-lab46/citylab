<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>
    

    <div class="main">
      <table class="styled-table">       
        <thead>
          <tr>
            <th>Date</th>
            <th>Articles</th>
            <th></th>
          </tr>
        </thead>
        
        <tbody>
          <?php 
            $result=$data['result'];
            foreach ($result as $row): 
          ?>
          <tr>
            <td>
              <?php echo $row['date'];?>
            </td>
            <td>
              <a href="<?php echo BASEURL.'/article/edit?article_id='.$row['article_id'];?>"><?php echo $row['title'];?></a>
            </td>
            <td>
              <button class="delete"><a href="<?php echo BASEURL.'/article/delete?article_id='.$row['article_id'];?>"><i class="fas fa-trash"></i></a></button>
              <button class="update"><a href="<?php echo BASEURL.'/article/edit?article_id='.$row['article_id'];?>"><i class="fas fa-pen"></i></a></button>            
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      
    <!-- </div>
      <ax href="#" class="next">Next</ax>
      <ax href="#" class="page">1</ax>
      <ax href="#" class="previous">Previous</ax>    
    </div> -->

  </div>
</body>
</html>