<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'classes/db.class.php';
include 'classes/editPost.class.php';
include 'classes/editPostContr.class.php';

    if(isset($_POST['submit'])){
        $postId=$_POST['postId'];
        $editPost=new EditContr($postId);
        $post=$editPost->getPostData();
        $postTitle=$post[1];
        $postContent=$post[2];
        echo "<form action='includes/editPost.inc.php' method='post'>";
        echo "<input type='hidden' name='postId' value='" . $postId . "'>";
        echo "<h1>Title:</h1>";
        echo "<input type='text' name='title' value='$postTitle'>";
        echo "<h1>Content:</h1>";
        echo "<textarea name='content' cols='30' rows='10'>$postContent</textarea>";
        echo "<button type='submit' name='submit'>Change</button>";
        echo "</form>";

    }
    

    ?>
    
    
</body>
</html>