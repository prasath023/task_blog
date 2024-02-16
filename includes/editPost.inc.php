
    <?php


    if(isset($_POST['submit'])){
        $postId=$_POST['postId'];
        $postTitle=$_POST['title'];
        $postContent=$_POST['content'];
        
        include '../classes/db.class.php';
        include '../classes/editPost.class.php';
        include '../classes/editPostContr.class.php';
        
        $setPost=new EditContr($postId);
        $setPost->setPostData($postTitle,$postContent);

        header("location: ../myPosts.php");

    }

    ?>
    
