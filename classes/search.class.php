<?php

class Search extends Dbh{

    public function searchPost($searchKey){
        // die("sbxbvhb");
           $searchKey="'%".$searchKey."%'";
           $sql="select * from posts where title like $searchKey;";
           $res=$this->connect()->query($sql);
           return $res;
    }

}
?>