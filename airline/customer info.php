
<?php
session_start();
if($_SESSION['id']){
	
include "db.php";

?>
<?php 
$select_data=$_REQUEST['id'];

$query = "SELECT * FROM `user` where u_id='$select_data'";

$result = mysql_query($query);

$data = mysql_fetch_array($result);

if($data){
	$id = $data['u_id'];
	$name = $data['name'];
	$userRole = $data['c_role'];
	$mobile = $data['phone'];
	$email = $data['email'];
	$dateBirth = $data['dob'];
	$address1 = $data['adress1'];
	$address2 = $data['adress2'];
	$city = $data['city'];
	$state = $data['state'];
	$country = $data['country'];
	$image = $data['photo'];
}
?>
<?php
include "db.php";


$target_dir = "uploads/";
$target_file = $target_dir . basename(rand(1, 999).rand(1000,9999 ).rand(1, 999)."_".$_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
 	
	$name=$_POST['name'];
	$u_name=$_POST['u_name'];
	$user=$_POST['user'];
	$pass=sha1($_POST['pass']);
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$adress1=$_POST['adress1'];
	$adress2=$_POST['adress2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	
}
// Check file size
if ($_FILES["photo"]["size"] > 5000000000000) {
   $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"   && $imageFileType != "rtf" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
		
   $query=mysql_query("SELECT * FROM `user` where email='$email' ") or die(mysql_error());
	
	$duplicate=mysql_num_rows($query);
	
	if($duplicate==0){
		
		mysql_query("UPDATE `user` set name='$name', c_role='$user', u_name='$u_name', pass='$pass', 
   mobile='$mobile', email='$email', dob='$dob', adress1='$adress1', adress2='$adress2', city='$city', state='$state',
   country='$country', photo='$target_file'") or die (mysql_error());
		
		header("location: customer registration.php?msg=ok");
			
	} else{
		
		header("location: customer registration.php?msg=fail");
			
	}

		
	mysql_query($query) or die(mysql_error());
    } else {
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
					<h3 style="color:blue;">CUSTOMER REGISTRATION FORM</h3>
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
