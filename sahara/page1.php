<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="pages.css">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="col">
            <h1>Merzouga: </h1> <h2>3 days desert safari from Marrakech</h2>
            <p>Experience the Maroccon desert on a 3-days safari from Marrakech to Merzouga. Spend the night at the Erg Chebbi dunes in a Bedouin Camp. Take a camel ride to watch the sunset and the sunrise. See the Ouarzazate kasbah and more.</p>
            <div class="button" onclick="redirect6()">Book</div>
        </div>
		

        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
            <div class="mySlides fade slide1">
                <div class="numbertext">1 / 3</div>
                <img src="images/DAKHLABAY.jpg" style="width:400px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade slide2">
                <div class="numbertext">2 / 3</div>
                <img src="images/MARRAKECHTOUR.jpg" style="width:400px">
                <div class="text"></div>
            </div>

            <div class="mySlides fade slide3">
                <div class="numbertext">3 / 3</div>
                <img src="images/QUADBIKETOUR.jpg" style="width:400px">
                <div class="text"></div>
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