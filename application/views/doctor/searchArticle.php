
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/searcharticles.css'?>"/>
<?php include "components/header.php"; ?>
    
    <div class="nav">
      <a class="activ" href="<?php echo BASEURL.'/article/search'?>"><i class="fas fa-search"></i>Search</a> 
      <a href="<?php echo BASEURL.'/article/create'?>"><i class="fas fa-plus-circle"></i>Create Article</a>
    </div>

    <div class="main">
      <table class="styled-table">       
        <thead>
          <tr>
            <th>Article Name</th>
          </tr>
        </thead>
        
        <tbody>
        <?php 
          $result=$data['result'];
          foreach ($result as $row): 
        ?>
          <tr>
            <td>
              <a href="<?php echo BASEURL.'/article'?>"><?php echo $row['title'];?></a>
              <button class="delete"><a href="<?php echo BASEURL.'/article/delete?article_id='.$row['article_id'];?>"><i class="fas fa-trash-alt"></i></a></button>
              <button class="update"><i class="fas fa-pen-square"></i></button>
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