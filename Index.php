<?php
include'core/database/connection.php';
?>

<html>
	<head>
		<title>InspirationHunter</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
		<link rel="stylesheet" href="assets/css/style-complete.css"/>
	</head>
	<!--Helvetica Neue-->
<body>
<div class="front-img">
	<img src="assets/images/background.jpg"></img>
</div>	

<div class="wrapper">
<!-- header wrapper -->
<div class="header-wrapper">
	
	<div class="nav-container">
		<!-- Nav -->
		<div class="nav">
			
			<div class="nav-left">
				<ul>
					<li><i class="" aria-hidden="true"></i><a href="#">Home</a></li>
					<li><a href="#"></a></li>
				</ul>
			</div><!-- nav left ends-->

			<div class="nav-right">
				<ul>
					<li><a href="#"></a></li>
				</ul>
			</div><!-- nav right ends-->

		</div><!-- nav ends -->

	</div><!-- nav container ends -->

</div><!-- header wrapper end -->
	
<!---Inner wrapper-->
<div class="inner-wrapper">
	<!-- main container -->
	<div class="main-container">
		<!-- content left-->
		<div class="content-left">
            <br>
			<h1>Inspiration Hunter</h1>
			<br/>
			<p>Welcome on Inspiration Hunter.This is the perfect place to share all your design's with the rest of the world.
                Just register and get started right now.
            </p>
		</div><!-- content left ends -->	

		<!-- content right ends -->
		<div class="content-right">
			<!-- Log In Section -->
			<div class="login-wrapper">
			 <?php include 'includes/Login.php';?>
			</div><!-- log in wrapper end -->

			<!-- SignUp Section -->
			<div class="signup-wrapper">
            <?php include 'includes/Register.php';?>
			</div>
			<!-- SIGN UP wrapper end -->

		</div><!-- content right ends -->

	</div><!-- main container end -->

</div><!-- inner wrapper ends-->
</div><!-- ends wrapper -->
</body>
</html>
