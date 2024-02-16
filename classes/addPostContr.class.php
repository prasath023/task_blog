<?php

class AddPostContr extends AddPost{
    private $title;
    private $content;
    private $uid;

    public function __construct($title,$content,$uid)
    {
        $this->title=$title;
        $this->content=$content;
        $this->uid=$uid;
    }

    public function addPost(){
        $this->createPost($this->title,$this->content,$this->uid);
    }
}

