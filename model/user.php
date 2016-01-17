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
   * Update user
   * @return Mysqliresult Result from query
   */
  public function update(){

      $sql = "UPDATE user SET prename = '$this->prename', surname = '$this->surname', bio = '".nl2br($this->bio)."', email = '$this->email', password = '$this->password' WHERE id = '$this->id'";

      $result = Flight::db()->query($sql);

      return $result;

  }
  
  /**
   * Combination of pre- and surname
   * @return String fullname
   */
  public function fullName(){
      return $this->prename.", ".$this->surname;
  }
}
