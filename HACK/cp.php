
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
						<?php echo "Change Password";?>
						 </h2>
						
					</header>
	</section>

	
	  <?php

			if($_SERVER['REQUEST_METHOD'] == "POST")
			{
	

				$p      = $_POST['old_password'];	 
				$np 	= $_POST['new_password'];
				$cp		= $_POST['confirm_password'];

				$username = $_SESSION['username'];?>

        		<?php

						$query = "select * from tbl_user";
						$mem = $db->select($query);
						while($result = $mem->fetch_assoc()){
						?>
						
						<?php 
						if($result['username']===$_SESSION['username']){
						$txt= $result['password'];break;
						}?>
						<?php };

					 ?>
					 <?php
        		


        		if($p===$txt)
		        {

			        if($np===$cp){
				        $sql="UPDATE tbl_user SET password='$np' where username='$username'";
				    	$sql1= $db->update($sql);
				    	if($sql1)
				        {
				        	?> <p style="text-align: center"><b> <?php echo "Congratulations You have successfully changed your password";?></b></p>
				        	<?php
				        }
				    }
			        
			       else
			        {
			       		?> <p style="text-align: center"><b> <?php echo "Password do not matched";?></b></p>
				        	<?php
			       }
		   		}
		   		else
		        {
		        	?> <p style="text-align: center"><b> <?php echo "You have entered an incorrect password";?></b></p>
				        	<?php
		        }
		     }
	?>
	</div>
			
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
		 <form action="" method="POST">
                    <div class="container 75%">
                      <div class="row uniform 50%">
                        
                        <div class="12u$">
                          <input name="old_password" placeholder="Old Password" type="password" /><br>
                           <input name="new_password" placeholder="New Password" type="password" /><br>
                            <input name="confirm_password" placeholder="Confirm Password" type="password" /><br>
                            <ul class="actions">
		                      <li style="align-content: center"><input type="submit" class="special" value="Submit" /></li>
		                      <li><input type="reset" class="alt" value="Reset" /></li>
                    		</ul>
                        </div>
                      </div>
                    </div>
                    
          </form>

		<!-- Header -->
			<header id="header">
				<h1><a href="users.php">HACK</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<?php include 'unav.php'?>		

		<?php include 'footer.php'?>