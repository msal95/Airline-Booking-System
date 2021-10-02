<?php

include "../tutorial practice/New folder/db.php";

?>
<?php
if(isset($_POST['submit'])){
	$from_city=$_POST['from_city'];
	$to_city=$_POST['to_city'];
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
<meta charset="utf-8">
<html lang="en-US">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width-device-width">
<head>
<title>Airline Reservation</title>
<link rel="stylesheet" type="text/css" href="../tutorial practice/New folder/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../tutorial practice/New folder/css/style.css">
<link rel="stylesheet" type="text/css" href="../tutorial practice/New folder/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../tutorial practice/New folder/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="../tutorial practice/New folder/js/bootstrap.js"></script>
<script type="text/javascript" src="../tutorial practice/New folder/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php
		include "../tutorial practice/New folder/header.php";
	?>
<div class="well">
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="page-header">
<h2 style="color:#990033";>Book a Flight</h2>
</div>

<form class="form-horizontal" style="margin-bottom:150px; margin-top: 40px; border:7px #E7E3E3">
<h3 style="color:#990033;margin-bottom:20px";>Where and When</h3>
<div class="form-group">
<label class="control-label col-md-2">From</label>
<div class="col-md-10">
<input type="text" style="margin-bottom:10px" class="form-control" id="from-city" placeholder="Enter City" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2">To</label>
<div class="col-md-10">
<input type="text" style="margin-bottom:10px" class="form-control" id="to-city" placeholder="Enter City" required>
</div>
</div>
<div class="row" style="margin-left:53px">
<div class="col-md-6">
<div class="form-group">
<label class="control-label col-md-2">Date</label>
<div class="col-md-10">
<input type="date" style="margin-bottom:10px" class="form-control" name="date" placeholder="Date" required>
	</div>
	</div>
	</div>
	<div class="col-md-6">
	<div class="form-group">
	<label class="control-label col-md-2">Class</label>
	<div class="col-md-10">
	<Select style="margin-bottom:20px" class="form-control">
		<option>Economy</option>
		<option>Buisness</option>
		<option>First</option>
	</Select>
		</div>
	</div>
	</div>
	</div>
	<div class="form-group" style="margin-bottom:20px;">
	<label class="control-label col-md-2" style="margin-left: 30px;">Passengers</label> 
	<div class="col-md-8">
	<div class="row">
	<div class="col-md-4" style="padding-right:0px" >
	<select class="form-control" name="adult" id="sell">
		<option value="select city" disabled="disabled" selected="selected">Adult</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
		</div>
		<div class="col-md-4" style="padding-right:0px" >
	<select class="form-control" name="child">
		<option value="select city" disabled="disabled" selected="selected">Child</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
		</div>
		<div class="col-md-4" style="padding-right:0px" >
	<select class="form-control" name="infants" id="sell">
		<option value="select city" disabled="disabled" selected="selected">Infants</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
	</select>
		</div>
	</div>
	</div>
	</div>
	<div class="form-group">
	<div class="col-md-8"></div>
		<div class="col-md-4">
			<button type="submit" name="submit" style="background-color: #990033;  color: white; width: 200px; margin-left: 35px; border: 2px solid #9B1B1E" class="btn btn-primary btn-lg" value="submit">Search Flight</button>
	
		</div>
	</div>
	</form>
<div class="col-md-2">
</div>
</div>
</div>
	</div>
<?php
		include "../tutorial practice/New folder/footer.php";
	?>
</body>
</html>
