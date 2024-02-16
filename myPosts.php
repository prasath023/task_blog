<?php
session_start();
    include 'classes/db.class.php';
    include 'classes/myPosts.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My posts</title>
</head>
<body>
    <div>
    <div>
        <div>
            <h2>Bloggz</h2>
        </div>
        <div>
            
            <?php
            if(isset($_SESSION['user_name'])){
               echo "<a href='/'>Home</a>";
               echo "<a href='addPost.php'>create post</a>";
               echo "<h6>".$_SESSION['user_name']."</h6>";
               echo "<h6>logout</h6>";
            }else{
               echo "<a href='loginForm.php'>login</a>";
            }
            
            ?>
            

        </div>
    </div>
    <div>
    <?php

    $myPosts= new MyPosts();
    $posts=$myPosts->getPosts($_SESSION['user_id']);
    foreach ($posts as $post) {
        echo "<div>";
        echo "<h4>" . $post['title'] . "</h4>";
        echo "<p>" . $post['content'] . "</p>";

        echo "<form  action='editPost.php'  method='post'>";
        echo "<input type='hidden' name='postId' value='" . $post['id'] . "'>";
        echo "<button type='submit' name='submit'>Edit</button>";
        echo "</form>";

        echo "<form action='includes/deletePost.inc.php' method='post' >";
        echo "<input type='hidden' name='postId' value='" . $post['id'] . "'>";
        echo "<button type='submit' name='submit'>Delete</button>";
        echo "</form>";

        echo "</div>";
        
    }
    ?>
    </div>
    </div>
</body>
</html>