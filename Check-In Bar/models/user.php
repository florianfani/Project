<?php

class User{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $gender;
    private $birthday;
    private $tel;
    private $city;
    private $role;

    function __construct($id,$name,$surname,$email,$password,$gender,$birthday,$tel,$city,$role){
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->tel = $tel;
        $this->city = $city;
        $this->role = $role;

    }
    
    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getGender(){
        return $this->gender;
    }
    function getBirthday(){
        return $this->birthday;
    }
    function getTel(){
        return $this->tel;
    }
    function getCity(){
        return $this->city;
    }
    function getRole(){
        return $this->role;
    }

    function __toString(){
        return "User: ".$this->name." - ".$this->surname." - ".$this->email. " - ".$this->role;
    }


}
?>