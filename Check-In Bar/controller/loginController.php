<?php
include_once '../repository/userRepository.php';

if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){

        echo "Fill all Fields!";

    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];


        $userRepository = new UserRepository;

        $user = $userRepository->getUserByEmail($email,$password);

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
        header("location:../view/index.php");


        if(empty($user)){
            echo "Email or Password is Incorrect!";
        }
        // else{
            
        // }


    }
}






















?>