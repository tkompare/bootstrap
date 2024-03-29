<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>311 Servic.es</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 30px;
		}
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- Le Google Javascript API -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>

<body>
	
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" href="#">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</a>
				<a class="brand" href="#">311 Servic.es</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li id="linav-home" class="active"><a id="thenav-home" href="#">Home</a></li>
						<li id="linav-location"><a id="thenav-location" href="#">Location</a></li>
						<li id="linav-service"><a id="thenav-service" href="#">Service</a></li>
						<li id="linav-contact"><a id="thenav-contact" href="#">Contact</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div id="section-home">
					<h2>Chicago 311 Services</h2>
					<ol>
						<li>Find Your Location</li>
						<li>Choose Request Type</li>
						<li>Give Us The Details</li>
						<li>Enter Your Contact Information For Follow-Up</li>
					</ol>
					<p><button id="start" type="button" class="btn btn-success btn-small">Start <i class="icon-ok icon-white"></i></button></p>
				</div>
			</div>
		</div>
	</div>
	<form action="index.php" method="post">
	<div class="container-fluid">
		<div id="section-location" class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div id="heading-map" class="span6">
						<h2>The Map</h2>
						<div id="map-themap" style="width:95%; height:200px; margin:5px; auto;">
						<!-- The Google map goes here. -->
						</div>
						<p><a id="uselocation" class="btn btn-primary btn-small" href="#">Use this location <i class="icon-ok icon-white"></i></a></p>
					</div>
					<!--/span-->
					<div id="heading-address" class="span12">
						<h2>Address</h2>
						<p><a id="seemap" class="btn btn-primary btn-small" href="#">Use GPS <i class="icon-map-marker icon-white"></i></a></p>
						<div class="row-fluid">
						<div class="address-input span6">
						<label for="address-number">Number</label>
						<input id="address-number" name="address[number]" type="text" class="span9" placeholder="123">
						<label for="address-direction">Direction</label>
						<input id="address-direction" name="address[direction]" type="text" class="span9" placeholder="W">
						</div>
						<div class="address-input span6">
						<label for="address-streetname">Street Name</label>
						<input id="address-streetname" name="address[streetname]" type="text" class="span9" placeholder="Madison">
						<label for="address-suffix">Street Suffix</label>
						<input id="address-suffix" name="address[suffix]" type="text" class="span9" placeholder="Ave">
						</div>
						<p><a id="toservice" class="btn btn-success btn-small" href="#">Continue <i class="icon-ok icon-white"></i></a></p>
						</div>
					</div>
					<!--/span-->
				</div>
			</div>
		</div>
		<div id="section-service" class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div class="span6">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
						tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
						massa justo sit amet risus. Etiam porta sem malesuada magna mollis
						euismod. Donec sed odio dui.</p>
						<p><a class="btn" href="#">View details &raquo;</a></p>
					</div>
					<!--/span-->
					<div class="span6">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
						tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
						massa justo sit amet risus. Etiam porta sem malesuada magna mollis
						euismod. Donec sed odio dui.</p>
						<p><a class="btn" href="#">View details &raquo;</a></p>
					</div>
					<!--/span-->
				</div>
			</div>
		</div>
		<div id="section-contact" class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div class="span6">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
						tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
						massa justo sit amet risus. Etiam porta sem malesuada magna mollis
						euismod. Donec sed odio dui.</p>
						<p><a class="btn" href="#">View details &raquo;</a></p>
					</div>
					<!--/span-->
					<div class="span6">
						<h2>Heading</h2>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
						tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
						massa justo sit amet risus. Etiam porta sem malesuada magna mollis
						euismod. Donec sed odio dui.</p>
						<p><a class="btn" href="#">View details &raquo;</a></p>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
			</div>
			<!--/span-->
		</div>
		<!--/row-->
		<hr>
		<footer>
			<p>&copy; Tom Kompare 2012</p>
		</footer>
	</div>
	<!--/.fluid-container-->
	</form>
	<!-- Le javascript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maps-api-ssl.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script src="js/maps.google.polygon.containsLatLng.js" type="text/javascript"></script>
	<script src="js/49.js" type="text/javascript"></script>
	<script src="js/main.js"></script>
</body>
</html>
