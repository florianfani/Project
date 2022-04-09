<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Check-in Bar - Book</title>


    <style>
      #drinkhero{
        background-image: url("img/bar2.jpg");
        height: 530px;
      
      }
    </style>
  </head>
  <body>
    <div id="blla"><p></p></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/qemkin.jpg" width="150px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav navbar-center">
        <a class="nav-link"  href="index.php">Home</a>
        <a class="nav-link" href="drinks.php">Drinks</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link active" aria-current="page"href="#">Book</a>
      </div>
      <div class="navbar-nav navbar-right">
      	<a class="nav-link" href="login.php">Login</a>
        
      </div>
    </div>
  </div>
</nav>
<div id="drinkhero">
	<div id="drinktext">
		<h1 style="color:wheat">CHECK-IN BAR</h1>
		<p style="font-size:30px; color:wheat;"> Beers and Liquor  </p>
	</div>

    <br><br>



    <div class="bookContainer">
        <div class="book">
            <h2>Book a seat for a Rock Night Event</h2>
        </div>

        <div class="bookForm">

          <form action="book.php" method="post" style="width: 500px; background-color: white; text-align: center; border : 3px inset #1c2d42;">
          
            <img src="img/qemkin.jpg" style="width: 100px; height: 50px; margin-bottom: 10px;" alt="qemkin logo pic">
              <br> 
              

            <p>Book a Table</p>

            <div style="color:red" id="error"></div>

            <pre><input id="name" type="text" placeholder="Name" name="bname" style="width: 250px; height: 25px;"></pre>
            <pre><input id="tel" type="text" placeholder="Tel Number" name="btel" style="width: 250px; height: 25px;"></pre>
            <pre>
              <select name="area" id="areaSelect">
                <option name="area" value="#">Select Area</option>
                <option name="area" value="A">A</option>
                <option name="area" value="B">B</option>
                <option name="area" value="C">C</option>
                <option name="area" value="D">D</option>
              </select>
            </pre>
            <pre><input id="book" class="register-button" type="submit" value="Book Now!" name="bookBtn"></pre>
                <?php require_once '../controller/bookController.php'?> 
          </form> 
          
        </div>
    </div>
    <br><br>

            


    </body>
</html>