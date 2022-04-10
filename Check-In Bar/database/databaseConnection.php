<?php 


class DatabaseConnection{
   
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "checkinbar";
    

    function startConnection(){
        if(!$conn = mysqli_connect($this->server, $this->username, $this->password, $this->database)){
        echo "Error!";
        return null;
    }
        else{
        // echo "Success";
         return $conn;
        }
    }

    

    // $sql = "INSERT INTO book VALUES ('AA100', 'Aurel', 'Berisha', 'aurel@hotmail.com', 'aurel123', 'Male', '07/05/1961', '049350944', 'Ferizaj')";

    // if(mysqli_query($conn,$sql)){
    //     echo "Query is executed successfuly!";
    // }
    // else{
    //     echo "Error!";
    // }

    
}

    // $db = new DatabaseConnection;
    // $db->startConnection();
?>