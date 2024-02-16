<?php
session_start();
if(isset($_SESSION["user_id"])){
    include 'home.php';
}else{
    include 'home.php';
}
?>

