<?php
include 'config.php';
		session_start();
     if (empty($_SESSION['uEmail'])){
	    header("Location: loginReg.php");
	  }
		$message = "";
		if (isset($_POST['add_new'])) {
		$donation_amount = $_POST['donation_amount'];
		$method_name = $_POST['method_name'];
		$transection_no = $_POST['transection_no'];
		$user_email= $_SESSION['uEmail'];
		$event_id= $_POST['event_id'];
		 

		 //echo"'$drname', '$pname', '$phonenum','$amount'";
		$sql_add_donation = "INSERT INTO donation(donation_amount,method_name,transection_no,user_email,event_id)
		VALUES ('$donation_amount','$method_name','$transection_no','$user_email','$event_id')";
		// echo $sql;
		$query_add_donation = mysqli_query($con,$sql_add_donation);
		if ($query_add_donation) {
		 
		  $message = '<div class="alert alert-success">
		  <strong>Success!</strong> New record created successfully !
		</div>';
		}else{
		  $message = '<div class="alert alert-danger">
		  <strong>Success!</strong> Faild !
		</div>';
		}
		}
		?>
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
	$sql = "SELECT * from event where id='".$_GET['event_id']."' ";
     $query = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($query);
 ?>
 
	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-6 col-md-6">
						<div class="total">Donated BDT. <?php 
  			  			$sql_donetion = "SELECT sum(donation_amount) as total_donation_amount FROM donation where event_id='".$row['id']."'";
    					$row_donetion = mysqli_fetch_assoc(mysqli_query($con, $sql_donetion));
    					echo $row_donetion['total_donation_amount'];
	  			  		 ?></div>
	  			  		 <div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						 
						<div class="detail">
							<h3>BDT.<small></small><?php echo $row['donation_amount']; ?><small>Goal</small></h3>
						</div>
						<div class="detail">
							<h3 style="color: black;"> Bkash: 01931 65 24 76 </h3>
							<h3 style="color: black;"> Rocket: 01931 65 24 76 5 </h3>
						</div>
						<form  accept="" method="post" >
							<div class="col-sm-6">
							<label style="color: black;">Donate Amount:</label>
							<input type="txt" name="donation_amount" class="form-control" placeholder="Donation Amount">
							</div>
							<br> 
							<div class="col-md-6">
								<label>Trx Method</label>
								<input type="hidden" name="event_id" value="<?php echo $_GET['event_id']; ?>">
								<select class="form-control" name="method_name"> 
									<option>DBBL/ROCKET</option>
									<option>Bkash</option>
								</select>
							</div><br> 
							<div class="col-sm-6">
							<label style="color: black;">Transection Id:</label>
							<input type="txt" name="transection_no" class="form-control" placeholder="transection id">
							</div> <br>
							 <div   class="col-md-6">
							  <input type="submit" class="btn btn-primary" name="add_new" value="submit">
							</div>
						</form>
					</div>

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							Who<span> Helped</span> Us
						</h2>
						
						<div class="margin-bottom-50"></div>
						<dl class="hiw">
							<?php
	                        $sqlFor_donation = "SELECT * from donation where status=1 and event_id='".$_GET['event_id']."' order by id desc";
	                        $queryFor_donation = mysqli_query($con,$sqlFor_donation);
	                        while($info = mysqli_fetch_array($queryFor_donation)) {
	                        ?>
							<dt>
							<?php 
								$sql_user = "SELECT * from user where  email='".$info['user_email']."' ";
	                        	$info_user = mysqli_fetch_array(mysqli_query($con,$sql_user)); 
	                        ?>
	                        <?php if(empty($info_user['image'])){ ?>
	                        	<span class="fa fa-gift"></span>
	                        <?php }else{ ?>
	                        	<img style="border-radius: 50%;" src="images/user/<?php echo $info_user['image']; ?>">
	                    	<?php } ?>
							</dt>
							<dd><h3>BDT. <?php echo $info['donation_amount'];?></h3><?php echo $info_user['name'];?></dd>
						<?php } ?>
							
							
						</dl>
						<div class="spacer-70"></div>
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