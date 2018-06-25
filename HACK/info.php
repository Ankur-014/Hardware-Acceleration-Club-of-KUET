
<?php
	session_start();
	
	?>
	<?php include 'config/config.php' ?>
	<?php include 'lib/Database.php' ?>
	<?php
		$db = new Database();
	?>
	<section id="main" class="wrapper">
				<div class="container">

					<header class='major special'>
						<h2> 
						<?php echo "Personal Information of ".$_SESSION['username'];?>
						 </h2>
						<p>Hardware Acceleration Club of KUET</p>
					</header>
					<?php

						$query = "select * from tbl_user";
						$mem = $db->select($query);
						while($result = $mem->fetch_assoc()){
						?>
						
						<?php 
						if($result['username']===$_SESSION['username']){
							?><img src="uploads/<?php echo $result['image']; ?>" alt="<?php echo $_SESSION['username']; ?>" style="height: 50%;width:25%"> <br>
							<?php
						$txt= $result['first_name']." ".$result['last_name']."<br>Batch: ".$result['batch']."<br>Email: ".$result['email']."<br>Roll: ".$result['roll']."<br>Contact NO: ".$result['phone_no']; echo $txt;break;
						}?>
						<?php };

					 ?>

					 

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
	?>
			<?php
						 
						 
						
		 
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

		<?php include 'unav.php'?>

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