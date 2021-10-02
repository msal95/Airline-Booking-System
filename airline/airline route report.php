
<?php
session_start();
if($_SESSION['id'] == 1){
	
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
								<th style="text-align:center;">ID</th>
								<th style="text-align:center;">Company</th>
								<th style="text-align:center;">Airline No</th>
								<th style="text-align:center;">From City</th>
								<th style="text-align:center;">To City</th>
								<th style="text-align:center;">Departure Time</th>
								<th style="text-align:center;">Arrival Time</th>
								<th style="text-align:center;">Action</th>
							</tr>
						</thead>
						<tbody>

<?php
$query1 = "SELECT * FROM `airlines`";

$result1 = mysql_query($query1);

$data1 = mysql_fetch_array($result1);

if($data1){
	$fNumber=$data1['flight_number'];
}
$query = "SELECT * FROM `add_route`";

$result=mysql_query($query);
do{
$data=mysql_fetch_array($result);

if($data){
	$id=$data['r_id'];
	$company=$data['s_company'];
	$fromCity=$data['from_city'];
	$toCity=$data['to_city'];
	$departure=$data['d_time'];
	$arrTime=$data['a_time'];


?>
							<tr>
								<td style="text-align:center;"><?php echo $id; ?></td>
								<td><?php echo $company; ?></td>
								<td><?php echo $fNumber; ?></td>
								<td><?php echo $fromCity; ?></td>
								<td><?php echo $toCity; ?></td>
								<td><?php echo $departure; ?></td>
								<td><?php echo $arrTime; ?></td>
								<td style="text-align:center;">
									<a href="airline route info.php?id=<?php echo $id; ?>" for="edit">Edit</a> | 
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