<?php

class Book{

    private $id;
    private $name;
    private $tel;
    private $area;

    function __construct($id,$name,$tel,$area){
        $this->id = $id;
        $this->name = $name;
        $this->tel = $tel;
        $this->area = $area;

    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getTel(){
        return $this->tel;
    }
    function getArea(){
        return $this->area;
    }

}



?>