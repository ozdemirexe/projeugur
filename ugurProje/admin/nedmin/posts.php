<?php 
require_once 'header.php';
require_once 'sidebar.php'


?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["postsInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Post Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['post_insert'])) {
                $sonuc=$db->insert("posts",$_POST,
                  ["form_name" => "post_insert",
                  
                  "dir" => "posts",
                  "file_name" => "posts_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group"  >
                  <label>Post Resmi Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="posts_file" required class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Post Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="posts_title" required class="form-control">
                    </div>
                  </div>
                </div>





                <div class="form-group">
                  <label>Post Url</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  class="form-control" name="posts_url"></textarea>
                    </div>
                  </div>
                </div>


              

                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="post_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["postsUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Post Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['post_update'])) {

                

                
                $sonuc=$db->update("posts",$_POST,
                  ["form_name" => "post_update",
                  "columns" => "posts_id",
                 
                  "dir" => "posts",
                  "file_delete" => "delete_file",
                "file_name" => "posts_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("posts","posts_id",$_GET['posts_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/posts/<?php echo $row["posts_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Yüklenecek Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="posts_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="posts_title" value="<?php echo $row["posts_title"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                


                <div class="form-group">
                  <label>Post Url</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  class="form-control"name="posts_url"><?php echo $row["posts_url"] ?></textarea>
                    </div>
                  </div>
                </div>



                
              

                
                <input type="hidden" name="posts_id" value="<?php echo $row["posts_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["posts_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="post_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Postlar</h3>
              <div align="right">
                <a href="?postsInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <br><br>
              <?php   
              if (isset($_GET["postsDelete"])) {

                $sonuc=$db->delete("posts","posts_id",$_GET["posts_id"],$_GET['file_delete']);
      
      
         if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Silme Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Silme Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }

    } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th align="center" width="5">#</th>
                  <th>Başlık</th>
                  <th>Resim</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php 

                  $sql=$db->read("posts");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["posts_title"] ?></td>
                  <td><a target="_blank"><img width="100px" src="dimg/posts/<?php echo $row["posts_file"] ?>"></a></td>
                 
                  <td align="center" width="5"><a href="?postsUpdate=true&posts_id=<?php echo $row["posts_id"] ?>"><i class="fa fa-pencil"></a></i></td>

                  <td align="center" width="5"><a style="color: red;" href="?postsDelete=true&posts_id=<?php echo $row["posts_id"] ?>&file_delete=<?php echo $row["posts_file"] ?>"><i class="fa fa-trash-o"></i></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
                        CKEDITOR.replace( 'editor1' );
                </script>


 <?php require_once 'footer.php'; ?>