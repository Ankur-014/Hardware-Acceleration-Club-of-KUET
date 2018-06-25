<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username   = $_POST['username'];
		$password   = $_POST['password'];
		//$remember  	= $_POST['remember'];
		$query = "select * from tbl_user where username='$username' and password='$password'";
			$result = $db->select($query);
		if($result)
			{
				//$remember	= $_POST['remember'];
				$fetch = mysqli_fetch_assoc($result);
				if(isset($_POST['remember'])){
					setcookie('username',$username,time()+30,"/");
					setcookie('password',$password,time()+30,"/");
					session_start();
					$_SESSION['username'] = $username;
					$_SESSION['user_id'] = $fetch['id'];				
					header("Location:users.php"); 
				}
				else{
					session_start();
					setcookie('username',$username,time()+30,"/");
					setcookie('password',$password,time()+30,"/");
					$_SESSION['username'] = $username;
					$_SESSION['user_id'] = $fetch['id'];
					header("Location:users.php");
				}
				
			}
		else{

			echo "<h1 style='text-align:center;'>Username or Password is invalid.<br>Click here to <a href='login.php'>try again</a></h1>";

		}
	}
	else{
		header("location: login.php");
	}
?>
