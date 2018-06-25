<!DOCTYPE HTML>

<html>
	<head>
		<title>Moderators</title>
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
						<h2>Moderators</h2>
						<p>Hardware Acceleration Club of KUET</p>
						<marquee><a href="gallery.php">Click to View HACK Photo Gallery</a></marquee>
						
					</header>

					

					
					
					<div id="mar">
						<iframe width="390" height="345" src="uploads/hasemsir.jpg"></iframe>
						<button class="collapsible">Dr. M.M.A. Hashem</button>
						<div class="cont">
						  <p>Professor<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>
						<iframe width="390" height="345" src="uploads/mistymam.jpg"></iframe>
						<button class="collapsible">Mehanuma Tabassum Omar</button>
						<div class="cont">
						  <p>Assistant Professor<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>
						<iframe width="390" height="345" src="uploads/awalsir.jpg"></iframe>
						<button class="collapsible">Md. Abdul Awal</button>
						<div class="cont">
						  <p>Assistant Professor<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>
						<iframe width="390" height="345" src="uploads/shuvosir.jpg"></iframe>
						<button class="collapsible">Insanur Rahman</button>
						<div class="cont">
						  <p>Lecturer<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>
						<iframe width="390" height="345" src="uploads/shamimsir.jpg"></iframe>
						<button class="collapsible">Md. Shamimur Rahman</button>
						<div class="cont">
						  <p>Lecturer<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>
						<iframe width="390" height="345" src="uploads/azizsir.jpg"></iframe>
						<button class="collapsible">Abdul Aziz</button>
						<div class="cont">
						  <p>Lecturer<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						</div>

						<iframe width="390" height="345" src="uploads/akibsir.jpg"></iframe>
						<button class="collapsible">Shaikh Akib Shahriyar</button>
						<div class="cont">
						  <p>Lecturer<br>
						  Department of Computer Science & Engineering<br>
						  Khulna University of Engineering & Technology (KUET)<br>
						  Khulna -9203, Bangladesh. </p>
						
						
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
					
					
					

				</div>
			</section>

<?php include 'footer.php'?>