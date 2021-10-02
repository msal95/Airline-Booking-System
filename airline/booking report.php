
<?php
session_start();
if($_SESSION['id']){
	
include "db.php";

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
					<h3 style="color:blue;">AIRLINES ROUTE REPORT</h3>
				</div>
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th style="text-align:center;">Booking ID</th>
								<th style="text-align:center;">Name</th>
								<th style="text-align:center;">Contact</th>
								<th style="text-align:center;">Airline No.</th>
								<th style="text-align:center;">From City</th>
								<th style="text-align:center;">To City</th>
								<th style="text-align:center;">Journey Date</th>
								<th style="text-align:center;">Total Fare</th>
								<th style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>

<?php
$query = "SELECT * FROM `booked_ticket";

$result=mysql_query($query);
	do{
$data=mysql_fetch_array($result);

if($data){
	$uid=$data['cid'];
	$name=$data['name'];
	$contact=$data['contact'];
	$airlineNo=$data['contact'];
	$phone=$data['mobile'];
	$email=$data['email'];
	$dateBirth=$data['dob'];


?>
							<tr>
								<td style="text-align:center;"><?php echo $uid; ?></td>
								<td><?php echo $name; ?></td>
								<td><?php echo $contact; ?></td>
								<td><?php echo $airlineNo; ?></td>
								<td>Lahore</td>
								<td>Karachi</td>
								<td>16 March 2017</td>
								<td>11250</td>
								<td style="text-align:center;">
									<a href="print ticket.php?id=<?php echo $uid; ?>" for="edit">View Detail</a>
								</td>
							</tr>
<?php 
	}
}while($data);
?>
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