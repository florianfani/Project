<?php
include_once '../database/databaseConnection.php';
class BookRepository{
    private $connection="";


    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }   

    function insertBook($book){
        $conn = $this->connection->startConnection();


        $id = $book->getId();
        $name = $book->getName();
        $tel = $book->getTel();
        $area = $book->getArea();


        $sql = "INSERT INTO book VALUES ('$id', '$name', '$tel', '$area')";


        if(mysqli_query($conn,$sql)){
           // echo "Query is executed successfuly!";
        }
        else{
           // echo "Error!";
            }
        }


}

    // $br = new BookRepository;
    // $br->insertBook();
?>