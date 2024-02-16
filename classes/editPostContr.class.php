<?php
class EditContr extends Edit{
private $id;

public function __construct($id){
    $this->id=$id;
}

public function getPostData(){
    return $this->getPost($this->id);
}

public function setPostData($title,$content){
    return $this->setPost($this->id,$title,$content);
}
}
