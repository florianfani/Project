<?php
include_once '../models/user.php';
include_once '../repository/userRepository.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
    empty($_POST['password']) || empty($_POST['gender']) || empty($_POST['birthday']) || empty($_POST['tel']) ||
    empty($_POST['city'])){
        
        echo "Fill all fields!";

    }

    else{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $tel = $_POST['tel'];
            $city = $_POST['city'];
            $id = rand(1,999).$name;


            $user = new User($id,$name,$surname,$email,$password,$gender,$birthday,$tel,$city);

            $userRepository = new UserRepository;

            $userRepository->insertUser($user);

    }
}




?>