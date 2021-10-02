
<?php
session_start();
if($_SESSION['id']){
	
include "db.php";

?>
<?php 
	$select_data=$_REQUEST['id'];
	
	$query = "SELECT * FROM `add_route` where r_id='$select_data'";
	
	$result=mysql_query($query);
	
	$data = mysql_fetch_array($result);
	if($data){
		$id=$data['r_id'];
		$company=$data['s_company'];
		$fromCity=$data['from_city'];
		$toCity=$data['to_city'];
		$departure=$data['d_time'];
		$arrTime=$data['a_time'];
		$ecoFare=$data['eco_price'];
		$bussFare=$data['bu_price'];
		
	}
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
	
	mysql_query("UPDATE `add_route` set 	company='$s_company', 
		from_city='$from_city', to_city='$to_city', d_time='$d_time', a_time='$a_time',
	eco_price='$eco_price', bu_price='$bu_price' where r_id='$select_data'") or die(mysql_error());
	
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
					<h3 style="color:blue;">ADD AIRLINES ROUTE</h3>
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
								<label class="control-label col-md-4">Select Airline:</label>
								<div class="col-md-8">
									<select class="form-control" name="s_company" id="select-option" required>
										<option value="<?php echo $company; ?>"><?php echo $company; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">From City:</label>
								<div class="col-md-8">
									<select class="form-control" name="from_city" id="select-option" required>
										<option value="<?php echo $fromCity; ?>"><?php echo $fromCity; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">To City:</label>
								<div class="col-md-8">
									<select class="form-control" name="to_city" id="select-option" required>
										<option value="<?php echo $toCity; ?>"><?php echo $toCity; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Depature Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="d_time" value="<?php echo $departure; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Arrival Time:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="a_time" value="<?php echo $arrTime; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Economy Fare:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="eco_price" value="<?php echo $ecoFare; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Business Fare:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="bu_price" value="<?php echo $bussFare; ?>">
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