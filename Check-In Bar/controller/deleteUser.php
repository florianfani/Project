<?php
include_once '../database/databaseConnection.php';


$dbC = new DatabaseConnection;
$conn = $dbC->startConnection();

$id = $_GET['Id'];

$del = mysqli_query($conn,"DELETE FROM useri WHERE Id = '$id'");
if($del){
   mysqli_close($conn);
   // header("location:../view/dashboard.php");
    exit;
}
else{
    echo "Error deleting User!";
}







?>