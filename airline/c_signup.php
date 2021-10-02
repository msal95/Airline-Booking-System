
<?php
include "db.php";


$target_dir = "uploads/";
$target_file = $target_dir . basename(rand(1, 999).rand(1000,9999 ).rand(1, 999)."_".$_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
 	
	$name=$_POST['name'];
	$u_name=$_POST['u_name'];
	$pass=sha1($_POST['pass']);
	$re_pass=sha1($_POST['re_pass']);
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
		
   $query=mysql_query("SELECT * FROM `c_signup` where email='$email' ") or die(mysql_error());
	
	$duplicate=mysql_num_rows($query);
	
	if($duplicate==0){
		
		mysql_query("INSERT INTO `c_signup` set name='$name', u_name='$u_name', pass='$pass', re_pass='$re_pass', 
   mobile='$mobile', email='$email', dob='$dob', adress1='$adress1', adress2='$adress2', city='$city', state='$state',
   country='$country', photo='$target_file'") or die (mysql_error());
		
		header("location: c_signup.php?msg=ok");
			
	} else{
		
		header("location: c_signup.php?msg=fail");
			
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
					<h3 style="color:blue;">CUSTOMER REGISTERATION FORM</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
					<?php 
						$msg = $_REQUEST['msg'];

						if($msg == 'ok'){

								header("refresh:2 ; url=login.php");
							?>
						<center>
						<h2 class="alert alert-success">Signup Successfully !</h2>
						</center>
						<?php } if($msg == 'fail'){
						?>
						<center>
						<h2 class="alert alert-danger">Email already exist !</h2>
						</center>
						<?php } ?>
						<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-md-4">Name</label>
								<div class="col-md-8">
								  <input type="text" name="name" class="form-control" placeholder="Name" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">User Name</label>
								<div class="col-md-8">
								  <input type="text" name="u_name" class="form-control" placeholder="User Name" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Password</label>
								<div class="col-md-8">
								  <input type="password" name="pass" class="form-control" placeholder="Password" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Re Password</label>
								<div class="col-md-8">
								  <input type="password" name="re_pass" class="form-control" placeholder="Confirm Password" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Mobile</label>
								<div class="col-md-8">
								  <input type="text" name="mobile" class="form-control" placeholder="****-******" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Email</label>
								<div class="col-md-8">
								  <input type="email" name="email" class="form-control" placeholder="a@a.com" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Date Of Birth</label>
								<div class="col-md-8">
								  <input type="date" name="dob" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Address Line 1</label>
								<div class="col-md-8">
								  <input type="text" name="adress1" class="form-control" placeholder="Address Line 1" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Address Line 2</label>
								<div class="col-md-8">
								  <input type="text" name="adress2" class="form-control" placeholder="Address Line 2">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">City</label>
								<div class="col-md-8">
									<select class="form-control" name="city" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Multan">Multan</option>
											<option value="Lahore">Lahore</option>
											<option value="Islamabad">Islamabad</option>
											<option value="Karachi">Karachi</option>
											<option value="Muree">Muree</option>
											<option value="Sialakot">Sialakot</option>
											<option value="Gilgit">Gilgit</option>
											<option value="Chiniot">Chiniot</option>
											<option value="Kashmir">Kashmir</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">State</label>
								<div class="col-md-8">
									<select class="form-control" name="state" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Pakistan">Punjab</option>
											<option value="Oman">Sindh</option>
											<option value="America">Baluchistan</option>
											<option value="Canada">KPK</option>
											<option value="Australia">Kashmir</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Country</label>
								<div class="col-md-8">
									<select class="form-control" name="country" id="select-option" required>
										<option value="Select City" disabled="disabled" selected="selected">Please Select</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Oman">Oman</option>
											<option value="America">America</option>
											<option value="Canada">Canada</option>
											<option value="Australia">Australia</option>
											<option value="Dubai">Dubai</option>
											<option value="Quait">Quait</option>
											<option value="Iran">Iran</option>
											<option value="Japan">Japan</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Photo</label>
								<div class="col-md-8">
								  <input type="file" name="photo" class="form-control" required>
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