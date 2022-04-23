<?php 
require_once 'header.php';
require_once 'sidebar.php'

?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["settingsInsert"])) {?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Ayar Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['setting_insert'])) {
                $sonuc=$db->insert("settings",$_POST,
                  ["form_name" => "setting_insert",
                  "dir" => "settings",
                "file_name" => "settings_file"]);
                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

              

                <div class="form-group">
                  <label>İçerik Tipi</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <select class="form-control">
                        <option>Text</option>
                        <option>File</option>
                      </select>
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>Açıklama</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="settings_username" required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="password" name="settings_pass" required class="form-control">
                    </div>
                  </div>
                </div>

                

                
             



                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="setting_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["settingsUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Ayar Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['setting_update'])) {

                

                
                $sonuc=$db->update("settings",$_POST,
                  ["form_name" => "setting_update",
                  "columns" => "settings_id",
                  "dir" => "settings",
                "file_name" => "settings_value",
                "file_delete" => "delete_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("settings","settings_id",$_GET['settings_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);






?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  


                <div class="form-group">
                  <label>Açıklama</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="settings_description" readonly value="<?php echo $row["settings_description"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                
              <?php 
                      if ($row["settings_type"]==="file") { ?>
                        <div class="form-group">
                  <label>Resim Seç</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="settings_value" required class="form-control">
                    </div>
                  </div>
                </div>
                        


                      <?php }

               ?>


               <div class="form-group">
                  <label>İçerik</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <?php 

                          if ($row["settings_type"]==="text") {?>
                            <input type="text" name="settings_value"  value="<?php echo $row["settings_value"]; ?>" required class="form-control">
                          <?php }

                          else if ($row["settings_type"]==="textarea") {?>
                            <textarea name="settings_value" value="<?php echo $row["settings_value"]; ?>" required class="form-control" ></textarea>
                          <?php }
                          
                          else if ($row["settings_type"]==="file") {?>

                            <img width="100px" src="dimg/settings/<?php echo $row["settings_value"] ?>">
                          <?php }

                       ?>
                      
                    </div>
                  </div>
                </div>

                
                
              <input type="hidden" name="settings_id" value="<?php echo $row["settings_id"]; ?>">
              <input type="hidden" name="delete_file" value="<?php echo $row["settings_value"]; ?>">

                
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="setting_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>



      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Ayarlar</h3>
             <!-- <div align="right">
                <a href="?settingsInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>-->
              <br><br>
              <?php   
              if (isset($_GET["settingsDelete"])) {

                $sonuc=$db->delete("settings","settings_id",$_GET["settings_id"]);
      
      
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
                  
                  <th>Ad</th>
                  <th>İçerik</th>
                  <th>Key</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 

                  $sql=$db->read("settings");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  
                  <td><?php echo $row["settings_description"] ?></td>
                  <td><?php echo $row["settings_value"] ?></td>
                  <td><?php echo $row["settings_key"] ?></td>
                  
                  <td align="center" width="5"><a href="?settingsUpdate=true&settings_id=<?php echo $row["settings_id"] ?>"><i class="fa fa-pencil"></a></i></td>
                   <td align="center" width="5"><a href="?settingsDelete=true&settings_id=<?php echo $row["settings_id"] ?>"><i style="color: red;" class="fa fa-trash-o"></a></i></td>
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