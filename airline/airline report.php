
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
					<h3 style="color:blue;">AIRLINE REPORTS</h3>
				</div>
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th style="text-align:center;">ID</th>
								<th style="text-align:center;">Company</th>
								<th style="text-align:center;">Airline Type</th>
								<th style="text-align:center;">Name</th>
								<th style="text-align:center;">Flight No</th>
								<th style="text-align:center;">Departure Time</th>
								<th style="text-align:center;">Arrival Time</th>
								<th style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>

<?php
$query = "SELECT * FROM `airlines`";

$result=mysql_query($query);
do{
$data=mysql_fetch_array($result);

if($data){
	$aid=$data['air_id'];
	$company=$data['company'];
	$type=$data['air_type'];
	$fName=$data['flight_name'];
	$fNumber=$data['flight_number'];
	$departure=$data['departure'];
	$arrTime=$data['arrival'];
	$totTravel=$data['total_travel'];
	$distance=$data['distance'];

?>
							<tr>
								<td style="text-align:center;"><?php echo $aid; ?></td>
								<td><?php echo $company; ?></td>
								<td><?php echo $type; ?></td>
								<td><?php echo $fName; ?></td>
								<td><?php echo $fNumber; ?></td>
								<td><?php echo $departure; ?></td>
								<td><?php echo $arrTime; ?></td>
								<td style="text-align:center;">
									<a href="airline info.php?sid=<?php echo $aid; ?>" for="edit">Edit</a> | 
									<a href="#" for="edit">Delete</a>
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