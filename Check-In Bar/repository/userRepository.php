<?php
include_once '../database/databaseConnection.php';
class UserRepository{

    private $connection="";

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
        $conn = $this->connection->startConnection();


        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $gender = $user->getGender();
        $birthday = $user->getBirthday();
        $tel = $user->getTel();
        $city = $user->getCity();
          
        $sql = "INSERT INTO useri VALUES ('$id', '$name', '$surname', '$email', '$password', '$gender', '$birthday', '$tel', '$city')";

         if(mysqli_query($conn,$sql)){
            echo "Query is executed successfuly!";
            }
             else{
                echo "Error!";
         }
    }


}
    $ur = new UserRepository;
    $ur->insertUser();
?>