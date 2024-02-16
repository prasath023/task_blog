
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
<?php
include '../classes/db.class.php';
include '../classes/search.class.php';
include '../classes/searchContr.class.php';




if(isset($_POST['submit'])){
    $searchKey=$_POST['search'];
   

    $search=new SearchContr($searchKey);
    
    
    $posts=$search->searchSpecificPost();
    // die($search->searchSpecificPost());

    if(isset($posts)){
        foreach ($posts as $post) {
            echo "<div>";
            echo "<h4>" . $post['title'] . "</h4>";
            echo "<p>" . $post['content'] . "</p>";
            echo "</div>";
        
        }
    }else{
        echo "<h4>No post found</h4>";
    
    }

}


?>
</body>
</html>
