<?php

class MyPosts extends Dbh{

    public function getPosts($uid){
        $sql="select * from posts where user_id=$uid;";
        $res= $this->connect()->query($sql);
        return $res;
    }

}