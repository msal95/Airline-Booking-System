<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Airline Reservation</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="hover.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	
.carousel-inner > .item > img{


	height: 500px !important;


}

.panel-body img{

	max-height: 230px !important;

}


</style>


</head>
<script type="text/javascript">
	$('#d1').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
});
</script>
<body>
<?php
		include "header.php";
	?>
<div class="container-fluid" style="margin-top:52px">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">
                  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

			  <div class="item active">
				<img src="images/XWING-NLWW.jpg" alt="Shaheen Air" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Shaheen Air</h3>
				  <p>Fly with us!</p>
				</div>
			  </div>

			  <div class="item">
				<img src="images/Awards.jpg" alt="Award" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Award</h3>
				  
				</div>
			  </div>
			
			  <div class="item">
				<img src="images/dubai.jpg" alt="Dubai"style="width:100%;">
				<div class="carousel-caption">
				  <h3>Dubai</h3>
				
				</div>
			  </div>
                           <div class="item">
				<img src="images/WEB-APP-PROMO-NLWEB.jpg" alt="App" style="width:100%;">
				<div class="carousel-caption">
				  <h3>Mobile App</h3>
				  <p>Stay connected with us!</p>
				</div>
			  </div>
		  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		  </div>
		</div>
	</div>	
	<!---------------------------------------pannels-------------------------------------------------->



	            <div class="container" style="color:grey">
				<div class="page-header">
					<h1>Our latest flight deals</h1>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">Islamabad</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div> 
						</div>
					</div>
                    <div class="col-md-4">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">Multan</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div>
					</div>
					<div class="col-md-4">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">Lahore</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div>
				
				</div>
                              <div class="row">
					<div class="col-md-4">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">Dubai</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div>
					</div>
                                            <div class="col-md-4">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">New York</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div>
					</div>
                                      <div class="col-md-4">
						<div class="single-product">
							<div class="product-f-image">
								<img src="5822535765_204-home_default.jpg" class="img-responsive" style="width:100%" id="d1">
								<div class="product-hover">						
									<a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Book Now</a>
								</div>
							</div>
							<h2><a href="#">Musqat</a></h2>
							<div class="product-carousel-price">
								<ins style="color:#FE9315;">PKR 27,335</ins>
							</div>
					</div>
					</div>
			</div>
	         </div>
		
	<hr>
	<?php
		include "footer.php";
	?>
</body>
</html>

</body>
</html>