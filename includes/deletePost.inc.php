<?php


    if(isset($_POST['submit'])){
        $postId=$_POST['postId'];


        include '../classes/db.class.php';
        include '../classes/delete.class.php';
        include '../classes/deleteContr.class.php';

        // die($postId);
 
        $deletePost=new DeleteContr($postId);
        $deletePost->deletePostData();

        header("location: ../myPosts.php");

    }