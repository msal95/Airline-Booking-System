<?php

if(!$_SESSION['id']) {

?>

<div class="container-fluid" style="background:#003f7a; color:#fff; height:auto;">
		<div class="row" style="border-bottom:1px solid #fff;">
			<div class="col-md-10">
			<h3 style="margin-bottom:3%;">Airline Reservation System</h3>
			</div>
			<div class="col-md-2">
				<h5 style="margin-top:15%;">Welcome </h5>
			</div>
		</div>
		<nav class="navbar navbar-inverse"  style="background:#003f7a; margin-bottom:-0.2px; border:none;">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
			  <li style="border-right:1px solid #fff;"><a href="index.php" style="color:#fff;">Home</a></li>
			  <li style="border-right:1px solid #fff;"><a href="about.php" style="color:#fff;">About Us</a></li>
			  <li style="border-right:1px solid #fff;"><a href="booking.php" style="color:#fff;">Book Ticket</a></li>
			  <li style="border-right:1px solid #fff;"><a href="contact.php" style="color:#fff;">Contact Us</a></li>
			</ul>
			</div>
		  </div>
		</nav>
		</div>
		
		
		<?php } elseif($_SESSION['id'] != 1) { ?>
	
		<div class="container-fluid" style="background:#003f7a; color:#fff; height:auto;">
		<div class="row" style="border-bottom:1px solid #fff;">
			<div class="col-md-10">
			<h3 style="margin-bottom:3%;">Airline Reservation System</h3>
			</div>
			<div class="col-md-2">
				<h5 style="margin-top:15%;">Welcome <?php echo $name; ?></h5>
			</div>
		</div>
		<nav class="navbar navbar-inverse"  style="background:#003f7a; margin-bottom:-0.2px; border:none;">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
			  <li style="border-right:1px solid #fff;"><a href="index.php" style="color:#fff;">Home</a></li>
			  <li style="border-right:1px solid #fff;"><a href="about.php" style="color:#fff;">About Us</a></li>
			  <li style="border-right:1px solid #fff;"><a href="booking.php" style="color:#fff;">Book Ticket</a></li>
			  <li style="border-right:1px solid #fff;"><a href="booking report.php" style="color:#fff;">My Bookings</a></li>
			  <li style="border-right:1px solid #fff;"><a href="my_account.php" style="color:#fff;">My Account</a></li>
			  <li style="border-right:1px solid #fff;"><a href="c_signup.php" style="color:#fff;">Change Password</a></li>
			  <li style="border-right:1px solid #fff;"><a href="logout.php" style="color:#fff;">Logout</a></li>
			</ul>
			</div>
		  </div>
		</nav>
		</div>
		
		<?php } elseif($_SESSION['id'] == 1) { ?>
		
		<div class="container-fluid" style="background:#003f7a; color:#fff; height:auto;">
		<div class="row" style="border-bottom:1px solid #fff;">
			<div class="col-md-10">
			<h3 style="margin-bottom:3%;">Airline Reservation System</h3>
			</div>
			<div class="col-md-2">
				<h5 style="margin-top:15%;">Welcome Shahid</h5>
			</div>
		</div>
		</div>
		
			<div class="w3-sidebar w3-bar-block w3-#003f7a" style="background:#003f7a; color:#fff;">
		  
		  <div class="w3-dropdown-hover">
			<button class="w3-button w3-hover-dark-gray w3-border-bottom"  style="background:#003f7a; color:#fff;"><i class="fa fa-id-card" aria-hidden="true"></i> Administeration <i class="fa fa-caret-down"></i></button>
			<div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
			  <a href="user registration.php" class="w3-bar-item w3-hover-dark-gray w3-button">Add New System User</a>
			  <a href="customer registration.php" class="w3-bar-item w3-hover-dark-gray w3-button">Add New Customer</a>
			  <a href="add airlines.php" class="w3-bar-item w3-hover-dark-gray w3-button">Add New Airlines</a>
			  <a href="airline route.php" class="w3-bar-item w3-hover-dark-gray w3-button">Add New Route</a>
			  <a href="airline company.php" class="w3-bar-item w3-hover-dark-gray w3-button">Add Airline Company</a>
			</div>
		  </div>
		  <div class="w3-dropdown-hover">
			<button class="w3-button w3-hover-dark-gray w3-border-bottom"><i class="fa fa-id-card" aria-hidden="true"></i> Reports <i class="fa fa-caret-down"></i></button>
			<div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
			  <a href="user report.php" class="w3-bar-item w3-hover-dark-gray w3-button"> System User Report</a>
			  <a href="customer report.php" class="w3-bar-item w3-hover-dark-gray w3-button"> Customer Report</a>
			  <a href="airline report.php" class="w3-bar-item w3-hover-dark-gray w3-button"> Airlines Report</a>
			  <a href="airline route report.php" class="w3-bar-item w3-hover-dark-gray w3-button"> Route Report</a>
			  <a href="company report.php" class="w3-bar-item w3-hover-dark-gray w3-button">Report Company</a>
			  <a href="booking report.php" class="w3-bar-item w3-hover-dark-gray w3-button">Report Booking</a>
			</div>
		  </div>
		  <div class="w3-dropdown-hover"><a href="my_account.php">
			<button class="w3-button w3-hover-dark-gray w3-border-bottom"><i class="fa fa-id-card" aria-hidden="true"></i> My Account</button>
			</a>
		  </div>
		  <div class="w3-dropdown-hover"><a href="c_signup.php">
			<button class="w3-button w3-hover-dark-gray w3-border-bottom"><i class="fa fa-id-card" aria-hidden="true"></i> Change Password</button>
			</a>
		  </div>
		  <div class="w3-dropdown-hover"><a href="logout.php">
			<button class="w3-button w3-hover-dark-gray w3-border-bottom"><i class="fa fa-id-card" aria-hidden="true"></i> Logout</button>
			</a>
		  </div>
		</div>
			</div>
		<?php } ?>

<script>
	$(document).ready(function(){
		$('.dropdown').hover(
		function(){
		$(this).children('.dropdown-menu').slideDown(200);},
		function(){
		$(this).children('.dropdown-menu').slideUp(200);
		}
		);
	});
</script>