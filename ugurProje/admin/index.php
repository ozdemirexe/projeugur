<?php require_once "header.php" ?>

	<div class="container">
		<!--small-nav -->
		


			<h1>Parçası Mevcut Araçlar</h1>
			
		<!--small-nav -->



		<!--Slider-->
		<div class="clearfix"></div>
		<div class="lines"></div>
		<div class="main-slide">
			<div id="sync1" class="owl-carousel">

				<?php 

      $sql=$db->read("sliders"
  
      );
      $say=0;
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {$say++;  ?>
				<div class="item">
					<div class="slide-desc">

						<div class="inner">

							<h1><?php echo $row['sliders_title'] ?></h1>
							<a href="blog-details.php" class="btn btn-danger">İncele 
              </a></a>

							
						</div>
						<div class="inner">
							<!--<div class="pro-pricetag big-deal">
								<div class="inner">
										<span class="oldprice">$314</span>
										<span>$199</span>
										<span class="ondeal">Best Deal</span>
								</div>
							</div>-->
						</div>
					</div>
					<div class="slide-type-1">
						<img style=" max-width: 290px; " src="nedmin/dimg/sliders/<?php echo $row['sliders_file']; ?>" alt="" class="img-responsive">
					</div>
				</div>
				<?php } ?>
				
				
				
			</div>
		</div>
		<div class="bar"></div>

	</div>
	<div class="f-widget featpro">
		<div class="container">
			<div class="title-widget-bg">
				<div class="title-widget">Trend Parçalar</div>
				<div class="carousel-nav">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
			</div>
			

       
			<div id="product-carousel" class="owl-carousel owl-theme">


				<?php 
			$sql=$db->read("frontpages");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ;
                 ?>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="product.htm"><img style=" max-width: 200px; " src="nedmin/dimg/frontpages/<?php echo $row["frontpages_file"] ?>" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><a style="text-decoration: none; color: white;"
								<?php  if (isset($_SESSION['users'])){?> echo href="<?php echo $row["frontpages_url"] ?>" <?php } ?>
            <?php  if (!isset($_SESSION['users'])){?> echo onclick="uyar()" <?php } ?>><span>İncele</span></div></div></a>
						</div>
							<span class="smalltitle"><b><a href="product.htm"><?php echo $row["frontpages_title"] ?></a></b></span>
							<span class="smalldesc"><?php echo $row["frontpages_content"] ?></span>
					</div>
					
				</div>
				<?php } ?>
			</div>
		
		</div>

	</div>


	<!-- En son Kladııgm yer ----------------------------------------------------------------->
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				
				
				<div class="title-bg">
					<div class="title">Parçalar</div>
				</div>
				<div class="row prdct"><!--Products-->
				<?php  	$sql=$db->read("cars");
                  $say=1;
                  while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ;
                 ?>


					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<a <?php  if (isset($_SESSION['users'])){?> echo href="<?php echo $row["cars_url"] ?>" <?php } ?> ><img style=" max-width: 200px; " src="nedmin/dimg/cars/<?php echo $row["cars_file"] ?>" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><a style="text-decoration: none; color: white;"
								<?php  if (isset($_SESSION['users'])){?> echo href="<?php echo $row["cars_url"] ?>" <?php } ?>
            <?php  if (!isset($_SESSION['users'])){?> echo onclick="uyar()" <?php } ?>><span>İncele</span></div></div></a>
							</div>
							<span class="smalltitle"><b><a href="product.htm"><?php echo $row["cars_title"] ?></a></b></span>
							<span class="smalldesc"><?php echo $row["cars_content"] ?></span>
						</div>
					</div>
					<?php } ?>
					
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
			
		</div>
	</div>
	
	<?php require_once "footer.php" ?>
    

