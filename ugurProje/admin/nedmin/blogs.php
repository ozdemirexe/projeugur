<?php 
require_once 'header.php';
require_once 'sidebar.php'


?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["blogsInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Blog Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['blog_insert'])) {
                $sonuc=$db->insert("blogs",$_POST,
                  ["form_name" => "blog_insert",
                  "slug" => "blogs_slug",
                  "title" => "blogs_title",
                  "dir" => "blogs",
                  "file_name" => "blogs_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group"  >
                  <label>Blog Resmi Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="blogs_file" required class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Blog Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="blogs_title" required class="form-control">
                    </div>
                  </div>
                </div>


                 <div class="form-group">
                  <label>Blog URL</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="blogs_slug" placeholder="Örn:Blog-01" required class="form-control">
                      
                    </div>
                  </div>
                </div>



                <div class="form-group">
                  <label>Blog İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea id="editor1" class="form-control" name="blogs_content"></textarea>
                    </div>
                  </div>
                </div>


              

                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="blog_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["blogsUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Blog Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['blog_update'])) {

                

                
                $sonuc=$db->update("blogs",$_POST,
                  ["form_name" => "blog_update",
                  "columns" => "blogs_id",
                  "slug" => "blogs_slug",
                  "title" => "blogs_title",
                  "dir" => "blogs",
                  "file_delete" => "delete_file",
                "file_name" => "blogs_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("blogs","blogs_id",$_GET['blogs_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/blogs/<?php echo $row["blogs_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Yüklenecek Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="blogs_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="blogs_title" value="<?php echo $row["blogs_title"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Blog URL</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="blogs_slug" value="<?php echo $row['blogs_slug'] ?>" placeholder="Örn:Blog-01" required class="form-control">
                      
                    </div>
                  </div>
                </div>



                <div class="form-group">
                  <label>Blog İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  id="editor1" class="form-control"name="blogs_content"> <?php echo $row["blogs_content"] ?></textarea>
                    </div>
                  </div>
                </div>



                
              

                
                <input type="hidden" name="blogs_id" value="<?php echo $row["blogs_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["blogs_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="blog_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Bloglar</h3>
              <div align="right">
                <a href="?blogsInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <br><br>
              <?php   
              if (isset($_GET["blogsDelete"])) {

                $sonuc=$db->delete("blogs","blogs_id",$_GET["blogs_id"],$_GET['file_delete']);
      
      
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

                  $sql=$db->read("blogs");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["blogs_title"] ?></td>
                  <td><a target="_blank"><img width="100px" src="dimg/blogs/<?php echo $row["blogs_file"] ?>"></a></td>
                 
                  <td align="center" width="5"><a href="?blogsUpdate=true&blogs_id=<?php echo $row["blogs_id"] ?>"><i class="fa fa-pencil"></a></i></td>

                  <td align="center" width="5"><a style="color: red;" href="?blogsDelete=true&blogs_id=<?php echo $row["blogs_id"] ?>&file_delete=<?php echo $row["blogs_file"] ?>"><i class="fa fa-trash-o"></i></td>
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