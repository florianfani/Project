<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Check-in Bar - Log In</title>


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
        <a class="nav-link" href="book.php">Book</a>
      </div>
      <div class="navbar-nav navbar-right">
      	<a class="nav-link active" aria-current="page" href="#">Login</a>
        
      </div>
    </div>
  </div>
</nav>
<div id="drinkhero">
	<div id="drinktext">
		<h1 style="color:wheat">CHECK-IN BAR</h1>
		<p style="font-size:30px; color:wheat;"> Beers and Liquor  </p>
	</div>

<div class="login-container">

    <div>
      <main style="width: 100%; height: 100%;">
        <br>
        <br>
        


        

        <form id="form" style="width: 400px; background-color: white; text-align: center; border : 3px inset #1c2d42;">
          
            <img src="img/qemkin.jpg" style="width: 100px; height: 50px; margin-bottom: 10px;" alt="qemkin logo pic">
              <br> 
              

            <p>Log In</p>

            <div style="color:red" id="error"></div>

            <pre><input id="email" type="email" placeholder="Email" style="width: 250px; height: 25px;"></pre>
            <pre><input id="password" type="password" placeholder="Password" style="width: 250px; height: 25px;"></pre>
            <pre><input id="login" class="register-button" type="submit" value="Log In"></pre>

          </form>      
              

            <form id="form-reg" style="width: 400px;background-color: white; text-align: center; border : 3px inset #1c2d42;">
              <br>
              <p>Register</p>
              <div style="color:red" id="error-reg"></div>
            <pre><input id="name" name="name" type="text" placeholder="First Name" style="width: 250px; height: 25px;" ></pre>
            <pre><input id="surname" name="surname"  type="text" placeholder="Last Name" style="width: 250px; height: 25px;" ></pre>
            <pre><input id="reg-email" name="email" type="email" placeholder="Email" style="width: 250px; height: 25px;"></pre>
            <pre><input id="reg-password" name="password" type="password" placeholder="Password" style="width: 250px; height: 25px;"></pre>
            <pre><input id="reg-password-2" type="password" placeholder="Re-type Password" style="width: 250px; height: 25px;"></pre>

            <pre><input type="radio" name="gender" id="male"> <label for="male">Male</label> <input type="radio" name="gender" id="female"><label for="female">Female</label></pre>

            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" name="birthday">
            <br>
            <br>
            
            <label for="tel">Tel Number </label> <input type="tel" id="tel" name="tel"> <br><br>

         
           <pre><select style="width: 250px; height: 25px">
                <option value="">Select a City</option>
                <option value="Ferizaj">Ferizaj</option>
                <option value="Prishtine">Prishtine</option>
                <option value="Lipjan">Lipjan</option>
                <option value="Tuz">Tuz</option>
                <option value="Podgorice">Podgorice</option>
                <option value="Qellapek">Qellapek</option>

            </select></pre>

            
            <pre><input id="register" class="register-button" type="submit" value="Register" name="registerBtn"></pre>
            
        </form>


    </main>  

    </div>

</div>

            <script src="index.js">


            </script>


    </body>
</html>