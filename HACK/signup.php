

<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<?php
		$nameErr=$emailErr="";
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$first_name = $_POST['first_name'];
			$last_name  = $_POST['last_name'];
			if (empty($_POST["username"])) {
    			$nameErr = "*Username is required";
  			} 
  			else {
    			$username = test_input($_POST['username']);
    			// check if name only contains letters and underscore
    			if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      				$nameErr = "*Only letters and underscore allowed"; 
    			}
  			}
			
			$roll   	= $_POST['roll'];
			$batch   	= $_POST['batch'];
			$phone   	= $_POST['phone'];
			$pass 		= $_POST['password'];
			$cpass 		= $_POST['cpassword'];

			if (empty($_POST["email"])) {
    			$emailErr = "Email is required";
  			} 
  			else {
  	  			$email = test_input($_POST["email"]);
    			// check if e-mail address is well-formed
    			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      				$emailErr = "*Invalid email format"; 
    			}
  			}
			
			
		    //$query = "INSERT INTO tbl_user(image) VALUES('$file_name')";
		    //$id = $_SESSION['user_id'];
			$query = "INSERT INTO tbl_user (first_name, last_name, username, roll, batch,phone_no, email, password) VALUES('$first_name', '$last_name', '$username', '$roll', '$batch', '$phone', '$email', '$pass');";
			if($pass === $cpass && $nameErr === "" && $emailErr ==="")
			{
				$result = $db->insert($query);
				if($result){
					
					echo "<h1 style='text-align:center;color:red'><b>Account created successfully</b></h1>";
					setcookie('username',$username,time()+30,"/");
					setcookie('password',$pass,time()+30,"/");
					session_start();
					$_SESSION['username'] = $username;
					$quer = "select * from tbl_user where username='$username'";
					$res = $db->select($query);
					$fetch = mysqli_fetch_assoc($res);
					$_SESSION['user_id'] = $fetch['id'];
					echo $_SESSION['user_id'];
					$_SESSION['password'] = $fetch['password'];
					//header("Location:users.php"); 
				}

			}
			else
			{
				if ($nameErr ==="" && $emailErr==="") 
					echo "Password did not match";
			}



		}
		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
		
		  
?>
<!DOCTYPE html>
<html>
<head>
<style>
	.error {color: #FF0000;}
</style>
<title>HACK Sign Up Form Responsive Widget Template| Home :: KUET</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>HACK Sign Up Form</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
				
				<input placeholder="First Name" name="first_name" class="name" type="text" required="">
					
				<input placeholder="Last Name" name="last_name" class="name2" type="text" required="">

				<input placeholder="Username" name="username" class="error" type="text" required="">
				<span class="error"><?php echo "<br> $nameErr";?></span>


					
				<input placeholder="Roll" name="roll" class="Roll" type="text" required="">
					
				<input placeholder="Batch" name="batch" class="batch" type="text" required="">
					
				<input placeholder="Phone Number" name="phone" class="number" type="text" required="">
					
				<input placeholder="Email" name="email" class="mail" type="text" required="">
				<span class="error"><?php echo "<br> $emailErr";?></span>
					
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
					
				<input  placeholder="Confirm Password" name="cpassword" class="pass" type="password" required="">
				
				
				
				<input type="submit" value="submit">
				
			</form>
			<br>
			<button><a href="index.php" style="text-align:center">
				 Go to HomePage</a>
			</button>
			
		</div>
		<div class="clear"></div>


</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; HACK Sign Up Form . All rights reserved | Design by @Salim Shadman Ankur</a></p>
</div>
<!--//footer-->

</body>
</html>