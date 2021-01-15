<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
    <link rel="stylesheet" href="pages.css">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="col">
            <h1>Marrakech:</h1> <h2>Tour with Dune Buggy, Camel and SPA</h2>
            <p>Give yourself a unique experience during an unforgettable holiday in Marrakech. Indulge in a thrilling dune buggy ride, camel ride in the desert and then relax in the SPA in the Medina.</p>
            <div class="button" onclick="redirect6()">Book</div>
        </div>
		<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
	<div class="mySlides fade slide1">
		<div class="numbertext">1 / 3</div>
		<img src="images/MERZOUGA.jpg" style="width:400px">
		
	</div>

	<div class="mySlides fade slide2">
		<div class="numbertext">2 / 3</div>
		<img src="images/QUADBIKETOUR.jpg" style="width:400px">

	</div>

	<div class="mySlides fade slide3">
		<div class="numbertext">3 / 3</div>
		<img src="images/DAKHLABAY.jpg" style="width:400px">
	
	</div>

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