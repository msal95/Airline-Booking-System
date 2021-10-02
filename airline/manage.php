<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width-device-width">
<head>
<title>AirLine Reservation System</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<?php
		include "header.php";
	?>
<div class="container">
<div class="row">
<div class="page-header">
<h1 style="color:#990033";> Cancel Booking</h1>
</div>
				<div class="col-md-12">
						<form class="form-horizontal" style="margin-top:40px">
							
                                                        <div class="form-group">
								<div class="col-md-6">
								  <input type="text" name="s-no" class="form-control" placeholder="Enter seat flight" style="margin-top:10px" required>
								</div>
							</div>
                                                                  <div class="form-group">
                                                                  <div class="col-md-6">
								  <input type="text" name="f-no" class="form-control" placeholder="Enter Flight No"  style="margin-top:10px" required>
								</div>
                                                              </div>
                                                         <div class="form-group">
                                                           <div class="col-md-10">
                                                         <button type="submit" name="submit" style="background:#990033; color:#fff; border:2px solid #990033; margin-top:10px;" class="btn btn-default" value="submit">Cancel Flight</button
							</div> 
							</div>
						</form>



</div>
</div>
</div>
</body>
</html>