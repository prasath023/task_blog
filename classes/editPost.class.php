<?php



class Edit extends Dbh{

    public function getPost($id){
        $sql="select * from posts where id=$id;";
        $res= $this->connect()->query($sql);
        
        return $res->fetch_row();
    }

    public function setPost($id,$title,$content){
        $content = "'" . $content . "'";
        $title = "'" . $title . "'";
        $sql="UPDATE posts SET title=$title, content=$content WHERE id=$id;";
        $res= $this->connect()->query($sql);
        
        return true;
    }

}