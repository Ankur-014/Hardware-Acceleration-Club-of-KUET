<!DOCTYPE HTML>

<html>
	<head>
		<title>Message</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<style>
		table,th,td {
		  border : 1px solid black;
		  border-collapse: collapse;
		}
		th,td {
		  padding: 5px;
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
						<h2>Message from President</h2>
						<p>Hardware Acceleration Club of KUET</p>
						<marquee><a href="gallery.php">Click to View HACK Photo Gallery</a></marquee>
					</header>

					<a href="det.php" class="image fit"><img src="images/3.jpg" alt="" /></a>
					<div>
						<p>
							Welcome to the Department of Computer Science and Engineering (CSE) at Khulna University of Engineering & Technology (KUET). Our department provides an outstanding opportunity to students to get quality education in Computer Science and Engineering.

						</p>
						<p>
							Computer Science is an exciting, challenging and dynamic discipline. Computers form an integral part in every aspect of modern life introducing new computing technologies at an enormous rate. To develop new technologies, Computer Science is a dynamic and challenging field of study which changes continually and rapidly. Being one of the leading engineering universities in Bangladesh, Dept. of CSE, KUET has always led the change with constant revision of goals and realistic plans to achieve them.
						</p>
						<p>

							Our department started its academic activities from 26th September 1999. Since then, it has been widely recognized for its excellent research and teaching capabilities. The graduates from the department are heavily recruited by both academia and industry of home and abroad. We are very proud of our graduates and their accomplishments; they are highly skilled IT professionals who pursue successful careers in a wide range of contexts in the competitive global labor market.

						</p>
						<p>
							As a student in the Department you will be exposed to high quality inspirational teaching and learning. The staff, passionate about developing and delivering teaching, stay at the forefront of the development of innovative teaching, learning and assessment methods and they consistently employ technology including learning technologies for both in class activities but also for learning activities outside the class boundaries as successful means of supporting students’ learning. The department also provides an outstanding research environment complemented by superior teaching for its students to flourish in.
						</p>
						<p>

							I invite you to visit rest of our website to find information about programs, achievements and research activities. Last but not the least, ours is a growing family. You are most welcome to be a part of it. The common recruitment procedure is initiated through public advertisement. Moreover, in special cases, recruitment is done through ad hoc basis. If you think you are enthusiastic, energetic, dynamic and passionate enough then don’t hesitate to drop me a CV.
						</p>
						
					</div>
					
					<div>

						<button type="button" onclick="loadDoc()">Full Committee</button>
						
						<br><br>
						<table id="demo"></table>

						<script>
						function loadDoc() {
						  var xhttp = new XMLHttpRequest();
						  xhttp.onreadystatechange = function() {
						    if (this.readyState == 4 && this.status == 200) {
						      myFunction(this);
						    }
						  };
						  xhttp.open("GET", "Committee.xml", true);
						  xhttp.send();
						}
						function myFunction(xml) {
						  var i;
						  var xmlDoc = xml.responseXML;
						  var table="<tr> <th>NAME</th> <th>ROLL</th> <th>BATCH</th> <th>DESIGNATION</th>  </tr>";
						  var x = xmlDoc.getElementsByTagName("MEMBER");
						  for (i = 0; i <x.length; i++) { 
						  	table += "<tr><td>" 
						   
						    table +=x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("ROLL")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("BATCH")[0].childNodes[0].nodeValue +
						    "</td><td>" +
						    x[i].getElementsByTagName("DESIGNATION")[0].childNodes[0].nodeValue +
						    "</td></tr>";

						  }
						  document.getElementById("demo").innerHTML = table;
						}

						</script>
						<br>
						
					</div>
					
					

				</div>
			</section>

<?php include 'footer.php'?>