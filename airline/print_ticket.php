<?php
		include"db.php";

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
	
	<?php
	
	$query1="SELECT * FROM `booked_ticket` ORDER BY cid DESC";
	
	$result1 = mysql_query($query1);
	
	$data1 = mysql_fetch_array($result1);
	
	if($data1){
	$f_name=$data1['flight_name'];
	$f_number=$data1['flight_number'];
	$dep_time=$data1['dep_time'];
	$arr_time=$data1['arr_time'];
	$f_fare=$data1['f_fare'];
	$duration=$data1['duration'];
	$name1=$data1['name1'];
	$gender1=$data1['gender1'];
	$age1=$data1['age1'];
	$childName1=$data1['cname1'];
	$cGender1=$data1['cgender1'];
	$cAge1=$data1['cage1'];
	$infantName1=$data1['iname1'];
	$iGender1=$data1['igender1'];
	$iAge1=$data1['iage1'];
	$contactPerson=$data1['contact_person'];
	$phone=$data1['phone'];
	$email=$data1['email'];
	$cNumber=$data1['card_no'];
	$ex_date=$data1['ex_date'];
	$pin_code=$data1['pin_code'];
		
	}
?>
	
	<div class="well"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<h3 style="color:blue;">BOOK YOU'R TICKET</h3>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p></br>
						<?php echo $f_name; ?></p>
					</div>
					<div class="col-md-2">
						<p>Flight No.</br>
						<?php echo $f_number; ?></p>
					</div>
					<div class="col-md-2">
					<p>Departure</br>
					<?php echo $dep_time; ?></p>
					</div>
					<div class="col-md-2">
					<p>Arrival</br>
					<?php echo $arr_time; ?></p>
					</div>
					<div class="col-md-2">
					<p>Duration</br>
					<?php echo $duration; ?></p>
					</div>
				</div>
				<hr>

				<div class="page-header">
					<h3 style="color:blue;">CUSTOMER DETAIL</h3>
				</div>
				<div class="well well-sm" style="background:#666; margin:0px; padding:0px;">
					<div class="row">
						<div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Name.</h6>
						</div><div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Email</h6>
						</div><div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Contact No.</h6>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
						<div class="col-md-4">
						<?php echo $contactPerson; ?>
						</div>
						<div class="col-md-4">
						<?php echo $email; ?>
						</div>
						<div class="col-md-4">
						<?php echo $phone; ?>
						</div>
					</div>
				<div class="page-header">
					<h3 style="color:blue;">ADULT PASSENGERS DETAIL</h3>
				</div>				
				<div class="well well-sm" style="background:#666; margin:0px; padding:0px;">
					<div class="row">
						<div class="col-md-2" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Sr No.</h6>
						</div>
						<div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Name.</h6>
						</div><div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Gender</h6>
						</div><div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Age</h6>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Adult 1</h6>
						</div>
						<div class="col-md-3">
						<?php echo $name1; ?>
						</div>
						<div class="col-md-3">
						<?php echo $gender1; ?>
						</div>
						<div class="col-md-4">
						<?php echo $age1; ?>
						</div>
					</div>
					
	
				<div class="page-header">
					<h3 style="color:blue;">CHILD PASSENGER DETAIL</h3>
				</div>
				<div class="well well-sm" style="background:#666; margin:0px; padding:0px;">
					<div class="row">
						<div class="col-md-2" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Sr No.</h6>
						</div>
						<div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Name.</h6>
						</div><div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Gender</h6>
						</div><div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Age</h6>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Child 1</h6>
						</div>
						<div class="col-md-3">
						<?php echo $childName1; ?>
						</div>
						<div class="col-md-3">
						<?php echo $cGender1; ?>
						</div>
						<div class="col-md-4">
						<?php echo $cAge1; ?>
						</div>
					</div>
					
				<div class="page-header">
					<h3 style="color:blue;">INFANT PASSENGERS DETAIL</h3>
				</div>
				
				<div class="well well-sm" style="background:#666; margin:0px; padding:0px;">
					<div class="row">
						<div class="col-md-2" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Sr No.</h6>
						</div>
						<div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Name.</h6>
						</div><div class="col-md-3" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Gender</h6>
						</div><div class="col-md-4" style="border-right:1px solid #fff;">
						<h6 class="text-center" style="color:#fff;">Age</h6>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Infant 1</h6>
						</div>
						<div class="col-md-3">
						<?php echo $infantName1; ?>
						</div>
						<div class="col-md-3">
						<?php echo $iGender1;?>
						</div>
						<div class="col-md-4">
						<?php echo $iAge1; ?>
						</div>
					</div>
					
					<div class="well well-sm" style="background:none; margin-top:10px;">
						<center><button name="submit" style="background:#003f7a; color:#fff; border:2px solid #666;" onclick="window.print();" class="btn btn-default" value="submit">Print Ticket</button></center>
					</div>
	</form>
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