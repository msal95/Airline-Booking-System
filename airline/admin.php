
<?php
	session_start();
	
	include"db.php";
	if(!$_SESSION['id']){
		
		header("location:login.php");
	}

?>

<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width-device-width">
<head>
<title>AirLine Reservation System</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include "header.php";
	?>
		
		<div class="container-fluid" style="background:#003f7a; color:#fff; height:auto;">
		<div class="container" style="margin-top:10px; margin-bottom:10px;">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

			  <div class="item active">
				<img src="images/b1.jpg" alt="Los Angeles" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="images/b2.jpg" alt="Chicago" style="width:100%;">
			  </div>
			
			  <div class="item">
				<img src="images/b3.jpg" alt="New York" style="width:100%;">
			  </div>
		  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-down" style="margin-top:200%; margin-left:260%;"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-up" style="margin-top:200%; margin-left:-610%;"></span>
			</a>
		  </div>
		</div>
	</div>	
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<h3 style="color:blue;">AIRLINE RESERVATION SYSTEM</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel-group">
							<div class="panel panel-default">
									<h4 class="panel-title" style="padding:10px;">Manage Booking</h4>
									<div class="panel-body">
										<img src="images/onlinebooking.png" class="img-responsive">
										<div class="caption">
											<p>It is a long established fact that a reader will be distracted by the readable
											content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
											distribution of letters, as opposed to using The point of using Lorem Ipsum is that it has a more-or-less normal
											distribution of letters, as opposed to using'Content here, content here.The point of using Lorem Ipsum is that it has a more-or-less normal</p>
										</div>
									</div>
								<div class="panel panel-default">
									<div class="panel-footer">
										<button type="button" class="btn btn-link" style="text-decoration:none;"><span class="glyphicon glyphicon-chevron-right"></span> Read More</button>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-group">
							<div class="panel panel-default">
									<h4 class="panel-title" style="padding:10px;">Manage AirLines</h4>
									<div class="panel-body">
										<img src="images/onlinebooking.png" class="img-responsive">
										<div class="caption">
											<p>It is a long established fact that a reader will be distracted by the readable
											content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
											distribution of letters, as opposed to using The point of using Lorem Ipsum is that it has a more-or-less normal
											distribution of letters, as opposed to using'Content here, content here.The point of using Lorem Ipsum is that it has a more-or-less normal</p>
										</div>
									</div>
								<div class="panel panel-default">
									<div class="panel-footer">
										<button type="button" class="btn btn-link" style="text-decoration:none;"><span class="glyphicon glyphicon-chevron-right"></span> Read More</button>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="page-header">
					<h3 style="color:blue;">ADVERTISEMENT</h3>
				</div>
				<img src="images/v1.jpg" class="img-responsive pull-right">
			</div>
		</div>
	</div>
	
	<?php
		include "footer.php";
	?>
	
</body>
</html>





