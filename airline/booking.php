
<?php

include "db.php";

?>
<?php
if(isset($_POST['flight'])){
	$from_city=$_POST['from'];
	$to_city=$_POST['to'];
	$date=$_POST['date'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];
	$infants=$_POST['infants'];
	$class=$_POST['class'];
	
	mysql_query("INSERT INTO `book_ticket` set from_city='$from_city', to_city='$to_city', date='$date', 
	adult='$adult', child='$child', infants='$infants', class='$class'") or die(mysql_error());
	}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Airline Reservation</title>
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
<div class="container" style="margin-top:30px; margin-bottom: 80px;">
<div class="col-md-8 col-md-offset-1">
  <div class="page-header" style="margin-top: 100px;">
   <h2 style="color:#990033;">Book a Flight</h2>
   </div>
    <div class="panel panel-default">
<div class="panel-body">
   <form role="form" method="POST" action="flights.php">
   <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                       <label>From</label>
                        <input type="text" name="from" id="from" class="form-control" placeholder="Enter City" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                       <label>To</label>
                        <input type="text" name="to" id="to" class="form-control" placeholder="Enter City"  required>
					</div>
				</div>
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group"  style="margin-left: 15px;">
                        <label>Departure Date</label>
                        <input type="date" name="date" id="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" placeholder="Date" required>
					</div>
				</div>
				
<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group" style="margin-right: 15px;" required>
                      <label>Class</label>
                        <Select class="form-control" name="class">
		<option value="Economy">Economy</option>
		<option value="Buisness">Buisness</option>
		<option value="First">First</option>
	</Select>
					</div>
				</div>
	   </div>
	   <label style="margin-left:15px;">Passengers</label>
	   <div class="row" style="margin-left: 0px; margin-right: 5px;">
	   
	   <div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
                        <select class="form-control" name="adult" id="sell" required>
		<option value="" disabled="disabled" selected="selected">Adult</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
	</select>
		   </div>
	   </div>
			<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
				<select class="form-control" name="child" required>
		<option value="" disabled="disabled" selected="selected">Child</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
	</select>
				
					</div>
				</div>
				 <div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
                        <select class="form-control" name="infants" required>
		<option value="" disabled="disabled" selected="selected">Infants</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
	</select>
		   </div>
	   </div>
	   </div>
	   <button type="submit" name="flight" style="background-color: #990033;  color: white;  margin-left: 480px; width: 200px; margin-top: 10px; border: 2px solid #9B1B1E" class="btn btn-primary btn-lg" value="submit">Search Flight</button>
	</form>
	   </div>
		</div>
	</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>