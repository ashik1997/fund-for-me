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
	<div id="oc-fullslider" class="banner owl-carousel">
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home01.jpg" alt="Slider">
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption">
			                <h1 class="caption-heading bg"><span>#StopViolence</span> For Every Woman</h1>
			                <p class="bg">Remipsum dolor sit amet consectetur adipisicing</p>
			                <a href="cause.php" class="btn btn-primary">DONATE NOW</a>
			            </div>  
		            </div>
	            </div>
        	</div>
        </div>
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home02.jpg" alt="Slider">
	            <div class="slider-pos">
	            <div class="container">
	            	<div class="wrap-caption center">
		                <h1 class="caption-heading bg"><span>#StopViolence</span> For Every Woman</h1>
		                <p class="bg">remipsum dolor sit amet consectetur adipisicing</p>
		                <a href="cause.php" class="btn btn-primary">DONATE NOW</a>
		            </div>  
	            </div>  
	            </div>  
            </div>  
        </div>
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home03.jpg" alt="Slider">
	            <div class="slider-pos">
	            <div class="container">
	            	<div class="wrap-caption right">
		                <h1 class="caption-heading bg"><span>#StopViolence</span> For Every Woman</h1>
		                <p class="bg">remipsum dolor sit amet consectetur adipisicing</p>
		                <a href="cause.php" class="btn btn-primary">DONATE NOW</a>
		            </div>  
	            </div>  
	            </div>  
            </div>  
        </div>
    </div>

	<div class="clearfix"></div>
	 
	<!-- WE NEED YOUR HELP -->
	<div class="section services">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							We <span>Need</span> Your Help
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>
					<div class="clearfix"></div>
					<?php 

						$sql = "SELECT * FROM event where status=1 order by id desc limit 6";
	                    $result = mysqli_query($con, $sql);

	                    if (mysqli_num_rows($result) > 0) {
	                     // output data of each row
	                     while($row = mysqli_fetch_assoc($result)) {
					 ?>
					<!-- Item 1 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src="images/event/<?php echo $row['image']; ?>" alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.php?blog_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></p>
		              			
		              			<div class="progress-fundraising">
			              			<div class="total">BDT. 
			              				<?php 
		              			  			$sql_donetion = "SELECT sum(donation_amount) as total_donation_amount FROM donation where event_id='".$row['id']."'";
	                    					$row_donetion = mysqli_fetch_assoc(mysqli_query($con, $sql_donetion));
	                    					echo $row_donetion['total_donation_amount'];
		              			  		 ?> <span>to go</span></div>
		              			  	<div class="persen">Target BDT. 
		              			  		<?php echo $row['donation_amount']; ?>
		              			  	</div>
			              			<div class="progress">
									  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
		              		</div>
			            </div>
			        </div>
			        <?php 
			        	}
			        }
			         ?>

					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href="cause.php" class="btn btn-primary">SEE ALL CAUSE</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- URGENT CAUSE -->	 
	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap-top">
			<div class="container">
				<div class="row align-items-end">

					<div class="col-sm-6 col-md-6">
						<img src="images/help-people.jpg" alt="" class="img-fluid">
					</div>

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							How To <span>Help</span> Us
						</h2>
						<div class="section-subheading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div> 
						<div class="margin-bottom-50"></div>
						<dl class="hiw">
							<dt><span class="fa fa-gift"></span></dt>
							<dd><div class="no">01</div><h3>Send Donation</h3>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</dd>
							<dt><span class="fa fa-male"></span></dt>
							<dd><div class="no">02</div><h3>Become Volunteer</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
							<dt><span class="fa fa-bullhorn"></span></dt>
							<dd><div class="no">03</div><h3>Share Media</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
							
						</dl>
						<div class="spacer-70"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- WE HELP MANY PEOPLE -->
	<div class="section" data-background="images/bg-map-dot.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-info color-white">
							<h1 class="section-heading light no-after">
								<span>We Help Many</span> People
							</h1>
							<h3 class="color-primary">Want to Become a Volunteer</h3>

							<div class="spacer-10"></div>
							<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit .</p>

							<!-- <a href="#" class="btn btn-light margin-btn">LEARN MORE</a> <a href="#" class="btn btn-primary margin-btn">JOIN US NOW</a>	 -->
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR GALLERY -->
	<div class="section" data-background="images/bg-gallery.png">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Gallery</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="row popup-gallery gutter-5">
						<?php
		                    $sql = "SELECT * FROM gallery order by id desc limit 6";
		                    $result = mysqli_query($con, $sql);

		                    if (mysqli_num_rows($result) > 0) {
		                     // output data of each row
		                    	$sl = 0;
		                     while($row = mysqli_fetch_assoc($result)) {
                     		?>
						<div class="col-xs-12 col-md-4">
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
						<div class="col-xs-12 col-md-4">
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
						<div class="col-xs-12 col-md-4">
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
						<div class="col-xs-12 col-md-4">
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
		                    }
						 ?>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR PARTNERS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Partners</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>
					
				</div>
				<div class="row gutter-5">
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client1.png" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client2.png" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client3.png" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client4.png" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client5.png" alt="" class="img-fluid img-border"></a>
					</div>
					<div class="col-6 col-md-2">
						<a href="#"><img src="images/client6.png" alt="" class="img-fluid img-border"></a>
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
			                	<a href="cause.php" class="btn btn-secondary">DONATE NOW</a>
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

	<script src="js/script.js"></script>

</body>

</html>