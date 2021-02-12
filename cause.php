<?php session_start(); ?>
<!DOCTYPE php>
<php lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funf For Me</title>
    <meta name="description" content="NGOO is a clean, modern, and fully responsive php Template. it is designed for charity, non-profit, fundraising, donation, volunteer, businesses or any type of person or business who wants to showcase their work, services and professional way.">
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
				<?php 
				if (isset($_GET['cat_id'])) {
 				  	$cat_id = $_GET['cat_id'];
 				  	$sql_cat = "SELECT * FROM categories where id = $cat_id";
			        $result_cat = mysqli_query($con, $sql_cat);
					$cat_name = mysqli_fetch_assoc($result_cat);
				?>
				<div class="title-page"><?php echo $cat_name['name'] ?> Events</div>
				<?php
 				}else{
 				?>
 				<div class="title-page">All Event</div>
 				<?php
 				} 
 				?>
			</div>
		</div>
	</div>

	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
 				  <?php
 				  if (isset($_GET['cat_id'])) {
 				  	$cat_id = $_GET['cat_id'];
 				  	$sql = "SELECT * FROM event where status=1 and cat_id = $cat_id order by id desc";
 				  }else{
 				  	$sql = "SELECT * FROM event where status=1 order by id desc";
 				  }
                    
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                     // output data of each row
                     while($row = mysqli_fetch_assoc($result)) {
                      
                     echo '
				  			<!-- Item 1 -->
							<div class="col-sm-4 col-md-4">
					            <div class="box-fundraising">
				              		<div class="media">
				                		<img src="images/event/'.$row['image'].'" alt="">
				              		</div>
				              		<div class="body-content">
				              			<p class="title"><a>'.$row['title'].'</a></p>
				              			<div class="progress-fundraising">
					              			<div class="total">BDT. ';
					              			$sql_donetion = "SELECT sum(donation_amount) as total_donation_amount FROM donation where event_id='".$row['id']."'";
	                    					$row_donetion = mysqli_fetch_assoc(mysqli_query($con, $sql_donetion));
	                    					echo $row_donetion['total_donation_amount'];
					              			echo ' <span>to go</span></div>
				              			  	<div class="persen">BDT. '.$row['donation_amount'].'</div>
					              			
											<a class="btn btn-primary text-on-primary"  href="cause-single.php?blog_id='.$row['id'].'">Details</a>
										</div>
				              		</div>
					            </div>
					        </div>
                                ';

			                     }
			                    } else {
			                     echo "There is no data";
			                    }
			           ?>
						  
						  <!-- END TAB 2 CONTENT -->
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
	<script src="js/vendor/bootstrap-dropdownhover.min.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/script.js"></script>

		
</body>

</php>