<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="pages.css">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="col">
            <h1>Quad Bike Tour:</h1> <h2>desert and palm groves of Marrakech</h2>
            <p>Explore the wild desert, wild palm groves, rural groves and Berber villages outside of Marrakech on a half-day tour on a 4x4 Quad Bike. Drive through the palm groves and desert landscapes of Marrakech on this faboulous 3-hour adventure.</p>
            <div class="button" onclick="redirect6()">Book</div>
        </div>
		<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
	<div class="mySlides fade slide1">
		<div class="numbertext">1 / 3</div>
		<img src="images/DAKHLABAY.jpg" style="width:400px">
		
	</div>

	<div class="mySlides fade slide2">
		<div class="numbertext">2 / 3</div>
		<img src="images/MARRAKECHTOUR.jpg" style="width:400px">
	
	</div>

	<div class="mySlides fade slide3">
		<div class="numbertext">3 / 3</div>
		<img src="images/MERZOUGA.jpg" style="width:400px">
		
	</div>

	<!-- Next and previous buttons -->
		<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

	<!-- The dots/circles -->
	<div class="dots" >
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>

	</div>
	</div>
	
	<script src="js/app.js"></script>²
</body>
</html>