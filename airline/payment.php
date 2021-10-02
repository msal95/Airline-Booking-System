

<?php

include "db.php";

?>
<?php
if(isset($_POST['submit'])){
	$flightName=$_REQUEST['f_name'];
	$flightNumber=$_REQUEST['f_number'];
	$departure=$_REQUEST['dep_time'];
	$arrTime=$_REQUEST['arr_time'];
	$flightFare=$_REQUEST['f_fare'];
	$duration=$_REQUEST['duration'];
	$gender1=$_REQUEST['gender1'];
	$age1=$_REQUEST['age1'];
	$adultName2=$_REQUEST['name2'];
	$gender2=$_REQUEST['gender2'];
	$age2=$_REQUEST['age2'];
	$adultName3=$_REQUEST['name3'];
	$gender3=$_REQUEST['gender3'];
	$age3=$_REQUEST['age3'];
	$childName1=$_REQUEST['c_name1'];
	$cGender1=$_REQUEST['c_gender1'];
	$cAge1=$_REQUEST['c_age1'];
	$childName2=$_REQUEST['c_name2'];
	$cGender2=$_REQUEST['c_gender2'];
	$cAge2=$_REQUEST['c_age2'];
	$childName3=$_REQUEST['c_name3'];
	$cGender3=$_REQUEST['c_gender3'];
	$cAge3=$_REQUEST['c_age3'];
	$infantName1=$_REQUEST['i_name1'];
	$iGender1=$_REQUEST['i_gender1'];
	$iAge1=$_REQUEST['i_age1'];
	$infantName2=$_REQUEST['i_name2'];
	$iGender2=$_REQUEST['i_gender2'];
	$iAge2=$_REQUEST['i_age2'];
	$cNumber=$_POST['c_number'];
	$cName=$_POST['card_name'];
	$cType=$_POST['c_type'];
	$cMonth=$_POST['month'];
	$cYear=$_POST['year'];
	$cwNum=$_POST['cw_num'];
	$totAmount=$_POST['amount'];
	
	mysql_query("INSERT INTO `booked_ticket` set   c_type='$cType', 
	month='$cMonth', year='$cYear', cw_number='$cwNum', amount='$totAmount',
	name='$name',
	email='$email',
	contact='$contact',
	name1='$adultName1', 
	gender1='$gender1',
	age1='$age1',
	name2='$adultName2',
	gender2='$gender2',
	age2='$age2',
	name3='$adultName3',
	gender3='$gender3',
	age3='$age3',
	cname1='$childName1', 
	cgender1='$cGender1',
	cage1='$cAge1',
	cname2='$childName2',
	cgender2='$cGender2',
	cage2='$cAge2',
	cname3='$childName3',
	cgender3='$cGender3',
	cage3='$cAge3',
	iname1='$infantName1', 
	igender1='$iGender1',
	iage1='$iAge1',
	iname2='$infantName2',
	igender2='$iGender2',
	iage2='$iAge2',
	c_number='$cNumber',
	card_name='$cName',
	flight_name='$flightName',
	flight_number='$flightNumber',
	dep_time='$departure',
	arr_time='$arrTime',
	duration='$duration';
	") or die(mysql_error());
	header("location:admin.php");
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
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<h3 style="color:blue;">MAKE PAYMENT</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Card Number</label>
								<div class="col-md-8">
								  <input type="text" name="c_number" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Name on Card</label>
								<div class="col-md-8">
								  <input type="text" name="card_name" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Card Type</label>
								<div class="col-md-8">
									<select class="form-control" name="c_type" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected"></option>
											<option value="Visa">Visa</option>
											<option value="wiz">wiz</option>
											<option value="master card">master card</option>
											<option value="payoneer">payoneer</option>
											<option value="paypal">paypal</option>
											<option value="skrill">skrill</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-md-4">Card Expiry</label>
							    <div class="col-md-8">
									<div class="row">
										<div class="col-md-6" style="padding-right:2px;">
										  <select class="form-control" name="month" id="sel1">
										    <option value="Select City" disabled="disabled" selected="selected">Month</option>
											<option>January</option>
											<option>Feburary</option>
											<option>March</option>
											<option>April</option>
											<option>May</option>
											<option>June</option>
											<option>July</option>
											<option>August</option>
											<option>September</option>
											<option>October</option>
											<option>November</option>
											<option>December</option>
										  </select>
										</div>
										<div class="col-md-6" style="padding-left:1px;">
										  <select class="form-control" name="year">
										    <option value="Select City" disabled="disabled" selected="selected">Year</option>
											<option>2018</option>
											<option>2019</option>
											<option>2020</option>
											<option>2021</option>
											<option>2022</option>
											<option>2023</option>
											<option>2024</option>
											<option>2025</option>
										  </select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">CW Number</label>
								<div class="col-md-8">
								  <input type="text" name="cw_num" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Total Amount</label>
								<div class="col-md-8">
								  <input type="text" name="amount" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"></label>
								<div class="col-md-8">
								  <button type="submit" name="submit" style="background:#000; color:#fff; border:2px solid #999;" class="btn btn-default" value="submit">Make Payment</button>
								  <button type="reset" name="reset" style="background:#000; color:#fff; border:2px solid #999;" class="btn btn-default" value="Reset">Reset</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-5">
					</div>
				</div>
			</div>
			<div class="col-md-4">
			<div class="page-header">
				<h3 style="color:blue;">MAKE PAYMENT ONLINE</h3>
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