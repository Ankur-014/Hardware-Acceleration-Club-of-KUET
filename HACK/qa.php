<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Comments</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<style>
		

		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 100px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    background-color: #fefefe;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #888;
		    width: 80%;
		}

		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}
		</style>
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
						<h2>Comments</h2>
						<p>Hardware Acceleration Club of KUET</p>
					</header>
					<div>
		              <p>Suggestions: <span id="txtHint"></span></p> 
		              <p>Search: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

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
		                  xhttp.open("GET", "gethint4.php?q="+str, true);
		                  xhttp.send();   
		                }
		                </script>
		            </div>

					<?php
						$query = "select * from tbl_cmnt order by time desc";
						$notice = $db->select($query);
						while($result = $notice->fetch_assoc()){
						?>
						
						<h3><a href="#"><?php echo  $result['username']; ?></a></h3>
					
						<?php echo $result['message']; ?>
						<p><?php echo $result['time']; ?></p>

						
					
					<?php } ?>
					<button id="myBtn">Warning!</button>


				</div>
								<!-- Trigger/Open The Modal -->
				
				<!-- The Modal -->
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <p>Bad comments has been deleted</p>
				  </div>

				</div>

				<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal 
				btn.onclick = function() {
				    modal.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
				    modal.style.display = "none";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				    if (event.target == modal) {
				        modal.style.display = "none";
				    }
				}
				</script>
			</section>

<?php include 'footer.php'?>