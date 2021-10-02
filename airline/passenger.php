
<?php

	
$selected_adult=$_REQUEST["adult"];
$selected_child=$_REQUEST["child"];
$selected_infants=$_REQUEST["infants"];

?>

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
		include "header1.php";
	?>

	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-10">
	<form role="form" method="GET" action="">
	<!div class="panel panel-default">
	<!div class="panel-body">
	<div class="page-header">
	<h2 style="color:#990033;" ><b> Passengers Information</b></h2>
	</div>
<?php
		for($x=1;$x<=$selected_adult;$x++)
{	?>	
<div class="panel panel-default">
<div class="Panel-heading">
	<h1 class="panel-title"> <b>Adult</b></h1>
	</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-4">
				<div class="form-group">
                       <label>Title</label>
                        <Select class="form-control" name="adult" id="title">
                        	<option value="select Title" disabled="disabled" selected="selected">Title</option>
                        	<option>Mr</option>
                        	<option>Mrs</option>
                        	<option>Miss</option>
                        </Select>
					</div>
				</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Firrst Name</label>
                        <input type="text" name="f-name" id="f-name" class="form-control" placeholder="Enter name" required>
					</div>

	</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Last Name</label>
                        <input type="text" name="last" id="last" class="form-control" placeholder="Enter last name" required>
					</div>

	</div>
</div>
<div class="row">
<div class="col-md-2">
				<div class="form-group">
                       <label>Date of Birth</label>
                        <Select class="form-control" name="day" id="day">
                        	<option value="select Day" disabled="disabled" selected="selected">Day</option>
                        	<option>1</option>
                        	<option>2</option>
                        	<option>3</option>
                        	<option>4</option>
                        	<option>5</option>
                        	<option>6</option>
                        	<option>7</option>
                        	<option>8</option>
                        	<option>9</option>
                        	<option>10</option>
                        	<option>11</option>
                        	<option>12</option>
                        	<option>13</option>
                        	<option>14</option>
                        	<option>15</option>
                        	<option>16</option>
                        	<option>17</option>
                        	<option>18</option>
                        	<option>19</option>
                        	<option>20</option>
                        	<option>21</option>
                        	<option>22</option>
                        	<option>23</option>
                        	<option>24</option>
                        	<option>25</option>
                        	<option>26</option>
                        	<option>27</option>
                        	<option>28</option>
                        	<option>29</option>
                        	<option>30</option>
                        	<option>31</option>
                        </Select>
					</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="month" id="month">
                        	<option value="select month" disabled="disabled" selected="selected">Month</option>
                        	<option>January</option>
                        	<option>February</option>
                        	<option>March</option>
                        	<option>April</option>
                        	<option>May</option>
                        	<option>June</option>
                        	<option>July</option>
                        	<option>August</option>
                        	<option>September</option>
                        	<option>October</option>
                        	<option>November</option>
                        	<option>December</option>
                        </Select>
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="year" id="year">
                        	<option value="select year" disabled="disabled" selected="selected">Year</option>
                        	<option>2017</option>
                        	<option>2016</option>
                        	<option>2015</option>
                        	<option>2014</option>
                        	<option>2013</option>
                        	<option>2012</option>
                        	<option>2011</option>
                        	<option>2010</option>
                        	<option>2009</option>
                        	<option>2008</option>
                        	<option>2007</option>
                        	<option>2006</option>
                        	<option>2005</option>
                        	<option>2004</option>
                        	<option>2003</option>
                        	<option>2002</option>
                        	<option>2001</option>
                        	<option>2000</option>
                        	<option>1999</option>
                        	<option>1998</option>
                        	<option>1997</option>
                        	<option>1996</option>
                        	<option>1995</option>
                        	<option>1994</option>
                        	<option>1993</option>
                        	<option>1992</option>
                        	<option>1991</option>
                        	<option>1990</option>
                        	<option>1989</option>
                        	<option>1988</option>
                        	<option>1987</option>
                 
                        </Select>
					</div>
				</div>
				<div class="col-md-6">
				<label>Gender</label>
				<div class="row">
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
					</div>
					</div>
					<div class="col-md-1">
					<label style="color: white; margin-bottom:-18px;">Male</label>
					<h4 style="margin-left:-35px;">Male</h4>
						</div>
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
						</div>
					</div>
					<div class="col-md-1" >
					<label style="color: white; margin-bottom:-18px;">Femle</label>
					<h4  style="margin-left:-35px;">Female</h4>
						</div>
					</div>
				</div>
	</div>
		</div>
		</div>
		
<?php } ?>

