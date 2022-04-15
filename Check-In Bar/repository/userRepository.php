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
        $role = $user->getRole();
          
        $sql = "INSERT INTO useri VALUES ('$id', '$name', '$surname', '$email', '$password', '$gender', '$birthday', '$tel', '$city', '$role')";

         if(mysqli_query($conn,$sql)){
           // echo "Query is executed successfuly!";
            }
             else{
         //       echo "Error!";
         }
    }


    function deleteUser($user){
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
        $role = $user->getRole();
          
        $sql = "DELETE FROM useri WHERE ('$id', '$name', '$surname', '$email', '$password', '$gender', '$birthday', '$tel', '$city', '$role')";

         if(mysqli_query($conn,$sql)){
           // echo "Query is executed successfuly!";
            }
             else{
         //       echo "Error!";
         }
    }


    function getUserByEmail($email,$password){
        $conn = $this->connection->startConnection();


        $sql = "SELECT * FROM useri WHERE Email = '$email' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            return $result;
        }
        else{
            return null;
        }
    }

    // function checkRole($email){
    //     $conn = $this->connection->startConnection();


    //     $sql = "SELECT Role FROM useri WHERE Email = '$email'";

    //     if($statement = $conn->query($sql)){
    //         $result = $statement->fetch_row();
    //         return $result;
    //     }
    //     else{
    //         return null;
    //     }
    // }

    function checkRegister($email){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM useri WHERE Email = '$email'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            return $result;
        }
        else{
            return null;
        }

    }

    function check_email($email){
        $dbC = new DatabaseConnection;
        $conn = $dbC->startConnection();
        $select_email = "SELECT * FROM useri WHERE Email = '$email'";
        $result = mysqli_query($conn, $select_email);
        if(mysqli_num_rows($result) > 0){
            echo '';
            return true;

        }else{

            return false;
        }
    }
    function check_password($password){
        $dbC = new DatabaseConnection;
        $conn = $dbC->startConnection();
        $select_password = "SELECT * FROM useri WHERE Password = '$password'";
        $result = mysqli_query($conn, $select_password);
        if(mysqli_num_rows($result) > 0){
            echo '';
            return true;

        }else{

            return false;
        }
    }
    function get_role($email){
        $dbC = new DatabaseConnection;
        $conn = $dbC->startConnection();
        $select_role = "SELECT Role FROM useri where Email = '$email'";
        $result = mysqli_query($conn, $select_role);
        $row = mysqli_fetch_row($result);
        return $row[0];
    }

}
    // $ur = new UserRepository;
    // $ur->insertUser();
?>