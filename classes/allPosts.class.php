<?php

class AllPosts extends Dbh{

    public function getPosts(){
        $sql='select * from posts;';
        $res= $this->connect()->query($sql);
        return $res;
    }

}