<!---------------------------------------child--------------------------------------->

	<?php
		for($x=1;$x<=$selected_child;$x++)
{	?>	
<div class="panel panel-default">
<div class="Panel-heading">
	<h1 class="panel-title"><b>Child</b></h1>
	</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-4">
				<div class="form-group">
                       <label>Title</label>
                        <Select class="form-control" name="adult" id="title">
                        	<option value="select Title" disabled="disabled" selected="selected">Title</option>
                        	<option>Mr</option>
                        	<option>Mrs</option>
                        	<option>Miss</option>
                        </Select>
					</div>
				</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Firrst Name</label>
                        <input type="text" name="f-name" id="f-name" class="form-control" placeholder="Enter name" required>
					</div>

	</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Last Name</label>
                        <input type="text" name="last" id="last" class="form-control" placeholder="Enter last name" required>
					</div>

	</div>
</div>
<div class="row">
<div class="col-md-2">
				<div class="form-group">
                       <label>Date of Birth</label>
                        <Select class="form-control" name="day" id="day">
                        	<option value="select Day" disabled="disabled" selected="selected">Day</option>
                        	<option>1</option>
                        	<option>2</option>
                        	<option>3</option>
                        	<option>4</option>
                        	<option>5</option>
                        	<option>6</option>
                        	<option>7</option>
                        	<option>8</option>
                        	<option>9</option>
                        	<option>10</option>
                        	<option>11</option>
                        	<option>12</option>
                        	<option>13</option>
                        	<option>14</option>
                        	<option>15</option>
                        	<option>16</option>
                        	<option>17</option>
                        	<option>18</option>
                        	<option>19</option>
                        	<option>20</option>
                        	<option>21</option>
                        	<option>22</option>
                        	<option>23</option>
                        	<option>24</option>
                        	<option>25</option>
                        	<option>26</option>
                        	<option>27</option>
                        	<option>28</option>
                        	<option>29</option>
                        	<option>30</option>
                        	<option>31</option>
                        </Select>
					</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="month" id="month">
                        	<option value="select month" disabled="disabled" selected="selected">Month</option>
                        	<option>January</option>
                        	<option>February</option>
                        	<option>March</option>
                        	<option>April</option>
                        	<option>May</option>
                        	<option>June</option>
                        	<option>July</option>
                        	<option>August</option>
                        	<option>September</option>
                        	<option>October</option>
                        	<option>November</option>
                        	<option>December</option>
                        </Select>
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="year" id="year">
                        	<option value="select year" disabled="disabled" selected="selected">Year</option>
                        	<option>2017</option>
                        	<option>2016</option>
                        	<option>2015</option>
                        	<option>2014</option>
                        	<option>2013</option>
                        	<option>2012</option>
                        	<option>2011</option>
                        	<option>2010</option>
                        	<option>2009</option>
                        	<option>2008</option>
                        	<option>2007</option>
                        	<option>2006</option>
                        	<option>2005</option>
                        	<option>2004</option>
                        	<option>2003</option>
                        	<option>2002</option>
                        	<option>2001</option>
                        	<option>2000</option>
                        	<option>1999</option>
                        	<option>1998</option>
                        	<option>1997</option>
                        	<option>1996</option>
                        	<option>1995</option>
                        	<option>1994</option>
                        	<option>1993</option>
                        	<option>1992</option>
                        	<option>1991</option>
                        	<option>1990</option>
                        	<option>1989</option>
                        	<option>1988</option>
                        	<option>1987</option>
                 
                        </Select>
					</div>
				</div>
				<div class="col-md-6">
				<label>Gender</label>
				<div class="row">
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
					</div>
					</div>
					<div class="col-md-1">
					<label style="color: white; margin-bottom:-18px;">Male</label>
					<h4 style="margin-left:-35px;">Male</h4>
						</div>
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
						</div>
					</div>
					<div class="col-md-1" >
					<label style="color: white; margin-bottom:-18px;">Femle</label>
					<h4  style="margin-left:-35px;">Female</h4>
						</div>
					</div>
				</div>
				</div>
		</div>
		</div>
				
		
<?php } ?>

