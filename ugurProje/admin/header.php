<?php require_once "settings.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="nedmin/dimg/settings/<?php echo $settings['icon']; ?>" type="image/x-icon" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $settings["description"] ?>">
  <meta name="author" content="<?php echo $settings["author"] ?>">

  <title><?php echo $settings["title"] ?></title>



    <!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<script type="text/javascript">
    function uyar(){
      alert ("Sayfaya Gitmek İçin Giriş Yapınız");
    }

  </script>
  <div id="wrapper">
	<div class="header"><!--Header -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="index-1.htm"><img width="110px" src="nedmin/dimg/settings/<?php echo $settings["logo"] ?>" alt="logo" class="logo img-responsive"></a>
				</div>
				<div class="col-md-8">
					<div class="pushright">
						<div class="top">
<!-- sil ----------------------------------------------------------------->


							


<!------------------------------------------------------------------->

							<?php  if (!isset($_SESSION['users'])){?>
							<a href="#" id="reg" class="btn btn-default btn-dark" ><?php if (!isset($_SESSION['users'])) {
             echo "Giriş Yap -- & -- Kayıt Ol";}  ?></a>
             <?php } ?>


             <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  
  <label class="btn btn-outline-primary" for="btncheck1"><?php  if (isset($_SESSION['users'])){?>

	<p type="" name="" href="" style=""  class="btn btn-primary active " class="myacc"><?php if (isset($_SESSION['users'])){ echo $_SESSION['users']["users_namesurname"];} ?></p>
             	
           <?php } ?></label>

  
  <label class="btn btn-outline-primary" for="btncheck2"><?php  if (isset($_SESSION['users'])){?>
           <a href="logout.php" title="Çıkış Yapmak İçin Tıklayınız" class="btn btn-danger">Çıkış Yap</a>
           <?php } ?></label>
</div>
           

             
							<div class="regwrap">
								<div class="row">
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Giriş Yap</div>
										</div>
										<p>
											Hesabın Var mı? Hemen giriş yap
										</p>
										<a href="login.php"><button class="btn btn-default btn-primary">Giriş Yap</button></a>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Register</div>
										</div>
										<p>
											Hesabın yok mu? Hemen kayıt ol
										</p>
										<a href="register.php"><button class="btn btn-default btn-yellow">Kayıt Ol</button></a>
									</div>
								</div>
							</div>
							
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label for="search" class="col-sm-2 control-label">Search</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="search">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->









	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">AnaSayfa</a><div class="curve"></div></li>
								<li class="dropdown menu-large">
									
								</li>
								<li class="dropdown">
									
									<ul class="dropdown-menu">
										<?php 

      $sql=$db->read("blogs");
      $say=0;
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {$say++;  ?>
										<li><a href="bloglarslug/<?php echo $row['blogs_slug'] ?>"><?php echo $row['blogs_title'] ?></a></li>
										<?php } ?>
									</ul>
								</li>
								<li><a href="blog-details.php">Araçlar</a></li>
							
															</ul>
														
						</div>
					</div>
					<div class="col-md-2 machart">
						
						
					</div>
				</div>
			</div>
		</div>
	</div><!--end main-nav -->
