<?php
session_start();
if(isset($_SESSION['email'])){
    header("location:../view/index.php");
}
include_once '../repository/userRepository.php';

$chF = new UserRepository;
$emailPasswordError = "";

if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){

        echo "Fill all Fields!";

    }
    else{
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'User'){ 
            $_SESSION['email'] = $email; 
            $_SESSION['role'] = 'User';
            //header("location:../view/index.php");
        }elseif($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'Admin'){
            $_SESSION['email'] = $email;
            $_SESSION['role'] = 'Admin';
           // header("location:../view/dashboard.php");

        }
        else{
          echo $emailPasswordError="Email or Password is Incorrect!";

        }

        

        // $user = $userRepository->getUserByEmail($email,$password);

        // if(empty($user)){
        //     echo "Email or Password is Incorrect!";
        // }
        // else{
        //     session_start();
        // $_SESSION['email'] = $email;
        // $_SESSION['role'] = $role;
        // header("location:../view/index.php");
        // }


    }
}


// if(isset($_POST['loginbtn'])) {
//     if(empty($_POST['email']) || empty($_POST['password'])){
//         echo "Fill all Fields!";
//     }else{
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         if($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'user'){ 
//             $_SESSION['email'] = $email; 
//             $_SESSION['user'] = 'user';
//             echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/home.php%22); </script>';
//         }else if($chF->check_email($email) && $chF->check_password($password) && $chF->get_role($email) === 'admin'){
//             $_SESSION['email'] = $email; 
//             $_SESSION['admin'] = 'admin';
//             echo '<script> location.replace("http://localhost/InxhineriWeb-it-Projekti-/view/admin/posts.php%22); </script>';

//         }
//         else{
//             $emailPasswordError='Email ose fjalkalimi jan gabim!!';

//         }
//     }
// }






















?>