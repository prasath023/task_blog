<?php
class LoginContr extends Login{
private $password;
private $email;

public function __construct($password,$email){
    $this->password=$password;
    $this->email=$email;
}

public function loginUser(){
    $this->getUser($this->email,$this->password);
}
}
?>