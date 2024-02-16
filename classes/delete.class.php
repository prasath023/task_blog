<?php



class DeleteData extends Dbh{

    public function deletePost($id){
        
        $sql="delete from posts where id=$id;";
        // die($sql);
        $this->connect()->query($sql);
        
        return true;
    }

}