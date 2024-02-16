<?php

class AddPost extends Dbh{
    

    public function createPost($title,$content,$uid){
        // die($uid);
        $title="'".$title."'";
        $content="'".$content."'";
        $sql="insert into posts (title,content,user_id) values ($title,$content,$uid);";
        $this->connect()->query($sql);
    }
}