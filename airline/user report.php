
<?php
session_start();
if($_SESSION['id'] == 1){
	
include "db.php";

?>
<?php
$query = "SELECT * FROM `user` where u_id='$_SESSION[id]'";

$result=mysql_query($query);

$data=mysql_fetch_array($result);

if($data){
	$id=$data['u_id'];
	$name=$data['name'];
	$image=$data['photo'];
	$mobile=$data['mobile'];
	$email=$data['email'];
	$dateBirth=$data['dob'];
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
					<h3 style="color:blue;">SYSTEM USER REPORTS</h3>
				</div>
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th style="text-align:center;">Sr. No.</th>
								<th style="text-align:center;">Image</th>
								<th style="text-align:center;">Name</th>
								<th style="text-align:center;">Mobile</th>
								<th style="text-align:center;">Email</th>
								<th style="text-align:center;">Date of Birth</th>
								<th style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center;"><?php echo $id; ?></td>
								<td><img src="<?php echo $image; ?>" width="70" height="70" class="img-responsive" ></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $mobile; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $dateBirth; ?></td>
								<td style="text-align:center;">
									<a href="user info.php?id=<?php echo $id; ?>" for="edit">Edit</a> | 
									<a href="#" for="edit">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
			</div>
		</div>
	</div>
<?php } ?>
	
	<?php
		include "footer.php";
	?>
</body>
</html>