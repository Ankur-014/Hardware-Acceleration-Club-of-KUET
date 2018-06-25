
<!DOCTYPE HTML>

<html>
	<head>
		<title>Location</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">HACK</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<?php include 'hnav.php'?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Google Maps</h2>
						<p>Hardware Acceleration Club of KUET</p>
					</header>

					

					<div id="map" style="width:100%;height:400px;"></div>

					<script>
					function myMap() {
					  var mapCanvas = document.getElementById("map");
					  var mapOptions = {
					    center: new google.maps.LatLng(22.9005, 89.5024), zoom: 10
					  };
					  var map = new google.maps.Map(mapCanvas, mapOptions);
					}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAGP87QHr662VDMaUHJslMh4TEVIMIm8o&callback=myMap">
						
					</script>
					<br>
					<marquee><a href="gallery.php">Click to View HACK Photo Gallery</a></marquee>

				</div>
			</section>

<?php include 'footer.php'?>