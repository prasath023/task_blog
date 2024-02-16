<?php


class SearchContr extends Search{

private $searchKey;


public function __construct($searchKey){
    $this->searchKey=$searchKey;
}
public function searchSpecificPost(){
    // die($this->searchKey);
   return $this->searchPost($this->searchKey);
}

}