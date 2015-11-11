<?php
/**
* User Model
*
* @author happyoniens
* @author coeci
*
*/
class user{
  
  public $id;
  public $prename;
  public $surname;
  public $bio;
  public $email;

  function __construct($arr){
    $this->id = $arr['id'];
    $this->prename = $arr['prename'];
    $this->surname = $arr['surname'];
    $this->bio = $arr['bio'];
    $this->email = $arr['email'];
  }
  /**
  * Function to store a new User
  */
  public function store(){

  }
}
