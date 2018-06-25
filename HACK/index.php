<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<?php
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$username 	= $_POST['username'];
			$email   	= $_POST['email'];
			$message 	= $_POST['message'];
			$query = "INSERT INTO tbl_cmnt(username,email, message) VALUES('$username','$email', '$message');";
			$result = $db->insert($query);

		}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>HACK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">HACK</a></h1>				
				<a href="#nav" style="float-right">Menu</a>
			</header>


		<?php include 'hnav.php'?>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Hardware Acceleration Club of KUET</h2>
				<p>A place for inventing something new</p>
				<ul class="actions">
					<li><a href="about.php" class="button big special">Learn More</a></li>
				</ul>
			</section>

			<marquee><b> <a href="hack.txt">New Committee has been given</a></b></marquee>
		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Messeage from President</h2>
							<p>Welcome to the Department of Computer Science and Engineering (CSE) at Khulna University of Engineering & Technology (KUET). Our department provides an outstanding opportunity to students to get quality education in Computer Sc ...</p>
							<ul class="actions">
								<li>
									<a href="det.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>HACK Invention</h2>
							<p>HACK has developed some Robots like-
  								-SKIM-H, the first intelligent ROBOT of Bangladesh...
  								
							</p>
							<ul class="actions">
								<li>
									<a href="invention.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>

				</div>
			</section>

	
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>If you want to say something about us</p>
					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="username" placeholder="Username" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<?php include 'footer.php'?>

		