<?php
include_once '../database/databaseConnection.php';

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard-Users</title>
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


    



    <div class="dashContainer" style="width:25%; height:100%; border:1px solid black;background-color:lightgrey; display:flex">
        <div class="dash" style="margin-bottom:450px; margin-top:400px">
          <br> 
            <a href="mngUser.php"><button style="width:475px;height:70px;color:#1c2d42;font-size:25px">Users</button></a>
            <br>
            <a href="mngBook.php"><button style="width:475px;height:70px;color:#1c2d42;font-size:25px">Bookings</button></a>
            <br>
        </div>

        <div class="userContainer">
         
         <div>
             <div style="margin-left:250px; margin-top:300px; width:500px">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Name</th>
                             <th scope="col">Surname</th>
                             <th scope="col">Email</th>
                             <th scope="col">Password</th>
                             <th scope="col">Gender</th>
                             <th scope="col">Birthday</th>
                             <th scope="col">Tel</th>
                             <th scope="col">City</th>
                             <th scope="col">Role</th>
                             <th scope="col">Delete</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                         $dbC = new DatabaseConnection;
                         $conn = $dbC->startConnection();
                         $select_user = "SELECT * FROM useri";
                         $result = mysqli_query($conn,$select_user);

                         while($row = mysqli_fetch_assoc($result)){ ?>

                         <tr>
                             <th valign="middle" scope="row"><?php echo $row["Id"];?></th>
                             <td valign="middle"><?php echo $row["Name"];?></td>
                             <td valign="middle"><?php echo $row["Surname"];?></td>
                             <td valign="middle"><?php echo $row["Email"];?></td>
                             <td valign="middle"><?php echo $row["Password"];?></td>
                             <td valign="middle"><?php echo $row["Gender"];?></td>
                             <td valign="middle"><?php echo $row["Birthday"];?></td>
                             <td valign="middle"><?php echo $row["Tel"];?></td>
                             <td valign="middle"><?php echo $row["City"];?></td>
                             <td valign="middle"><?php echo $row["Role"];?></td>
                             <td valign="middle"><a href="../controller/deleteUser.php" id="<?php echo $row["Email"];?>" class="delete-user button" onclick="return confirm('Are you sure you want to delete this User')"><button style="border:none; background-color:#79253d;color:lightgray">Delete</button></a></td>                            
                         </tr>
                                  
                        <?php }?>
                     </tbody>
                 </table>
             </div>
         </div>

    </div>

        
    </div>
    <br><br>


    
       
</body>
</html>


