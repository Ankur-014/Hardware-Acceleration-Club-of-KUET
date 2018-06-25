<?php
	session_start();
?>
	<section id="main" class="wrapper">
				<div class="container">

					<header class='major special' onload="startTime()">
						<h2> 
						<?php echo "Profile Picture"?>
						 </h2>
						<p>Hardware Acceleration Club of KUET</p>
						
						<form action="img.php" method="post" enctype="multipart/form-data">
						    <p><b>Select image to upload:</b></p>
						    <input type="file" name="image" id="fileToUpload">
						    <input type="submit" value="Upload Image" name="submit">
						</form>



					</header>

					<!--<form action="" method="post" enctype="multipart/form-data">
    					Select image to upload:
    					<input type="file" name="fileToUpload" id="fileToUpload">
    					<input type="submit" value="Upload Image" name="submit">
					</form>-->

				</div>
			</section>
			

	<?php include 'config/config.php' ?>
	<?php include 'lib/Database.php' ?>
	<?php
		$db = new Database();
	?>
	

<!DOCTYPE HTML>

<html>
	<head>
		<title>USER</title>
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
				<h1><a href="users.php">HACK</a></h1>
				<a href="#nav">Menu</a>
			</header>
			<div>


			</div>

		<?php include 'unav.php'?>

		<!-- Main -->
			

		

<?php include 'footer.php'?>