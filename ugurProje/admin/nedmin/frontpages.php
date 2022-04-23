<?php 
require_once 'header.php';
require_once 'sidebar.php'


?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["frontpagesInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>İçerik Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['frontpage_insert'])) {
                $sonuc=$db->insert("frontpages",$_POST,
                  ["form_name" => "frontpage_insert",
                  
                  "dir" => "frontpages",
                  "file_name" => "frontpages_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group"  >
                  <label> Resmi Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="frontpages_file" required class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label> Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="frontpages_title" required class="form-control">
                    </div>
                  </div>
                </div>





                <div class="form-group">
                  <label>Url</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  class="form-control" name="frontpages_url"></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea id="editor1" class="form-control" name="frontpages_content"></textarea>
                    </div>
                  </div>
                </div>
                


              

                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="frontpage_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["frontpagesUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Ön Sayfayı Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['frontpage_update'])) {

                

                
                $sonuc=$db->update("frontpages",$_POST,
                  ["form_name" => "frontpage_update",
                  "columns" => "frontpages_id",
                 
                  "dir" => "frontpages",
                  "file_delete" => "delete_file",
                "file_name" => "frontpages_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("frontpages","frontpages_id",$_GET['frontpages_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/frontpages/<?php echo $row["frontpages_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Yüklenecek Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="frontpages_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="frontpages_title" value="<?php echo $row["frontpages_title"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                


                <div class="form-group">
                  <label>Url</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  class="form-control"name="frontpages_url"><?php echo $row["frontpages_url"] ?></textarea>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea id="editor1" class="form-control" name="frontpages_content"><?php echo $row["frontpages_content"] ?></textarea>
                    </div>
                  </div>
                </div>
                
              

                
                <input type="hidden" name="frontpages_id" value="<?php echo $row["frontpages_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["frontpages_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="frontpage_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">İçerikler</h3>
              <div align="right">
                <a href="?frontpagesInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <br><br>
              <?php   
              if (isset($_GET["frontpagesDelete"])) {

                $sonuc=$db->delete("frontpages","frontpages_id",$_GET["frontpages_id"],$_GET['file_delete']);
      
      
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

                  $sql=$db->read("frontpages");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["frontpages_title"] ?></td>
                  <td><a target="_blank"><img width="100px" src="dimg/frontpages/<?php echo $row["frontpages_file"] ?>"></a></td>
                 
                  <td align="center" width="5"><a href="?frontpagesUpdate=true&frontpages_id=<?php echo $row["frontpages_id"] ?>"><i class="fa fa-pencil"></a></i></td>

                  <td align="center" width="5"><a style="color: red;" href="?frontpagesDelete=true&frontpages_id=<?php echo $row["frontpages_id"] ?>&file_delete=<?php echo $row["frontpages_file"] ?>"><i class="fa fa-trash-o"></i></td>
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