<!-----------------------------------------------Infants------------------------->

	<?php
		for($x=1;$x<=$selected_infants;$x++)
{	?>

<div class="panel panel-default">
		
	
	
		<div class="panel-heading">
			<h1 class="panel-title" ><b>Infants</b></h1>
	</div>
	<div class="row">
	<div class="panel-body">
		<div class="col-md-4">
				<div class="form-group">
                       <label>Title</label>
                        <Select class="form-control" name="adult" id="title">
                        	<option value="select Title" disabled="disabled" selected="selected">Title</option>
                        	<option>Mr</option>
                        	<option>Mrs</option>
                        	<option>Miss</option>
                        </Select>
					</div>
				</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Firrst Name</label>
                        <input type="text" name="f-name" id="f-name" class="form-control" placeholder="Enter name" required>
					</div>

	</div>
	<div class="col-md-4">
	<div class="form-group">
                       <label>Last Name</label>
                        <input type="text" name="last" id="last" class="form-control" placeholder="Enter last name" required>
					</div>

	</div>
</div>
<div class="row" style="margin-left: 10px;">
<div class="col-md-2">
				<div class="form-group">
                       <label>Date of Birth</label>
                        <Select class="form-control" name="day" id="day">
                        	<option value="select Day" disabled="disabled" selected="selected">Day</option>
                        	<option>1</option>
                        	<option>2</option>
                        	<option>3</option>
                        	<option>4</option>
                        	<option>5</option>
                        	<option>6</option>
                        	<option>7</option>
                        	<option>8</option>
                        	<option>9</option>
                        	<option>10</option>
                        	<option>11</option>
                        	<option>12</option>
                        	<option>13</option>
                        	<option>14</option>
                        	<option>15</option>
                        	<option>16</option>
                        	<option>17</option>
                        	<option>18</option>
                        	<option>19</option>
                        	<option>20</option>
                        	<option>21</option>
                        	<option>22</option>
                        	<option>23</option>
                        	<option>24</option>
                        	<option>25</option>
                        	<option>26</option>
                        	<option>27</option>
                        	<option>28</option>
                        	<option>29</option>
                        	<option>30</option>
                        	<option>31</option>
                        </Select>
					</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="month" id="month">
                        	<option value="select month" disabled="disabled" selected="selected">Month</option>
                        	<option>January</option>
                        	<option>February</option>
                        	<option>March</option>
                        	<option>April</option>
                        	<option>May</option>
                        	<option>June</option>
                        	<option>July</option>
                        	<option>August</option>
                        	<option>September</option>
                        	<option>October</option>
                        	<option>November</option>
                        	<option>December</option>
                        </Select>
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
                       <label style="color: white;">Date of Birth</label>
                        <Select class="form-control" name="year" id="year">
                        	<option value="select year" disabled="disabled" selected="selected">Year</option>
                        	<option>2017</option>
                        	<option>2016</option>
                        	<option>2015</option>
                        	<option>2014</option>
                        	<option>2013</option>
                        	<option>2012</option>
                        	<option>2011</option>
                        	<option>2010</option>
                        	<option>2009</option>
                        	<option>2008</option>
                        	<option>2007</option>
                        	<option>2006</option>
                        	<option>2005</option>
                        	<option>2004</option>
                        	<option>2003</option>
                        	<option>2002</option>
                        	<option>2001</option>
                        	<option>2000</option>
                        	<option>1999</option>
                        	<option>1998</option>
                        	<option>1997</option>
                        	<option>1996</option>
                        	<option>1995</option>
                        	<option>1994</option>
                        	<option>1993</option>
                        	<option>1992</option>
                        	<option>1991</option>
                        	<option>1990</option>
                        	<option>1989</option>
                        	<option>1988</option>
                        	<option>1987</option>
                 
                        </Select>
					</div>
				</div>
				<div class="col-md-6">
				<label>Gender</label>
				<div class="row">
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
					</div>
					</div>
					<div class="col-md-1">
					<label style="color: white; margin-bottom:-18px;">Male</label>
					<h4 style="margin-left:-35px;">Male</h4>
						</div>
					<div class="col-md-2">
					<div class="form-group">
					<input type="radio" name="180" class="form-control">
						</div>
					</div>
					<div class="col-md-1" >
					<label style="color: white; margin-bottom:-18px;">Femle</label>
					<h4  style="margin-left:-35px;">Female</h4>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		
<?php } ?>
	
	
	<!--------------------------------------CONTACT_DETAILS--------------------------------->
	
	
	
		<div class="row">
				<div class="col-md-12">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title"><b>Contact Details</b></h1>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
						<div class="form-group" required>
                      <label>Contact person</label>
      <Select class="form-control" name="person">
		<option> Adult 1</option>
		<option>Adult 2</option>
	</Select>
					</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Phone no</label>
								<input type="text" name="phone" class="form-control" placeholder="***********">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" placeholder="example@example.com">
							</div>
						</div>
						
					</div>
				</div>
				<div class="row" style="margin-left: 3px;margin-right: -3px;">
					<div class="col-md-4">
						<div class="form-group">
                      <label>Card Type</label>
      <Select class="form-control" name="payment">
		<option value="select payment" disabled="disabled" selected="selected">Payment using</option>
		<option>Visa card</option>
		<option>Premium Card</option>
	</Select>
					</div>
					</div>
	<div class="col-md-4">
		<div class="form-group">
								<label>Card no</label>
								<input type="text" name="card_no" class="form-control" placeholder="Enter card no">
							</div>
	</div>
					<div class="col-md-4">
						<div class="form-group">
								<label>Expiry date  of Card</label>
								<input type="date" name="ex_date" class="form-control">
							</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		
		<!-------------------------------------BUTTON-------------------------------->
		
		
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-2">
	<button type="submit" name="submit" style="background-color: #990033;  color: white; margin-left: 90px; width: 200px; margin-top: 10px; border: 2px solid #9B1B1E" class="btn btn-primary btn-lg" value="submit">Book Ticket</button>
	</div>
		</div>
		<div class="col-md-2"></div>
		</div>
		<!/div>
		<!/div>
		</form>
		<div class="col-md-1"></div>
	<</div>
	</div>
	<?php
		include "footer.php";
	?>
	</html>
		</body>

