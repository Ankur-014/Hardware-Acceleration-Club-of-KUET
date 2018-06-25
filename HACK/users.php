<?php
	session_start();
	if(isset($_COOKIE['username']))
	{
		$_SESSION['username'] = $_COOKIE['username'];
		$_SESSION['password'] = $_COOKIE['password'];
	}
?>
<?php include 'config/config.php' ?>
	<?php include 'lib/Database.php' ?>
	<?php
		$db = new Database();
	?>
	<section id="main" class="wrapper">
				<div class="container">

					<header class='major special' onload="startTime()">
						
						<?php

							$query = "select * from tbl_user";
							$mem = $db->select($query);
							while($result = $mem->fetch_assoc()){
							?>
							
							<?php 
							if($result['username']===$_SESSION['username']){
								$nick= $result['first_name'];
								$las = $result['first_name']." ".$result['last_name'];
								$im= $result['image'];
								$rl = $result['roll'];
								$con = $result['phone_no'];
								break;
							}?>
							<?php };?>
							<h2> 
						<?php echo "Welcome ".$las;?>
						 </h2>
						<p>Hardware Acceleration Club of KUET</p>


						
						 

								


						<div class="card">
						  <img src="uploads/<?php echo $im; ?>" alt="<?php echo $nick; ?>" style="width:80%">
						  

						  <p class="title"><h1><?php echo $las; ?></h1>Roll : <?php echo $rl; ?></p>
						  <p>Khulna University of Engineering & Technology</p>
						  <div style="margin: 24px 0;">
						    <a href="#"><i class="fa fa-dribbble"></i></a> 
						    <a href="#"><i class="fa fa-twitter"></i></a>  
						    <a href="#"><i class="fa fa-linkedin"></i></a>  
						    <a href="#"><i class="fa fa-facebook"></i></a> 
						 </div>
						 <p><button>Contact: <?php echo $con; ?></button></p>

						


					</header>

					<!--<form action="" method="post" enctype="multipart/form-data">
    					Select image to upload:
    					<input type="file" name="fileToUpload" id="fileToUpload">
    					<input type="submit" value="Upload Image" name="submit">
					</form>-->
							<?php include 'unav.php'?>

				</div>
			</section>
			
	
	<?php
			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				?>

				
				<?php

						$query = "select * from tbl_user";
						$mem = $db->select($query);
						while($result = $mem->fetch_assoc()){
						?>
						
						<?php 
							if($result['username']===$_SESSION['username']){
								$txt=$result['email']; $r=$_SESSION['username'];break;
							}?>
						<?php };

					 
				$message 	= $_POST['message'];
				$query = "INSERT INTO tbl_cmnt(username,email, message) VALUES('$r','$txt', '$message');";
				$result = $db->insert($query);



			}
	?><?php
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
		<?php //include 'clock.php' ?>
		
	</head>
	<style>
	.card {
	  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
	  max-width: 300px;
	  margin: auto;
	  text-align: center;
	  font-family: arial;
	}

	.title {
	  color: grey;
	  font-size: 18px;
	}

	button {
	  border: none;
	  outline: 0;
	  display: inline-block;
	  padding: 8px;
	  color: white;
	  background-color: #000;
	  text-align: center;
	  cursor: pointer;
	  width: 100%;
	  font-size: 18px;
	}

	a {
	  text-decoration: none;
	  color: black;
	}

	button:hover, a:hover {
	  opacity: 0.7;
	}
	</style>
	<body>


		<!-- Header -->
			<header id="header">
				<h1><a href="users.php">HACK</a></h1>
				<a href="#nav">Menu</a>
			</header>

			



		<!-- Main -->
			

		<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>If you want to say something about us</p>
					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
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