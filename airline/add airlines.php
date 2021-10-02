
<?php
session_start();
if($_SESSION['id'] == 1){
	
include "db.php";

?>
<?php
	if(isset($_POST['submit']))
	{
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
		$insert_data=mysql_query("INSERT INTO `airlines` set company='$companyName', air_type='$airlineType',
	flight_name='$flightName', flight_number='$flightNumber', from_city='$fromCity', to_city='$toCity',
	departure='$depTime', arrival='$arrTime', total_travel='$totTravel', distance='$distance'");
	
	if($insert_data)
	{
		$data_txt="Hotel Created";
	}
	else
	{
		$data_txt="Hotel Not Created";
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
					<h3 style="color:blue;">ADD AIRLINES</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
		<?php $selectCompany=mysql_query("select * from add_company"); ?>					
								<label class="control-label col-md-4">Select Company:</label>
								<div class="col-md-8">
									<select class="form-control" name="company" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
						<?php while($company=mysql_fetch_array($selectCompany)){ ?>
										<option value="<?php echo $company['fc_id']; ?>"><?php echo $company['name']; ?></option>
						<?php } ?>	
									</select>
							    </div>
							</div>
							<div class="form-group">
		<?php $selectType=mysql_query("select * from airlines"); ?>
								<label class="control-label col-md-4">Airline Type:</label>
								<div class="col-md-8">
									<select class="form-control" name="airline_type" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
						<?php while($airType=mysql_fetch_array($selectType)){ ?>
										<option value="<?php echo $airType['air_id']; ?>"><?php echo $airType['air_type']; ?></option>
						<?php } ?>	
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Flight Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="flgt_name" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Flight Number:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="flgt_number" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">From City:</label>
								<div class="col-md-8">
									<select class="form-control" name="cityfrom" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Lahore">Lahore</option>
											<option value="Multan">Multan</option>
											<option value="Karachi">Karachi</option>
											<option value="Islamabad">Islamabad</option>
											<option value="Bahawalpur">Bahawalpur</option>
											<option value="Sakhar">Sakhar</option>
											<option value="Quaita">Quaita</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">To City:</label>
								<div class="col-md-8">
									<select class="form-control" name="cityto" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Lahore">Lahore</option>
											<option value="Multan">Multan</option>
											<option value="Karachi">Karachi</option>
											<option value="Islamabad">Islamabad</option>
											<option value="Bahawalpur">Bahawalpur</option>
											<option value="Sakhar">Sakhar</option>
											<option value="Quaita">Quaita</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Departure Time:</label>
								<div class="col-md-8">
									<input type="time" class="form-control" name="departure" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Arival Time:</label>
								<div class="col-md-8">
									<input type="time" class="form-control" name="arrival" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Total Travel Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="total_travel" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Total Distance:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="distance" id="select-option" required>
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