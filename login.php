<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<?php

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
					$user = $_POST['username'];
					$pass = $_POST['password'];
					
					if($user == 'Ankur' && $pass == '1234')
					{
						header("Location:index.php");
					}
					else
					{
						echo "Incorrect";
					}
			}

			?>
		<div class="button">
			<a href="#">Hardware Acceleration Club of KUET</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>