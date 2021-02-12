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
    <?php 
$id=$_GET['blog_id'];
    
    $sql = "select * from event where id='$id'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
   
    $image = $row['image'];
   
     
  
?>
 
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Event details</div>
			</div>
		</div>
	</div>

	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="spacer-90"></div>

				<div class="row">
					<div class="col-sm-12 col-md-12">
						 
						<h2 class="color-secondary"><?php echo $row['title']; ?></h2>
					</div>

					<div class="col-sm-6 col-md-6">

						<p class="uk18 color-secondary"><?php echo $row['description']; ?></p>

						<div class="spacer-30"></div>
						 
						 

						<div class="rs-box-download">
							<div class="icon">
								<i class="fa fa-file-pdf-o"></i>
							</div>
							<div class="body">
								<a href="images/event/<?php echo $row['pdf']; ?>">
									<h3>Click here to download .PDF</h3>
								</a>
							</div>
						</div>

					</div>

					<div class="col-sm-6 col-md-6">
						<div class="img-video">
							<img src="images/event/<?php echo $row['image']; ?>"> 
							<div class="ripple"></div>
						</div>
							
							<div class="spacer-30"></div>

							<div class="progress-fundraising progress-lg">
		              			<div class="total">Donated</div>
		          			  	<div class="persen">BDT. <?php 
		              			  			$sql_donetion = "SELECT sum(donation_amount) as total_donation_amount FROM donation where event_id='".$row['id']."'";
	                    					$row_donetion = mysqli_fetch_assoc(mysqli_query($con, $sql_donetion));
	                    					echo $row_donetion['total_donation_amount'];
		              			  		 ?></div>
		              			
								<div class="detail">
									<h3>Target <small>BDT. </small> <?php echo $row['donation_amount']; ?><small></small></h3>
								</div>
							</div>

							<a href="donation.php?event_id=<?php echo $row['id']; ?>" class="btn btn-primary">DONATE NOW</a>

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