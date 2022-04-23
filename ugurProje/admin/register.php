<?php require_once "settings.php";
  if (!isset($_SESSION)) {
    session_start(); 
}
if (isset($_SESSION['users'])) {
  header("Location:index.php");
  exit;
}
require_once "nedmin/netting/class.crud.php";
$db=new crud();


 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="nedmin/dimg/settings/<?php echo $settings['icon']; ?>" type="image/x-icon" >
  <title><?php echo $settings["title"] ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="nedmin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="nedmin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="nedmin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="nedmin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="nedmin/plugins/iCheck/square/blue.css">

  <style type="text/css">
    .login-page {
      background:url(nedmin/dimg/images/bg.jpg) no-repeat center center fixed ;
      background-size:cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
    }
    body{
      overflow: hidden;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php" style="color: white;"><b><?php echo $settings["title"] ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background: #fff0;">
    <p class="login-box-msg" style="color:white;">Kayıt olmak için bilgilerinizi girin</p>

<section class="content">
  <?php 
  
  

   ?>

      


           
            
            <div class="box-body">
              <?php 

              if (isset($_POST['users_insert'])) {
                $sonuc=$db->insert("users",$_POST,
                  ["form_name" => "users_insert","pass" => "users_pass",
                  "dir" => "users",
                "file_name" => "users_file"]);

                if ($sonuc["status"]) { ?>
                  <div class="alert alert-success">Kayıt Başarılı<br> Giriş Sayfasına Yönlendiriliyorsunuz 
                  
                 <?php
                 header("Refresh: 2; url=login.php");

                  ?> 
                </div>
                <?php }else{ ?>
                  <div class="alert alert-danger">Kayıt Başarısız <?php echo $sonuc['error'] ?></div>

                <?php }
              }

               ?>

              



              <form method="POST" enctype="multipart/form-data">

              

                <div class="form-group has-feedback" >
                  
                  <div class="row">
                    
                      <input type="text" placeholder="Ad Soyad" name="users_namesurname" required class="form-control">
                    <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                </div>


                 <div class="form-group has-feedback" >
                  
                  <div class="row">
                    
                      <input type="text" placeholder="Kullanıcı Adı" name="users_username" required class="form-control">
                     <span class="glyphicon glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                </div>

                
              

                <div class="form-group has-feedback" >
                  
                  <div class="row">
                    
                      <input type="email" placeholder="Mail" name="users_mail" required class="form-control">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>

                </div>

                
              

                <div class="form-group has-feedback" >
                 
                  <div class="row">
                    
                      <input type="password" placeholder="Şifre" name="users_pass" required class="form-control">
                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                </div>
               
              



                 <button type="submit" name="users_insert" class="btn btn-primary btn-block btn-flat" >Kayıt Ol</button>

              </form>
              
            </div>
            
          </div>






      <!-- Default box -->
      
      <!-- /.box -->

    </section>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>





