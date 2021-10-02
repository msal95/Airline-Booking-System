<?php
session_start();
include "db.php";
?>

<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width-device-width">
<head>
<title>Airline Reservation System</title>
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
	
	
	
	<?php
	$query = mysql_query("SELECT * FROM `user` ") or die(mysql_error());

	$data=mysql_fetch_array($query);

	if($data){
		$id=$data['u_id'];
		$name=$data['name'];
		$u_name=$data['u_name'];
		$dob=$data['dob'];
		$email=$data['email'];
		$adress1=$data['adress1'];
		$adress2=$data['adress2'];
		$city=$data['city'];
		$state=$data['state'];
		$country=$data['country'];
		$photo=$data['photo'];
	}

	?>
	
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<div class="page-header">
					<h3 style="color:blue;"> Id <span style="color:#000;"><?php echo $id; ?></span></h3>
				</div>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-4">Name</label>
						<div class="col-md-8">
							<?php echo $name; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">User Name</label>
						<div class="col-md-8">
						  <?php echo $u_name; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Date of Birth</label>
						<div class="col-md-8">
						  <?php echo $dob; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Email</label>
						<div class="col-md-8">
						  <?php echo $email; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Adress</label>
						<div class="col-md-8">
						  <?php echo $adress1; ?> <?php echo $adress2; ?>
						</div> 
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">City</label>
						<div class="col-md-8">
						  <?php echo $city; ?> 
						</div> 
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">State</label>
						<div class="col-md-8">
						  <?php echo $state; ?>
						</div> 
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Country</label>
						<div class="col-md-8">
						  <?php echo $country; ?>
						</div> 
					</div>
					<div class="form-group">
						<div class="col-md-12">
						  <button type="submit" name="submit" style="background:#4186ba; color:#fff;" class="btn btn-default"><a href="doctor_administeration.php" style="text-decoration:none; color:#fff;"> Click to Back</a></button>
						</div>
					</div>
				</form>	
			</div>
			<div class="col-md-4">
				<img src="<?php echo $photo; ?>" style="margin-top:17%;height:250px;" class="img-responsive">
			</div>
		</div>
	</div>
				
	<?php
	include "footer.php";
	?>
</body>
</html>