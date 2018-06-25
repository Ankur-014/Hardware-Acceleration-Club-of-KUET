<!DOCTYPE HTML>

<html>
	<head>
		<title>Invention</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<style>
	* {
	    box-sizing: border-box;
	}

	body {
	    margin: 0;
	    font-family: Arial;
	    font-size: 17px;
	}
	.collapsible {
    
    color: red;
    cursor: pointer;
    padding: 6px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
	}

	.active, .collapsible:hover {
	    background-color: #555;
	}
	.cont {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
	}
	.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
	}
	.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
	}

	.tooltip .tooltiptext::after {
	    content: "";
	    position: absolute;
	    top: 100%;
	    left: 50%;
	    margin-left: -5px;
	    border-width: 5px;
	    border-style: solid;
	    border-color: #555 transparent transparent transparent;
	}

	.tooltip:hover .tooltiptext {
	    visibility: visible;
	    opacity: 1;
	}

	#myVideo {

	    position: relative;
	    right: 0;
	    bottom: 0;
	    min-width: 100%; 
	    min-height: 100%;
	}

	.content {
		text-align: center;
	    position: relative;
	    bottom: 0;
	    background: rgba(0, 0, 0, 0.5);
	    color: #f1f1f1;
	    width: 100%;
	    padding: 20px;
	}
	#wrapper {
	  /* for visualization purposes */
	  text-align: center;
	}
	#yourdiv {
	   /* for visualization purposes */
	  display: inline-block;
	}

	#myBtn {
	    width: 200px;
	    font-size: 18px;
	    padding: 10px;
	    border: none;
	    background: #000;
	    color: #fff;
	    cursor: pointer;
	}

	#myBtn:hover {
	    background: #ddd;
	    color: black;
	}
	#mar{
		margin: 65px;
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
						<h2>HACK Invention</h2>
						<p>Hardware Acceleration Club of KUET</p>
						<marquee><a href="gallery.php">Click to View HACK Photo Gallery</a></marquee>
					</header>

					
					<div id="wrapper">
						<div id="yourdiv">
							<div class="content">
								<video autoplay muted loop id="myVideo">
								  <source src="video/Voice Controlled Robot - MRoBoT - YouTube.MP4" type="video/mp4">
								  Your browser does not support HTML5 video.
								</video>
							  <h1>Voice Controlled Robot</h1>
							  <p></p>
							  <button id="myBtn" onclick="myFunction()">Pause</button>
							</div>
						</div>
					</div>

					<script>
					var video = document.getElementById("myVideo");
					var btn = document.getElementById("myBtn");

					function myFunction() {
					  if (video.paused) {
					    video.play();
					    btn.innerHTML = "Pause";
					  } else {
					    video.pause();
					    btn.innerHTML = "Play";
					  }
					}
					</script>
					
					
					<div id="mar">
						<h4>
							<div class="tooltip">HACK has developed some Robots like-
							  <span class="tooltiptext">SKIM-H, M ROBOT, Multi ROBOT, Wayfarer, Fast Line Tracer Robot</span>
							</div>
						</h4>
						<button class="collapsible">SKIM-H , first intelligent ROBOT in Bangladesh</button>
						<div class="cont">
						  <p>Intelligent robots have a range of sensors attached to them as well as their own powerful onboard processors, and significant memory capacity. All of which enables them to reproduce the capacities of the human senses.</p>
						</div>
						<button class="collapsible">M ROBOT, a voice controlled ROBOT.</button>
						<div class="cont">
						  <p>The integration of control unit with Bluetooth device is done to capture and read the voice commands. The robotic vehicle then operates as per the command received via android application. For this 8051 microcontroller is integrated in the system which makes it possible to operate the vehicle via android application.</p>
						</div>
						<button class="collapsible">Multi ROBOT, two robot can communicate with each other and can make a map of an area.</button>
						<div class="cont">
						  <p>Principles of autonomous formation driving and stabilization into a desired shape of the group are designed within Multi-robot Systems group. Our research is focused on mobile robot coordination in environment with dynamic obstacles, on splitting and coupling of teams and on trajectory planning for the formations.</p>
						</div>
						<button class="collapsible">Wayfarer, a garbage man ROBOT.</button>
						<div class="cont">
						  <p>Volvo's release on the matter suggests the purpose behind ROAR is a system that collects garbage “without waking the sleeping families and without heavy lifting for the refuse truck's driver,” but there's little evidence yet that humanoid robots or quieter or more graceful than actual humans.</p>
						</div>
						<button class="collapsible">Fast Line Tracer Robot</button>
						<div class="cont">
						  <p>Line follower is an autonomous robot which follows either black line in white are or white line in black area. Robot must be able to detect particular line and keep following it.</p>
						</div>
						
						
						<script>
							var coll = document.getElementsByClassName("collapsible");
							var i;

							for (i = 0; i < coll.length; i++) {
							    coll[i].addEventListener("click", function() {
							        this.classList.toggle("active");
							        var content = this.nextElementSibling;
							        if (content.style.display === "block") {
							            content.style.display = "none";
							        } else {
							            content.style.display = "block";
							        }
							    });
							}
						</script>
						
						
						
					</div>
					
					<div id="mar">
						<iframe width="390" height="345" src="https://www.youtube.com/embed/85L1xCKgsWM"></iframe>
						<iframe width="390" height="345" src="https://www.youtube.com/embed/iNa6NW8YiK0"></iframe>
						<iframe width="390" height="345" src="https://www.youtube.com/embed/QrSCwfo3JrQ"></iframe>
					</div>
					

				</div>
			</section>

<?php include 'footer.php'?>