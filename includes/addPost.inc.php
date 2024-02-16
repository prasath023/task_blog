<?php
session_start();


if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $uid=$_SESSION['user_id'];

include '../classes/db.class.php';
include '../classes/addPost.class.php';
include '../classes/addPostContr.class.php';

    
    if(isset($_SESSION["user_id"])){
        $createPost=new AddPostContr($title,$content,$uid);
        $createPost->addPost();
    }else{
        header("location: ../loginForm.php");
    }
   

}