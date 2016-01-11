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
  public $password;

  function __construct($arr){
    $this->id = $arr['id'];
    $this->prename = $arr['prename'];
    $this->surname = $arr['surname'];
    $this->bio = $arr['bio'];
    $this->email = $arr['email'];
    $this->password = $arr['password'];
  }
  /**
  * Function to store a new User
  */
  public function store(){

  }
  /**
   * Combination of pre- and surname
   * @return String fullname
   */
  public function fullName(){
      return $this->prename.", ".$this->surname;
  }
}
