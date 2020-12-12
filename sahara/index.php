<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SaharaTrip</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
    <div class="container">
        <?php include 'navbar.php'; ?>
            <div class="row">
                <div class="col">
                    <h1>Sahara</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet consectetur.</p>
                    <div class="button">Explore</div>
                </div>
                <div class="bar"></div>
                <div class="col">

                    <div class="card card1" onclick="redirect1()">
                        <h5>Western Desert</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>


                    <div class="card card2" onclick="redirect2()">
                        <h5>AI Bagawat</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>


                    <div class="card card3" onclick="redirect3()">
                        <h5>Pyramid Of Giza</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>


                    <div class="card card4" onclick="redirect4()">
                        <h5>Kalahari Desert</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>
    </div>

<body>
    <script src="app.js"></script>
</body>
</html>