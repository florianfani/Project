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
    <title>Dashboard</title>


    <style>
    
      .hide{
            display:none;
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
        <a class="nav-link"href="book.php">Book</a>
      </div>
      <div class="navbar-nav navbar-right">
      
      	<a class="nav-link" href="logout.php">Logout</a>
        
      </div>
    </div>
  </div>
</nav>


    



    <div class="dashContainer" style="width:25%; height:100%; border:1px solid black;background-color:lightgrey">
        <div class="dash" style="margin-bottom:450px; margin-top:400px">
          <br> 
            <a href="mngUser.php"><button style="width:475px;height:70px;color:#1c2d42;font-size:25px">Users</button></a>
            <br>
            <a href="mngBook.php"><button style="width:475px;height:70px;color:#1c2d42;font-size:25px">Bookings</button></a>
            <br>
        </div>

        
    </div>
    <br><br>

            


    </body>
</html>