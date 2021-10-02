<?php 
include "db.php";
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
	<div class="well"></div>
	<div class="container">
		<div class="page-header">
			<h3 style="color:blue;">ALL AVAILABLE FLIGHTS</h3>
		</div>
		
		<div class="well well-sm" style="background:#666; margin:0px; padding:0px;">
			<div class="row">
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Flight</h6>
				</div>
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Flight No.</h6>
				</div>
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Arrival</h6>
				</div>
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Departure</h6>
				</div>
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Price</h6>
				</div>
				<div class="col-md-2" style="border-right:1px solid #fff;">
				<h6 class="text-center" style="color:#fff;">Action</h6>
				</div>
			</div>
		</div>
<?php 
$select_mode=$_REQUEST['class'];
$from_city=$_REQUEST['from'];
$to_city=$_REQUEST['to'];
$dep_date=$_REQUEST['date'];
$query1= mysql_query("SELECT * FROM `airlines` where from_city='$from_city' and to_city='$to_city'");

while($data1=mysql_fetch_array($query1)){
	$fare=mysql_fetch_array(mysql_query("SELECT * FROM add_route where air_id=".$data1["air_id"]))

?>
		<div class="row">
			<div class="col-md-2">
			<h5 class="text-center" style="margin:18%"><?php echo $data1["flight_name"]; ?></h5>
			</div>
			<div class="col-md-2">
			<h5 class="text-center" style="margin:18%"><?php echo $data1["flight_number"]; ?></h5>
			</div>
			<div class="col-md-2">
			<h5 class="text-center" style="margin:18%"><?php echo $data1["arrival"]; ?></h5>
			</div>
			<div class="col-md-2">
			<h5 class="text-center" style="margin:18%"><?php echo $data1["departure"]; ?></h5>
			</div>
			<div class="col-md-2">	
			<h5 class="text-center" style="margin:18%"><?php echo $fare["eco_price"]; ?></h5>
			</div>
			<div class="col-md-2">
			<h5 class="text-center" style="margin:10%"><button type="submit" name="submit" class="btn btn-lg" style="background:blue; outline:0; color:#fff; border-radius:60px; border:1px solid #666;">
			<a href="book_ticket.php?child=<?php echo $_POST['child']; ?>&adult=<?php echo $_POST['adult']; ?>&infants=<?php echo $_POST['infants']; ?>&fid=<?php echo $data1['air_id']; ?>" style="text-decoration:none; color:#fff;">Book Now <i class="fa fa-play-circle" id="fa"></i></a></button></h5>
			</div>
		</div>
		<hr>
<?php 
	}
?>
	</div>
	
	<?php
		include "footer.php";
	?>
</body>
</html>	