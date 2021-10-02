
<?php
session_start();
if($_SESSION['id'] ==1) {
?>


<?php

include "db.php";

?>
<?php
if(isset($_POST['submit'])){
	$s_company=$_POST['s_company'];
	$from_city=$_POST['from_city'];
	$to_city=$_POST['to_city'];
	$d_time=$_POST['d_time'];
	$a_time=$_POST['a_time'];
	$eco_price=$_POST['eco_price'];
	$bu_price=$_POST['bu_price'];
	
	mysql_query("INSERT INTO `add_route` set 	s_company='$s_company', 
		from_city='$from_city', to_city='$to_city', d_time='$d_time', a_time='$a_time',
	eco_price='$eco_price', bu_price='$bu_price'") or die(mysql_error());
	
		if($query == 1){
		header("Location:airline route.php?msg=ok");

}elseif($query == 0){
	header("Location:airline route.php?msg=fail");
}
	
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
	
		<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-10">
				<div class="page-header">
					<h3 style="color:blue;">ADD AIRLINE ROUTE</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
					
					<?php 
						$msg = $_REQUEST['msg'];

						if($msg == 'ok'){

								header("refresh:2 ; url=booking.php");
							?>
						<center>
						<h2 class="alert alert-success">PLZ Try Again !</h2>
						</center>
						<?php } if($msg == 'fail'){
							
							 header("refresh:2 ; url=flights.php");
						?>
						<center>
						<h2 class="alert alert-danger">Successfully Submitted !</h2>
						</center>
						<?php } ?>
					
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Select Company</label>
								<div class="col-md-8">
									<select class="form-control" name="s_company" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Pleas Select</option>
											<option value="PIA">PIA</option>
											<option value="Oman Air">Oman Air</option>
											<option value="Qatar Air">Qatar Air</option>
											<option value="Canada Air">Canada Air</option>
											<option value="Shinghai Air">Shinghai Air</option>
											<option value="Shaheen Air">Shaheen Air</option>
											<option value="Air Blue">Air Blue</option>
											<option value="Air Indus">Air Indus</option>
											<option value="Vision Air">Vision Air</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">From City:</label>
								<div class="col-md-8">
									<select class="form-control" name="from_city" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Multan">Multan</option>
											<option value="Bahawalpur">Bahawalpur</option>
											<option value="Karachi">Karachi</option>
											<option value="Islamabad">Islamabad</option>
											<option value="Sialkot">Sialkot</option>
											<option value="Faisalabad">Faisalabad</option>
											<option value="Queta">Queta</option>
											<option value="Peshawar">Peshawar</option>
											<option value="Gilgit">Gilgit</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">To City:</label>
								<div class="col-md-8">
									<select class="form-control" name="to_city" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Multan">Multan</option>
											<option value="Bahawalpur">Bahawalpur</option>
											<option value="Karachi">Karachi</option>
											<option value="Islamabad">Islamabad</option>
											<option value="Sialkot">Sialkot</option>
											<option value="Faisalabad">Faisalabad</option>
											<option value="Queta">Queta</option>
											<option value="Peshawar">Peshawar</option>
											<option value="Gilgit">Gilgit</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Departure Time</label>
								<div class="col-md-8">
								  <input type="time" name="d_time" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Arrival Time</label>
								<div class="col-md-8">
								  <input type="time" name="a_time" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Economy Fare</label>
								<div class="col-md-8">
								  <input type="text" name="eco_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Buisness Fare</label>
								<div class="col-md-8">
								  <input type="text" name="bu_price" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"></label>
								<div class="col-md-8">
								  <button type="submit" name="submit" style="background:#003f7a; color:#fff; border:2px solid #999;" class="btn btn-default" value="submit">Submit</button>
								  <button type="reset" name="reset" style="background:#000; color:#fff; border:2px solid #999;" class="btn btn-default" value="Reset">Reset</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-5">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php
		include "footer.php";
	?>
</body>
</html>