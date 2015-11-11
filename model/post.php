<?php
/**
* Post Model
*
* @author happyoniens
* @author coeci
*
*/
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
  * Get a short Preview of the Postcontent
  * @return String First 100 Characters of Postcontent
  */
  function getPreview(){
    return substr($this->content,0,100);
  }
  /**
  * Function to store a new Post
  */
  function store(){

  }
}
