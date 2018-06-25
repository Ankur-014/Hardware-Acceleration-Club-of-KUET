<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Members</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<style type="text/css">
		.sh{
			
			color:black;
			box-sizing: content-box;
			width: 30%;
			margin-left: 400px;
			border: solid #5B6DCD 3px;
			padding: 5px;

		}
		
	</style>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">HACK</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<<?php include 'hnav.php'?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Members</h2>
						<p>Hardware Acceleration Club of KUET</p>
					</header>

					<!--<a href="#" class="image fit"><img src="images/pc2.jpg" alt="" /></a>-->
					<div class="con">
		              <p>Suggestions: <span id="txtHint"></span></p> 
		              <p>Search: <input type="text" id="txt1" placeholder="First_name"  onkeyup="showHint(this.value)"></p>

		                <script>
		                function showHint(str) {
		                  var xhttp;
		                  if (str.length == 0) { 
		                    document.getElementById("txtHint").innerHTML = "";
		                    return;
		                  }
		                  xhttp = new XMLHttpRequest();
		                  xhttp.onreadystatechange = function() {
		                    if (this.readyState == 4 && this.status == 200) {
		                      document.getElementById("txtHint").innerHTML = this.responseText;
		                    }
		                  };
		                  xhttp.open("GET", "gethint6.php?q="+str, true);
		                  xhttp.send();   
		                }
		                </script>
		            </div>

					<div >

						<h3 style="text-align: center"><u>Full List</u></h3>
						<?php
							$myfile = fopen("member.txt", "w") or die("Unable to open file!");
							
							$query = "select * from tbl_user";
							$mem = $db->select($query);
							$x=1;
							while($result = $mem->fetch_assoc()){
							?>
							<div class="sh">
							<img src="uploads/<?php echo $result['image']; ?>" alt="<?php echo $_SESSION['username']; ?>" style="height: 100%;width:100%"> <br><?php $txt=$x.". ".$result['first_name']." ".$result['last_name']."<br>Roll: ".$result['roll']."<br>Batch: ".$result['batch']."<br>"; ?> 
							    <?php echo $txt;fwrite($myfile, $txt); ?> </div> <br/>
							

						 <?php $x++; } fclose($myfile);?>

						 <br>
					</div>
					<!--<p><a href ="https://drive.google.com/open?id=1l4lLZoABafxI-oogpaHR1bq5eZUxLhEa"><b>Click to know HACK Committee 2018</b></p>-->
						<marquee><a href ="Hack-Committee-2018.docx"><b>Click to Download HACK Committee 2018</marquee></p>

				</div>
			</section>

<?php include 'footer.php'?>