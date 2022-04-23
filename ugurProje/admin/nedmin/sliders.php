<?php 
require_once 'header.php';
require_once 'sidebar.php';


?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["slidersInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Slider Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['slider_insert'])) {
                $sonuc=$db->insert("sliders",$_POST,
                  ["form_name" => "slider_insert",
                  "dir" => "sliders",
                  "file_name" => "sliders_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group"  >
                  <label>Slider Resimi Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="sliders_file" required class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Slider başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="sliders_title" required class="form-control">
                    </div>
                  </div>
                </div>

              

                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="slider_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["slidersUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Slider Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['slider_update'])) {

                

                
                $sonuc=$db->update("sliders",$_POST,
                  ["form_name" => "slider_update",
                  "columns" => "sliders_id",
                  "dir" => "sliders",
                  "file_delete" => "delete_file",
                "file_name" => "sliders_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("sliders","sliders_id",$_GET['sliders_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/sliders/<?php echo $row["sliders_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Slider Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="sliders_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Başlık</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="sliders_title" value="<?php echo $row["sliders_title"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                
                <input type="hidden" name="sliders_id" value="<?php echo $row["sliders_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["sliders_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="slider_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Sliderler</h3>
              <div align="right">
                <a href="?slidersInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <br><br>
              <?php   
              if (isset($_GET["slidersDelete"])) {

                $sonuc=$db->delete("sliders","sliders_id",$_GET["sliders_id"],$_GET['file_delete']);
      
      
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
                  <th>Dosya</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php 

                  $sql=$db->read("sliders");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["sliders_title"] ?></td>
                  <td><a target="_blank"><img width="100px" src="dimg/sliders/<?php echo $row["sliders_file"] ?>"></a></td>
                 
                  <td align="center" width="5"><a href="?slidersUpdate=true&sliders_id=<?php echo $row["sliders_id"] ?>"><i class="fa fa-pencil"></a></i></td>
                  <td align="center" width="5"><a style="color: red;" href="?slidersDelete=true&sliders_id=<?php echo $row["sliders_id"] ?>&file_delete=<?php echo $row["sliders_file"] ?>"><i class="fa fa-trash-o"></i></td>
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

 <?php require_once 'footer.php'; ?>