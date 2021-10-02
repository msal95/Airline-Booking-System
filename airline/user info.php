
<?php
session_start();
if($_SESSION['id']){
	
include "db.php";

?>
<?php 
	$query = "SELECT * FROM `user` where u_id='$_SESSION[id]'";
	
	$result = mysql_query($query);
	
	$data = mysql_fetch_array($result);
	
	if($data){
		$id=$data['u_id'];
		$name=$data['name'];
		$userRole=$data['c_role'];
		$mobile=$data['phone'];
		$email=$data['email'];
		$dateBirth=$data['dob'];
		$address1 = $data['adress1'];
		$address2 = $data['adress2'];
		$city = $data['city'];
		$state = $data['state'];
		$country = $data['country'];
		$image=$data['photo'];


	}
?>
<?php
$select_data = $_REQUEST['id'];
if(isset($_POST['submit'])){
 	
	$name=$_POST['name'];
	$user=$_POST['user_role'];
	$mobile=$_POST['phone'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$adress1=$_POST['address_1'];
	$adress2=$_POST['address_2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	
		mysql_query("UPDATE `user` set name='$name', c_role='$user', pass='$pass', 
   mobile='$mobile', email='$email', dob='$dob', adress1='$adress1', adress2='$adress2', city='$city', state='$state',
   country='$country' where id='$select_data'") or die (mysql_error());
		
		header("location: user report.php");
			
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
					<h3 style="color:blue;">SYSTEM USER REGISTRATION FORM</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">User Role:</label>
								<div class="col-md-8">
									<select class="form-control" name="user_role" id="select-option" required>
										<option value="<?php echo $userRole; ?>"><?php echo $userRole; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Mobile:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="phone" value="<?php echo $mobile; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Email:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Date of Birth:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="dob" value="<?php echo $dateBirth; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Address Line 1:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="address_1" value="<?php echo $address1; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Address Line 2:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="address_2" value="<?php echo $address2; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">City:</label>
								<div class="col-md-8">
									<select class="form-control" name="city" id="select-option" required>
										<option value="<?php echo $city; ?>"><?php echo $city; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">State:</label>
								<div class="col-md-8">
									<select class="form-control" name="state" id="select-option" required>
										<option value="<?php echo $state; ?>"><?php echo $state; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Country:</label>
								<div class="col-md-8">
									<select class="form-control" name="country" id="select-option" required>
										<option value="<?php echo $country; ?>"><?php echo $country; ?></option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Photo:</label>
								<div class="col-md-8">
									<input type="file" class="form-control" name="photo" id="select-option"/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"></label>
								<div class="col-md-8">
								  <button type="submit" name="submit" style="background:#003f7a; color:#fff; border:2px solid #999;" class="btn btn-default" value="Update">Update</button>
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
				<h3 style="color:blue;">PROFILE OF <?php echo $name; ?></h3>
			</div>
				<img src="<?php echo $image; ?>" class="img-responsive">
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