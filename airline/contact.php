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
			
			<div class="col-md-5">
			<div class="page-header">
				<h3 style="color:black;">WHERE TO FIND US</h3>
			</div>
				<div id="googleMap" style="width:100%;height:300px;"></div>
				</br>
                                </div>
                            <div class="col-md-7">
                            <div class="row">
                            <div class="col-md-2"></div>
                             <div class="col-md-10">
				<div class="page-header">
				<h3 style="color:black;margin-left:60px;">Address</h3>
			</div>
				<p style="margin-left:60px;font-size:16px">Address:<br>
                               Terminal-1 Road, Jinnah<br>
                               International Airport, Karachi<br>
                               75200, Pakistan <br><br>
                               Call Center:<br>
                               +92-21- 111 80 80 80<br>
                               Email<br>
                               <a href="mailto:saiinfo@shaheenair.com" class="green2">saiinfo@shaheenair.com</a><br>

                               <a href="mailto:complaints.uk@shaheenair.com" class="green2">complaints.uk@shaheenair.com</a><br><br>

                               WhatsApp<br>
                              +92 3163 80 80 80</p>
			      </div>
                           </div>
                        </div>
</div> <div class="col-md-8">
				<div class="page-header">
					<h3 style="color:black;">Contact US</h3>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form class="form-horizontal">
						
							<div class="form-group">
								<label class="control-label col-md-2">Name</label>
								<div class="col-md-10">
								  <input type="text" name="name" class="form-control" placeholder="Name" required>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-2">Email</label>
								<div class="col-md-10">
								  <input type="email" name="email" class="form-control" placeholder="a@a.com" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Phone No</label>
								<div class="col-md-10">
								  <input type="text" name="mobile" class="form-control" placeholder="**********" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Message</label>
								<div class="col-md-10">
								  <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2"></label>
								<div class="col-md-10">
								  <button type="button" name="pass" class="btn btn-link"><a href="c_signup.php">Click Here To Register</a></button>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2"></label>
								<div class="col-md-10">
								  <button type="button" name="submit" style="background:#003f7a; color:#fff; border:2px solid #999;" class="btn btn-default" value="submit">Submit</button>
								  <button type="reset" name="reset" style="background:#000; color:#fff; border:2px solid #999;" class="btn btn-default" value="Reset">Reset</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-5">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php
		include "footer.php";
	?>
	<script>
					function myMap() {
					var mapProp= {
						center:new google.maps.LatLng(51.508742,-0.120850),
						zoom:5,
					};
					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
					}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>