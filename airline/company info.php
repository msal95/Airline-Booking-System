
<?php
session_start();
if($_SESSION['id'] == 1){
	
include "db.php";

?>
<?php 
$select_data=$_REQUEST['id'];

$query="SELECT * FROM `add_company` where fc_id='$select_data'";

$result=mysql_query($query);

$data=mysql_fetch_array($result);

if($data){
	$name=$data['name'];
	$image=$data['photo'];
	
}
?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename(rand(1, 999).rand(1000,9999 ).rand(1, 999)."_".$_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['submit'])){
 	
	$name=$_POST['comp_name'];
	$about=$_POST['detail'];
	
}
// Check file size
if ($_FILES["image"]["size"] > 5000000000000) {
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
		
   mysql_query("UPDATE `add_company` set name='$name', about='$about', photo='$target_file' where fc_id='$select_data'") or die (mysql_error());
	};

	
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
					<h3 style="color:blue;">ADD AIRLINES COMPANY</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="comp_name" value="<?php echo $name; ?>">
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">photo:</label>
								<div class="col-md-8">
									<input type="file" class="form-control" name="image" id="select-option" required>
							    </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">About Company:</label>
								<div class="col-md-8">
									<textarea rows="7" class="form-control" name="detail" id="select-option" required></textarea>
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
				<h3 style="color:blue;">LOGO OF AIR OMAN</h3>
			</div>
				<img src="<?php echo $image; ?>" class="img-responsive" width="170" height="170">
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