
<?php
session_start();
if($_SESSION['id'] == 1){
	
include "db.php";

?>
<?php 
	$select_data = $_REQUEST['sid'];
	
	$query = "SELECT * FROM `airlines` where air_id='$select_data'";
	
	$result = mysql_query($query);
	
	$data= mysql_fetch_array($result);
	
	if($data){
		$id=$data['air_id'];
		$company=$data['company'];
		$type=$data['air_type'];
		$fName=$data['flight_name'];
		$fNumber=$data['flight_number'];
		$fromCity=$data['from_city'];
		$toCity=$data['to_city'];
		$departure=$data['departure'];
		$arrTime=$data['arrival'];
		$totTravel=$data['total_travel'];
		$distance=$data['distance'];
	}
?>
<?php
if(isset($_POST['submit'])){
	$companyName=$_POST['company'];
	$airlineType=$_POST['airline_type'];
	$flightName=$_POST['flgt_name'];
	$flightNumber=$_POST['flgt_number'];
	$fromCity=$_POST['cityfrom'];
	$toCity=$_POST['cityto'];
	$depTime=$_POST['departure'];
	$arrTime=$_POST['arrival'];
	$totTravel=$_POST['total_travel'];
	$distance=$_POST['distance'];
	
	mysql_query("UPDATE `airlines` set company='$companyName', air_type='$airlineType',
	flight_name='$flightName', flight_number='$flightNumber', from_city='$fromCity', to_city='$toCity',
	departure='$depTime', arrival='$arrTime', total_travel='$totTravel', distance='$distance'") or die(mysql_error());
	header ("location:add airlines.php");
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
					<h3 style="color:blue;">ADD AIRLINES</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Select Company:</label>
								<div class="col-md-8">
									<select class="form-control" name="company" id="select-option" required>
										<option value="<?php echo $company; ?>"><?php echo $company; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Airline Type:</label>
								<div class="col-md-8">
									<select class="form-control" name="airline_type" id="select-option" required>
										<option value="<?php echo $type; ?>"><?php echo $type; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Flight Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="flgt_name" value="<?php echo $fName; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Flight Number:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="flgt_number" value="<?php echo $fNumber; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">From City:</label>
								<div class="col-md-8">
									<select class="form-control" name="cityfrom" id="select-option" required>
										<option value="<?php echo $fromCity; ?>"><?php echo $fromCity; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">To City:</label>
								<div class="col-md-8">
									<select class="form-control" name="cityto" id="select-option" required>
										<option value="<?php echo $toCity; ?>"><?php echo $toCity; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Departure Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="departure" value="<?php echo $departure; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Arival Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="arival" value="<?php echo $arrTime; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Total Travel Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="total_travel" value="<?php echo $totTravel; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Total Distance:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="distance" value="<?php echo $distance; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"></label>
								<div class="col-md-8">
								  <button type="submit" name="submit" style="background:#003f7a; color:#fff; border:2px solid #999;" class="btn btn-default" value="submit">Update</button>
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
				<h3 style="color:blue;">ADVERTISEMENT</h3>
			</div>
				<img src="images/v1.jpg" class="img-responsive pull-right">
			</div>
		</div>
	</div>
<?php } ?>
	
	<?php
		include "footer.php";
	?>
</body>
</html>