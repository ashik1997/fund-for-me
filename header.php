	<?php 
		include 'config.php';
	 ?>
	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
	<div class="header header-1">
    	<!-- TOPBAR -->
    	<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<p><em>Crowdfunding sites</em></p>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="sosmed-icon pull-right">
							<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
							<a href="#"><i class="fa fa-pinterest"></i></a> 
							<?php  
								if ( empty($_SESSION['uEmail'])){
							 ?>
							<a href="loginReg.php"><i class=""></i>Login/Reg</a>
							<?php  
								}else{
							 ?>
							 	<a href="user/" title="dashboard"><?php echo $_SESSION['uEmail'];  ?></a>
								<a href="logOut.php" title="logout"><i class="fa fa-sign-out"></i></a> 
							
							<?php  } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		  

    	<!-- MIDDLE BAR -->
		<div class="middlebar">
			<div class="container">
				
				
				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Mail :</div>
							info@funfforme.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Us :</div>
							+880 1931 65 24 76
						</div>
					</div>
					<!-- INFO 3 -->
					<div class="box-act">
						<a href="cause.php" class="btn btn-lg btn-primary">DONATE NOW</a>
					</div>
					
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item <?php if (stripos($_SERVER['REQUEST_URI'],'index.php') !== false) {echo 'active';} ?>">
			                    <a class="nav-link" href="index.php">
						          HOME
						        </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'about.php') !== false) {echo 'active';} ?>" href="about.php">
						          ABOUT
						        </a>
			                </li>
			                <li class="dropdown">
							  <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="cause.php">
							    EVENTS
							  </a>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							  	<?php 
							  	$sql = "SELECT * FROM categories order by id desc";
			                    $result = mysqli_query($con, $sql);
			                    if (mysqli_num_rows($result) > 0) {
			                     // output data of each row
			                     while($row = mysqli_fetch_assoc($result)) {
							  	?>
							    <a class="dropdown-item" href="cause.php?cat_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
								<?php }} ?>
							  </ul>
							</li>
			                <!-- <li class="nav-item <?php if (stripos($_SERVER['REQUEST_URI'],'cause.php') !== false) {echo 'active';} ?>">
			                    <a class="nav-link" href="cause.php">
						          EVENTS
						        </a>
			                </li> -->
			                <li class="nav-item <?php if (stripos($_SERVER['REQUEST_URI'],'gallery.php') !== false) {echo 'active';} ?>">
			                    <a class="nav-link" href="gallery.php">
						          GALLERY
						        </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#contact">CONTACT US</a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>