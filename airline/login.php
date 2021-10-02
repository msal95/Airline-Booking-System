<?php
include "db.php";
session_start();
	$flg_submit = false;
	
	$flg_login = 0;
	
	if(isset($_POST['submit'])){
				
		$flg_submit = true;
		
		$email = $_POST['email'];
		$pass = sha1($_POST['pass']);
		
		
		$result = mysql_query("SELECT * FROM `user` where email = '$email' AND pass = '$pass'") or die(mysql_error());
		
			if(mysql_num_rows($result)){
				
				$row = mysql_fetch_assoc($result);
				
				$flg_login = 1;
				
				
				$_SESSION['id'] = $row['u_id'];
				
				header("location:index.php");
			}
			else{
				
                     header("location:login.php?msg=fail");
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
	
	<div class="well"></div>
	<div class="container">
		<div class="row">
		<div class="col-md-2">
					</div>
			<div class="col-md-8">
				<div class="page-header">
					<h3 style="color:blue;">LOGIN TO YOU'R ACCOUNT</h3>
				</div>
				<div class="row">
				<div class="col-md-2">
					</div>
					<div class="col-md-7">
					
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label class="control-label col-md-4">Email</label>
								<div class="col-md-8">
								  <input type="email" name="email" class="form-control" placeholder="a@a.com" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Password</label>
								<div class="col-md-8">
								  <input type="password" name="pass" class="form-control" placeholder="Password" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4"></label>
								<div class="col-md-8">
								  <button type="submit" name="sign" class="btn btn-link"><a href="c_signup.php">Click Here To Register</a></button>
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
					<div class="col-md-2">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>