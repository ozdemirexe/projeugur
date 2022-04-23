<?php 
require_once 'header.php';
require_once 'sidebar.php'


?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["carsInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Parça Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['car_insert'])) {
                $sonuc=$db->insert("cars",$_POST,
                  ["form_name" => "car_insert",
                  
                  "title" => "cars_title",
                  "dir" => "cars",
                  "file_name" => "cars_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group"  >
                  <label>Parça Resmi Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="cars_file" required class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Parça Marka</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="cars_title" required class="form-control">
                    </div>
                  </div>
                </div>


                 <div class="form-group">
                  <label>Parça URL</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="cars_url" placeholder="" required class="form-control">
                      
                    </div>
                  </div>
                </div>



                <div class="form-group">
                  <label>Parça İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea id="editor1" class="form-control" name="cars_content"></textarea>
                    </div>
                  </div>
                </div>


              

                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="car_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["carsUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Parça Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['car_update'])) {

                

                
                $sonuc=$db->update("cars",$_POST,
                  ["form_name" => "car_update",
                  "columns" => "cars_id",
                  
                  "title" => "cars_title",
                  "dir" => "cars",
                  "file_delete" => "delete_file",
                "file_name" => "cars_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("cars","cars_id",$_GET['cars_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/cars/<?php echo $row["cars_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Yüklenecek Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="cars_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Marka</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="cars_title" value="<?php echo $row["cars_title"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Parça URL</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="cars_url" value="<?php echo $row['cars_url'] ?>" placeholder="Örn:car-01" required class="form-control">
                      
                    </div>
                  </div>
                </div>



                <div class="form-group">
                  <label>Parça İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea  id="editor1" class="form-control"name="cars_content"> <?php echo $row["cars_content"] ?></textarea>
                    </div>
                  </div>
                </div>



                
              

                
                <input type="hidden" name="cars_id" value="<?php echo $row["cars_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["cars_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="car_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Parçalar</h3>
              <div align="right">
                <a href="?carsInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <br><br>
              <?php   
              if (isset($_GET["carsDelete"])) {

                $sonuc=$db->delete("cars","cars_id",$_GET["cars_id"],$_GET['file_delete']);
      
      
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
                  <th>Marka</th>
                  <th>Resim</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php 

                  $sql=$db->read("cars");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["cars_title"] ?></td>
                  <td><a target="_blank"><img width="100px" src="dimg/cars/<?php echo $row["cars_file"] ?>"></a></td>
                 
                  <td align="center" width="5"><a href="?carsUpdate=true&cars_id=<?php echo $row["cars_id"] ?>"><i class="fa fa-pencil"></a></i></td>

                  <td align="center" width="5"><a style="color: red;" href="?carsDelete=true&cars_id=<?php echo $row["cars_id"] ?>&file_delete=<?php echo $row["cars_file"] ?>"><i class="fa fa-trash-o"></i></td>
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