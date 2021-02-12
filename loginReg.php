<?php
	  include 'config.php';
	  session_start();
$message="";

	if (isset($_POST['signup'])) {
		if (isset($_SESSION['uEmail'])) {
			header("Location: user/");
		} 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['pwd']);
		$phone = $_POST['phone'];
		$nid = $_POST['nid'];
		$sql = " insert into user (name,email,phone,password,nid) values ('$name','$email','$phone','$password','$nid') ";
    	$query = mysqli_query($con,$sql);
    	if($query){
    		$_SESSION['uEmail'] = $email;
    		header("Location: user/");
    	}
    	else{
    		$message = '<div class="alert alert-danger alert-dismissible fade in">
		    <strong>Email or Phone Already exists...!</strong>
		    </div>';
    	}
	}
	$error = "";
  if(isset($_POST['login'])){
	if (isset($_SESSION['uEmail'])) {
		header("Location: user/");
	}
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "select * from user where email = '$email'";
    $query = mysqli_query($con, $sql);
    $userinfo = mysqli_fetch_array($query);

    if($userinfo['email'] != $email){
      $error = "Wrong User Name";
    }
    else{
      if($userinfo['password'] != $password){
        $error = "Wrong Password";
      }
      else{
        $_SESSION['uEmail'] = $email;
        header("Location: user/");
          
      }
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
    <title>NGOO - Charity, Non-profit, and Fundraising HTML Template</title>
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


	<!-- OUR VOLUUNTER SAYS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-4  panel panel-default">
			<br>
			<div class="well well-sm"><h4 class="text-success">Login Your Account</h4></div>
			<form action="" method="POST">
				<div class="form-group">
			      <label for="email">User Email:</label>
			      <input type="email" class="form-control" name="email" id="email" placeholder="User Name" required>
			    </div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="password" id="password"  placeholder="Password" required>
				</div>
				<div class="form-group">
				  <input type="submit" class="btn btn-primary" name="login" value="Login">
				</div>
				<?php echo $error; ?>
			</form>
		</div>
		<div class="col-md-1"><br><h3 class="text-danger">-OR-</h3><br></div>
		<div class="col-md-7 panel panel-default">
			<?php echo $message; ?>
			<br>
			<div class="well well-sm"><h4 class="text-success">New User Signup !</h4></div>
			<form action="" method="POST">
				<div class="form-group">
			      <label for="fullName">Full Name:</label>
			      <input type="text" class="form-control" name="name" id="fullName" placeholder="Full Name" required>
			    </div>
			    <div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Password" required>
				</div>
				<div class="form-group">
			      <label for="phone">Phone No:</label>
			      <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone No" required>
			    </div>
			    <div class="form-group">
			      <label for="phone">NID No:</label>
			      <input type="tel" class="form-control" name="nid" id="nid" placeholder="NID No" required>
			    </div>
			    <div class="form-group">
				  <input type="submit" class="btn btn-primary" name="signup" value="Signup">
				</div>
			</form>
		</div>

			</div>
		</div>
	</div>
	<!-- CTA -->
	
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