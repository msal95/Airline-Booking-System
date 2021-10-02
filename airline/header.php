<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Airline reservation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  
.navbar-custom ul > .active{

  background-color: yellow !important;


}


.navbar-custom ul > .active a{

  color: black;
 

}

.navbar-custom ul > li > a {

  color: white;

}


.navbar-custom ul > li > a:hover {

  background-color: yellow !important;

}

</style>

</head>
<body>
<div class="container-fluid" style="margin-bottom: 50px;">
<nav class="navbar navbar-custom navbar-fixed-top" style="background:#990033; color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                         
        <span class="icon-bar"></span>                         
      </button>
      <a class="navbar-brand" href="#" style="margin-top: -20px;"><img src="images/logo.png" alt="logo" width="150px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li><a href="about.php" id="about">About</a></li>
          <li><a href="booking.php">Book Ticket</a></li>
           <li class="dropdown">
          <a href="#"class="dropdown-toggle" data-toggle="dropdown">Manage Booking <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cancel.php">Cancel Booking</a></li>
			  <li><a href="update.php">Update Booking</a></li>
          </ul>
        </li>
          <li><a href="flight schedule.php">Flight Schedule</a></li>
          <li><a href="contact.php">Contact US</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
      </div>
      </div>
      </nav>
      </div>
      </body>
      </html>
