<?php



if(isset($_POST['submit'])){
$name=$_POST['uname'];
$password=$_POST['password'];
$confirmPassword=$_POST['cpassword'];
$email=$_POST['email'];

include '../classes/db.class.php';
include '../classes/signup.class.php';
include '../classes/signupContr.class.php';


$signup= new SignupContr($name,$password,$confirmPassword,$email);

$signup->signupUser();

header("location: ../loginForm.php");

}