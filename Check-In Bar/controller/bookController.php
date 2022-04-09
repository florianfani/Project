<?php
include_once '../models/book.php';
include_once '../repository/bookRepository.php';

if(isset($_POST['bookBtn'])){
    if(empty($_POST['bname']) || empty($_POST['btel']) || empty($_POST['area'])){
        
        echo "Fill all Fields!";

    }
    else{

        $name = $_POST['bname'];
        $tel = $_POST['btel'];
        $area = $_POST['area'];
        $id = rand(1,999).$name;

        $book = new Book($id,$name,$tel,$area);

        $bookRepository = new BookRepository;

        $bookRepository->insertBook($book);

    }
}

?>