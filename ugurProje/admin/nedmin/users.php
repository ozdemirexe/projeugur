<?php 
require_once 'header.php';
require_once 'sidebar.php'

?>
  



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<section class="content">
  <?php 
  if (isset($_GET["usersInsert"])) {
    // code...
  

   ?>

      <div class="box box-primary">


            <div class="content-header">
              <h1>Kullanıcı Ekle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">
              <?php 

              if (isset($_POST['users_insert'])) {
                $sonuc=$db->insert("users",$_POST,
                  ["form_name" => "users_insert","pass" => "users_pass",
                  "dir" => "users",
                "file_name" => "users_file"]);

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?></div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Kullanıcı Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="users_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Ad Soyad</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="users_namesurname" required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>Kullanıcı Mail</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="users_mail" required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>Kullanıcı Şifre</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="password" name="users_pass" required class="form-control">
                    </div>
                  </div>
                </div>

              

                <div class="form-group">
                  <label>Kullanıcı Durum</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <select class="form-control" name="users_status">
                        <option value="1">Aktif</option>
                        <option value="0">Pasif</option>
                      </select>
                    </div>
                  </div>
                </div>
                


                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="users_insert">Ekle</button></div>
              </form>
              
            </div>
            
          </div>
<?php } else if (isset($_GET["usersUpdate"])) {

    

  ?>


<div class="box box-primary">


            <div class="content-header">
              <h1>Kullanıcı Düzenle</h1>
              <hr>
              
            </div>
            
            <div class="box-body">


              <?php 

              if (isset($_POST['user_update'])) {

                

                
                $sonuc=$db->update("users",$_POST,
                  ["form_name" => "user_update","pass" => "users_pass",
                  "columns" => "users_id",
                  "dir" => "users",
                  "file_delete" => "delete_file",
                "file_name" => "users_file"]);
                

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı</div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?>  </div>

                <?php }
              }
$sql=$db->wread("users","users_id",$_GET['users_id']);
    $row=$sql->fetch(PDO::FETCH_ASSOC);
               ?>
           
              <!--Update işlem sorgusu-->
              



              <form method="POST" enctype="multipart/form-data">


                  <div class="form-group"  >
                  <label>Yüklü Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <img width="100px" src="dimg/users/<?php echo $row["users_file"] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group"  >
                  <label>Kullanıcı Resim</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="file" name="users_file"  class="form-control">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label>Ad Soyad</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="text" name="users_namesurname" value="<?php echo $row["users_namesurname"]; ?>" required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>Kullanıcı Mail</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="email" name="users_mail" value="<?php echo $row["users_mail"]; ?>"required class="form-control">
                    </div>
                  </div>
                </div>

                
              

                <div class="form-group">
                  <label>Kullanıcı Şifre</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input type="password" name="users_pass"  class="form-control">
                    </div>
                  </div>
                </div>

                

                
             

                <div class="form-group">
                  <label>Kullanıcı Durum</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <select class="form-control" name="users_status">
                        <option <?php  if ($row["users_status"]==1) {
                          echo "selected"."";
                        }  ?> value="1">Aktif</option>
                        <option <?php  if ($row["users_status"]==0) {
                          echo "selected"."";
                        }  ?> value="0">Pasif</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <input type="hidden" name="users_id" value="<?php echo $row["users_id"]; ?>">
                <input type="hidden" name="delete_file" value="<?php echo $row["users_file"]; ?>">
                <div align="right" class="box-footer"><button type="submit" class="btn btn-success" name="user_update">Düzenle</button></div>
              </form>
              
            </div>
            
          </div>


<?php } ?>


      <!-- Default box -->
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Kullanıcılar</h3>
              <div align="right">
                <a href="?usersInsert"><button class="btn btn-success">Yeni Ekle</button></a>
              </div>
              <?php   
              if (isset($_GET["usersDelete"])) {

                $sonuc=$db->delete("users","users_id",$_GET["users_id"],$_GET['file_delete']);
      
      
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
                  <th>Ad Soyad</th>
                  <th>Mail</th>
                  <th>Durum</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php 

                  $sql=$db->read("users");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {;
                 ?>

                <tr>
                  <td><?php echo $say++; ?></td>
                  <td><?php echo $row["users_namesurname"] ?></td>
                  <td><?php echo $row["users_mail"] ?></td>
                  <td><?php

                  if ($row["users_status"]==1) {
                    echo "Aktif";
                  }else if ($row["users_status"]==0) {
                    echo "Pasif";
                  }

                   ?></td>
                 <td align="center" width="5"><a href="?usersUpdate=true&users_id=<?php echo $row["users_id"] ?>"><i class="fa fa-pencil"></a></i></td>
                  <td align="center" width="5"><a style="color: red;" href="?usersDelete=true&users_id=<?php echo $row["users_id"] ?>&file_delete=<?php echo $row["users_file"] ?>"><i class="fa fa-trash-o"></i></td>
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