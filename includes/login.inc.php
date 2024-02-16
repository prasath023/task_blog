<?php



if(isset($_POST['submit'])){
$password=$_POST['password'];
$email=$_POST['email'];

include '../classes/db.class.php';
include '../classes/login.class.php';
include '../classes/loginContr.class.php';


$login= new LoginContr($password,$email);

$login->loginUser();

header("location: ../index.php");



}