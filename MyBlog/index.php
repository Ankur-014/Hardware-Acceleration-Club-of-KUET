<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HACK</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Asif">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.html">
			<div class="logo">
				<img src="images/uipi.jpg" alt="Logo"/>
				<h2>Hardware Acceleration Club of KUET</h2>
				<p>A Connecting Place of Kuetians </p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="search.php?page=1" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
			<div class ="login clear">
				<form action="login.php" >
					<input type="submit" value="Admin"/>
				</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>	
		<li>
		<a href="contact.html">Contact</a>
		<ul>
		<li><a href="instructor.html">Instructors</a></li>
		<li><a href="members.html">Members</a></li>
		</ul>
		</li>
		<li><a href="online.html">Online Order</a></li>
		<li><a href="about.html">Noticeboard</a></li>
	</ul>
</div>
<div class="slidersection templete clear">
        <div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="This is slider one Title or Description" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="This is slider Two Title or Description" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider three Title or Description" /></a>
            <a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="This is slider four Title or Description" /></a>
        </div>

</div>


<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		
			<div class="samepost clear">
				<h2><a href="">First Post</a></h2>
				<h4>26 mar 2018, By <a href="#">Ankur</a></h4>
				 <a href="#"><img src="images/uipi.jpg" alt="post image"/></a>
				<p>Hack is the club of kuet for hardware related development.</p>
				<div class="readmore clear">
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="samepost clear">
				<h2><a href="">First Post</a></h2>
				<h4>26 mar 2018, By <a href="#">Ankur</a></h4>
				 <a href="#"><img src="images/uipi.jpg" alt="post image"/></a>
				<p>Hack is the club of kuet for hardware related development.</p>
				<div class="readmore clear">
					<a href="#">Read More</a>
				</div>
			</div>

		</div>
		
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
						<li><a href="">Arduino</a></li>
						<li><a href="">Rapsberry Pi</a></li>
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest Notice</h2>
				<?php
				$query = "select * from tbl_notice order by time desc limit 5";
				$notice = $db->select($query);
				while($result = $notice->fetch_assoc()){
				?>
					<div class="popular clear">
						<h3><a href=""><?php echo $result['title']; ?></a></h3>
						<a href=""><img src="images/uipi.jpg" alt="post image"/></a>
						<p><?php echo $result['post']; ?></p>
						<p><?php echo $result['time']; ?></p>						
					</div>
					
				<?php } ?>	
					
			</div>
			
		</div>
	
</div>

<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <p>&copy; Copyright Salim Shadman Ankur</p>
</div>

<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>




