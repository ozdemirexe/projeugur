<?php require_once "header.php";

 ?>


 

	<?php require_once "header.php"; ?>
    
    <div class="clearfix"></div>
    <div class="lines"></div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title-wrap">
          <div class="page-title-inner">
          <div class="row">
            <div class="col-md-4">
             
              <div class="bigtitle">Araçlar Teknik Bilgi</div>
            </div>
           
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php 

      $sql=$db->read("blogs");
      $say=0;
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {$say++;  ?>
    <div class="row">
      <div class="col-md-9"><!--Main content-->
        
        <div class="page-content">
         
        
         <div class="tab-review">
          <ul id="myTab" class="nav nav-tabs shop-tab">
            <li class="active"><a href="#desc" data-toggle="tab"><?php echo $row['blogs_title'] ?></a></li>
           
          </ul>
          <div  id="myTabContent" class="tab-content shop-tab-ct">
            <div class="tab-pane fade active in" id="desc">
               <div  class="dt-img">
              
               <img style="width: 400px;" class="img-fluid rounded" src="nedmin/dimg/blogs/<?php echo $row['blogs_file'] ?>" alt="<?php echo $row['blogs_title'] ?>">
            </div>
              <p>
              <?php echo $row['blogs_content'] ?>

              </p>
            </div>
           
          </div>
        </div>
        </div>
      </div>
     
    </div>
  <?php } ?>
    
  </div>
  
  

          
    

  </div>
  </body>
</html>

	
	<?php require_once "footer.php" ?>
  


 
