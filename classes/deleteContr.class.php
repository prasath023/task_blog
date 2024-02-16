<?php
class DeleteContr extends DeleteData{
private $id;

public function __construct($id){
    $this->id=$id;
}

public function deletePostData(){
    return $this->deletePost($this->id);
}
}