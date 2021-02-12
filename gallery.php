<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funf For Me</title>
    <meta name="description" content="NGOO is a clean, modern, and fully responsive HTML Template. it is designed for charity, non-profit, fundraising, donation, volunteer, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="campaign, cause, charity, donate, donations, event, foundation, fund, fundraising, kids, ngo, non-profit, organization, volunteer">
    <meta name="author" content="rometheme.net"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-dropdownhover.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body>

    <?php include "header.php"; ?>
 
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Gallery</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
 	

	<!-- OUR GALLERY -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row popup-gallery gutter-5">
							<?php
		                    $sql = "SELECT * FROM gallery order by id desc";
		                    $result = mysqli_query($con, $sql);

		                    if (mysqli_num_rows($result) > 0) {
		                     // output data of each row
		                    	$sl = 0;
		                     while($row = mysqli_fetch_assoc($result)) {
                     		?>
							<!-- ITEM 1 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="images/gallery/<?php echo $row['image1']; ?>" title="Gallery #<?php echo $sl+1; ?>">
										<img src="images/gallery/<?php echo $row['image1']; ?>" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 2 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="images/gallery/<?php echo $row['image2']; ?>" title="Gallery #<?php echo $sl+2; ?>">
										<img src="images/gallery/<?php echo $row['image2']; ?>" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 3 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="images/gallery/<?php echo $row['image3']; ?>" title="Gallery #<?php echo $sl+3; ?>">
										<img src="images/gallery/<?php echo $row['image3']; ?>" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- ITEM 4 -->
							<div class="col-xs-6 col-md-3">
								<div class="box-gallery">
									<a href="images/gallery/<?php echo $row['image4']; ?>" title="Gallery #<?php echo $sl+4; ?>">
										<img src="images/gallery/<?php echo $row['image4']; ?>" alt="" class="img-fluid">
										<div class="project-info">
											<div class="project-icon">
												<span class="fa fa-search"></span>
											</div>
										</div>
									</a>
								</div>
							</div>
							<?php 
								$sl++;
								}
			                    } else {
			                     echo "There is no data";
                  			  }
							 ?>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	
	<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
			                	<h3>Join your hand with us for a better life and beautiful future.</h3>
			              	</div>
			              	<div class="body-action">
			                	<a href="#" class="btn btn-secondary">DONATE NOW</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<?php include "footer.php"; ?>
	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/script.js"></script>

		
</body>

</html>