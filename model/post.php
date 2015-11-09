<?php

class post{
  public $id;
  public $user;
  public $title;
  public $content;
  public $posted;

  function __construct($arr){
    $this->id = $arr['id'];
    $this->user = $arr['user'];
    $this->title = $arr['title'];
    $this->content = $arr['content'];
    $this->posted = $arr['posted'];
  }
  /**
  * Function to store a new Post
  */
  function store(){

  }
}
