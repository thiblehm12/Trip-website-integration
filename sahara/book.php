<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Booking</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="design.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
        <div class="navbar">
            <img src="images/logo.png" class="logo" onclick="redirect5()">
            <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                <div class="hamburger"><div></div></div>
                <div class="menu">
                  <div>
                    <div>
                      <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="informations.php">Informations</a></li>
                        <li><a href="contact.php">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            <img src="images/menu.png" class="menu-icon">
        
        </div>
        
        <form id="booking-form" class="booking-form" name="form1" method="post" action="">
            
            <div class="h1">Trip Reservation Form</div>
            
            <div id="form-content">
                <div class="group">
                    <label for="date-from">Date</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                

                
                
                
                <div class="group">
                    <label for="adults">Number of Person</label>
                    <div>
                        <select id="adults" name="adults" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div class="group">
                    <label for="adults">Country</label>
                    <div>
                        <select id="country" name="country" class="form-control">
                            <option value="1">Italy</option>
                            <option value="2">France</option>
                            <option value="3">United-States</option>
                            <option value="4">Lithuania</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="special-requirements">Questions</label>
                    <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Questions"></textarea></div>
                </div>
                
                <div class="group submit">
                    <label class="empty"></label>
                    <div><input name="submit" type="submit" value="Submit"/></div>
                </div>
                
            </div>
            
        </form>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>