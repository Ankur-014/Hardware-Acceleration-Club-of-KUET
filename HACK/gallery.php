<!DOCTYPE HTML>

<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Gallery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<?php include 'slide.php' ?>

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
						<h2>Photo GAllery</h2>
						<p>Hardware Acceleration Club of KUET</p>
					</header>

					
					<?php include 'slideshow.php'?>

					
					

				</div>
			</section>

<?php include 'footer.php'?>