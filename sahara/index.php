<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SaharaTrip</title>
    <link rel="stylesheet" href="design.css">


</head>
    <div class="container">
        <?php include 'navbar.php'; ?>
            <div class="row">
                <div class="col">
                    <h1>Sahara</h1>
                    <p>Welcome! Search for the most appropriate tour for you.</p>
                    
                    <div class="button">Explore</div>
                </div>
                <div class="bar"></div>
                <div class="col">

                    <div class="card card1" onclick="redirect1()">
                        <h5>Merzouga: 3 days desert safari from Marrakech</h5>
                    </div>


                    <div class="card card2" onclick="redirect2()">
                        <h5>Quad Bike Tour: desert and palm groves of Marrakech</h5>

                    </div>


                    <div class="card card3" onclick="redirect3()">
                        <h5>Dakhla Bay: Catamaran Sailing Adventure a Dragon Island</h5>
                        
                    </div>


                    <div class="card card4" onclick="redirect4()">
                        <h5>Marrakech: Tour with Dune Buggy, Camel and SPA</h5>
                        
                    </div>
                </div>

            </div>
    </div>

<body>
    <script src="js/app.js"></script>
</body>
</html>