<?php
	session_start();
	
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
<div class="row">
	<div class="col-md-2"></div>
<?php 
	$select_class=$_REQUEST['class'];
	$selected_flight = $_REQUEST['fid'];
	$selected_adult = $_REQUEST['adult'];
	$selected_infants = $_REQUEST['infants'];
	$selected_child = $_REQUEST['child'];
	
	$flight =mysql_query("SELECT * FROM `airlines` where air_id='$selected_flight'");
	$get_dt=mysql_fetch_array($flight);
	$row=mysql_fetch_array(mysql_query("select * from add_route where air_id=".$get_dt["air_id"]));
?>
			<div class="col-md-10">
			
			<?php 
					$msg = $_REQUEST['msg'];

					if($msg == 'ok'){

							header("refresh:1; url=print_ticket.php");
						?>
					<center>
					<h2 class="alert alert-success">Successfully Submitted !</h2>
					</center>
					<?php } if($msg == 'fail'){
						
						 header("refresh:1 ; url=book_ticket.php");
					?>
					<center>
					<h2 class="alert alert-danger">PLZ Try Again !</h2>
					</center>
					<?php } ?>
			
	<div class="well"></div>
				<div class="page-header">
					<h3 style="color:blue;">BOOK YOU'R TICKET</h3>
				</div>
	<?php
		if(isset ($_POST['submit'])){
	$flightName=$_POST['f_name'];
	$flightNumber=$_POST['f_number'];
	$departure=$_POST['dep_time'];
	$arrTime=$_POST['arr_time'];
	$flightFare=$_POST['f_fare'];
	$duration=$_POST['duration'];
	$name1=implode(',',$_POST['name1']);
	$gender1=implode(',',$_POST['gender1']);
	$age1=implode(',',$_POST['age1']);
	$childName1=implode(',',$_POST['c_name1']);
	$cGender1=implode(',',$_POST['c_gender1']);
	$cAge1=implode(',',$_POST['c_age1']);
	$infantName1=implode(',',$_POST['i_name1']);
	$iGender1=implode(',',$_POST['i_gender1']);
	$iAge1=implode(',',$_POST['i_age1']);
	$contactPerson=$_POST['contact_person'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$cNumber=$_POST['card_no'];
	$ex_date=$_POST['ex_date'];
	$pin_code=$_POST['pin_code'];
	
	$query=mysql_query("INSERT INTO `booked_ticket` set   
	contact_person='$contactPerson',
	phone='$phone',
	email='$email',
	c_number='$cNumber',
	ex_date='$ex_date', 
	pin_code='$pin_code',
	name1='$name1', 
	gender1='$gender1',
	age1='$age1',
	cname1='$childName1', 
	cgender1='$cGender1',
	cage1='$cAge1',
	iname1='$infantName1', 
	igender1='$iGender1',
	iage1='$iAge1',
	flight_name='$flightName',
	flight_number='$flightNumber',
	dep_time='$departure',
	arr_time='$arrTime',
	duration='$duration';
	") or die(mysql_error());
	if($query == 1){
		header("Location:book_ticket.php?msg=ok");

	}elseif($query == 0){
		header("Location:book_ticket.php?msg=fail");
	}
		
		}
	?>				
	<form action="" method="POST">
				<div class="row">
					<div class="col-md-2">
						<p></br>
						<input type="text" value="<?php echo $get_dt["flight_name"]; ?>" name="f_name" style="border:none;"></p>
					</div>
					<div class="col-md-2">
						<p>Flight No.</br>
						<input type="text" value="<?php echo $get_dt["flight_number"]; ?>" name="f_number" style="border:none;"></p>
					</div>
					<div class="col-md-2">
					<p>Departure</br>
					<input type="text" value="<?php echo $get_dt["departure"]; ?>" name="dep_time" style="border:none;"></p>
					</div>
					<div class="col-md-2">
					<p>Arrival</br>
					<input type="text" value="<?php echo $get_dt["arrival"]; ?>" name="arr_time" style="border:none;"></p>
					</div>
					<div class="col-md-2">
					<p>Fare</br>
					<input type="hidden" value="" name="f_fare"></p>
					</div>
					<div class="col-md-2">
					<p>Duration</br>
					<input type="text" value="<?php echo $get_dt["total_travel"]; ?>" name="duration" style="border:none;"></p>
					</div>
				</div>
				<hr>
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

<?php

$adult = 0;

	for ($i=0; $i < $selected_adult; $i++) { 

$adult++;

?>

				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Adult <?php echo $adult; ?></h6>
						</div>
						<div class="col-md-3">
						<input type="text" class="form-control" name="name1[]">
						</div>
						<div class="col-md-3">
						<select class="form-control" name="gender1[]" id="select-option" required>
							<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
						</select>
						</div>
						<div class="col-md-4">
						<div class="form-group">
								<label class="control-label col-md-2 pull-right" style="margin-top:8px; padding-left:0px;">year</label>
								<div class="col-md-10">
								  <input type="text" name="age1[]" class="form-control">
								</div>
							</div>
						</div>
				</div>
<?php
		
	}
?>				
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
<?php

$child = 0;

	for ($i=0; $i < $selected_child; $i++) { 

$child++;

?>

				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Child <?php echo $child; ?></h6>
						</div>
						<div class="col-md-3">
						<input type="text" class="form-control" name="c_name1[]">
						</div>
						<div class="col-md-3">
						<select class="form-control" name="c_gender1[]" id="select-option" required>
							<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
						</select>
						</div>
						<div class="col-md-4">
						<div class="form-group">
								<label class="control-label col-md-2 pull-right" style="margin-top:8px; padding-left:0px;">year</label>
								<div class="col-md-10">
								  <input type="text" name="c_age1[]" class="form-control">
								</div>
							</div>
						</div>
				</div>
<?php
		
	}
?>	
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
<?php

$infants = 0;

	for ($i=0; $i < $selected_infants; $i++) { 

$infants++;

?>

				<div class="row" style="margin-top:5px;">
						<div class="col-md-2">
						<h6 class="text-center">Infant <?php echo $infants; ?></h6>
						</div>
						<div class="col-md-3">
						<input type="text" class="form-control" name="i_name1[]">
						</div>
						<div class="col-md-3">
						<select class="form-control" name="i_gender1[]" id="select-option" required>
							<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
						</select>
						</div>
						<div class="col-md-4">
						<div class="form-group">
								<label class="control-label col-md-2 pull-right" style="margin-top:8px; padding-left:0px;">year</label>
								<div class="col-md-10">
								  <input type="text" name="i_age1[]" class="form-control">
								</div>
							</div>
						</div>
				</div>
<?php
		
	}
?>					
				

<hr>
<div class="row">
				<div class="col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title"><b>Contact & Payment Details</b></h1>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
						<div class="form-group" required>
                      <label>Contact Person</label>
    
					<input type="text" name="contact_person" required="required" class="form-control">
					</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Phone no</label>
								<input type="text" name="phone" class="form-control" placeholder="***********">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" placeholder="example@example.com">
							</div>
						</div>
						
					</div>
				</div>
				<div class="row" style="margin-left: 3px;margin-right: -3px;">

				<div class="col-md-4">
					<div class="form-group">
											<label>Card No.</label>
											<input type="text" name="card_no" maxlength="16" required="required" class="form-control" placeholder="Enter card no">
										</div>
				</div>

					<div class="col-md-4">
						<div class="form-group">
								<label>Card Expiry</label>
								<input type="date" name="ex_date" min="<?php echo date("Y-m-d"); ?>" class="form-control" required="">
							</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
								<label>Security Pin</label>
								<input type="text" name="pin_code" maxlength="3" required="required" class="form-control" placeholder="3 digits pin">
							</div>
					</div>

				</div>
					<div class="well well-sm" style="background:none; margin-top:10px;">
						<center><button type="submit" name="submit" style="background:#003f7a; color:#fff; border:2px solid #666;" class="btn btn-default" value="submit">
							Confirm Reservation
						</button></center>
					</div>
			</div>
		</div>
		</div>
		




	</form>
			</div>
		</div>
	</div>


	
	
	<?php
		include "footer.php";
	?>
</body>
</html>
</body>
</html>