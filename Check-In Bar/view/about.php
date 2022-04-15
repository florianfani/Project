<?php
session_start();
$hide="";
if(!isset($_SESSION['email'])){
    header("location:login.php");
}
else{
    if(isset($_SESSION['role'])){
      $role = $_SESSION['role'];
      if($role == 'User'){
        //header("location:about.php");
        $hide = "hide";
      }
    }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Check-in Bar - About Us</title>

    <style>
      #drinkhero{
        background-image: url("img/bar1.jpg");
        height: 530px;
      
      }
      .hide{
            display:none;
          }
    </style>



  </head>
  <body>
    <div id="blla"></div>
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
        <a class="nav-link active" aria-current="page" href="#">About</a>
        <a class="nav-link" href="book.php">Book</a>
      </div>
      <div class="navbar-nav navbar-right">
      <a class="nav-link <?php echo $hide ?>"   href="dashboard.php">Dashboard</a>
      	<a class="nav-link" href="logout.php">Logout</a>
        
      </div>
    </div>
  </div>
</nav>
<div id="drinkhero">
	<div id="drinktext">
		<h1 style="color:white">CHECK-IN BAR</h1>
		<p style="font-size:30px; color:wheat ;"> Beers and Liquor  </p>
	</div>

</div>
<div class="meh">
	<h3>Who Are We?</h3>
    <?php 
   
     echo "Role is: ".$_SESSION['role'];
    
    ?>
</div>
  



 
  <div class="container1">
    
    <div>
	<pre style="color:wheat; font-size: 16px;">Check-In Bar is a Bar in Downtown Ferizaj.
Known first as Relax Bar, it was opened in June 2011.
Check-in Bar is widely known in Kosovo for Live Rock Night Events that
take place almost every week. We have the most respectful staff, that are
going to serve you with the best manners possible, in a proffesional way.
We are more than passionate for the service we provide!
    </pre>
      <img src="img/qemkin.jpg">
    </div>
  </div>
 

  


 </body>
</html>