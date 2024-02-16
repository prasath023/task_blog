<?php
session_start();
    include 'classes/db.class.php';
    include 'classes/allPosts.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .header{
            display:flex;
            justify-content: space-around;
            align-items: center;
        }
        .searchButton{
            border-radius: 20px;
            border:none;
            height:25px;
            width:70px;
            background: lightslategrey;
            cursor: pointer;
            color:white;
        }
        .searchInput{
            border:none;
            height:25px;
            border-radius: 20px;
            background: lightsteelblue;
        }
        .loginButton{
            cursor: pointer;
            color: black;
            text-decoration: none;
        }
        .logoutButton{
            cursor: pointer;
            color: black;
            text-decoration: none;
            margin:0 10px 0 10px;
        }
        .userComp{
            display:flex;
            justify-content: space-around;
            align-items: center;
            margin-left: -50px;
        }
        .myPosts{
            margin:0 10px 0 10px;
            text-decoration: none;
            cursor: pointer;
            color:lightslategrey;

        }
        .createPosts{
            margin:0 40px 0 10px;
            text-decoration: none;
            cursor: pointer;
            color:lightslategrey;
            

        }

        .posts{
            width:80vw;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin: auto;
            font-size: small;
        }
        .post{
            padding: 5px 40px 5px 40px;
            border: 1px solid black;
            border-radius: 10px;
            margin-top: 40px;
            width:30vw;
            margin-bottom: 10px;
        }
        .post h4{
            cursor: pointer;
            margin-bottom: -5px;


        }
    </style>
</head>
<body>
    <div>
    <div class="header"> 
        <div>
            <h2>Bloggz</h2>
        </div>
        <div class="searchComp">
            <form action="includes/search.inc.php" method="post">
                <input class="searchInput" type="text" name="search">
                <button class="searchButton" type="submit" name="submit">search</button>
            </form>
        </div>
        <div class="userComp">
            
            <?php
            if(isset($_SESSION['user_name'])){
               echo "<a class='myPosts' href='myPosts.php'>My posts</a>";
               echo "<a class='createPosts' href='addPost.php'>create post</a>";
               echo "<h6>".$_SESSION['user_name']."</h6>";
               echo "<h6 class='logoutButton'>logout</h6>";
            }else{
               echo "<a class='loginButton' href='loginForm.php'>login</a>";
            }
            
            ?>
            

        </div>
    </div>
    <div class="posts">
    <?php

    $allPosts= new AllPosts();
    $posts=$allPosts->getPosts();
    foreach ($posts as $post) {
        echo "<div class='post'>";
        echo "<h4>" . substr($post['title'], 0, 50)."...". "</h4>";
        echo "<p>" .substr($post['content'], 0, 100)."...". "</p>";
        echo "</div>";

    }
    ?>


    </div>
    </div>
</body>
</html>