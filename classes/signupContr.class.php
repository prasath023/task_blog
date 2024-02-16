<?php


class SignupContr extends Signup{

private $name;
private $password;
private $confirmPassword;
private $email;

public function __construct($name,$password,$confirmPassword,$email){
    $this->name=$name;
    $this->password=$password;
    $this->confirmPassword=$confirmPassword;
    $this->email=$email;
}
public function signupUser(){
    $this->setUser($this->name,$this->password,$this->email);
}

public function matchedUser(){
    $this->checkUser($this->name,$this->email);
}
}