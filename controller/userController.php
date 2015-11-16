<?php
/**
* User Controller
*
* @author happyoniens
* @author coeci
*
*/

class userController{

    /**
    * Get User with Id
    * @param Int Id of User
    * @return User
    */
    public static function getUserWithId($id){
      $sql = "SELECT * FROM user WHERE id = '$id'";
      $result = Flight::db()->query($sql);
      if($result != false){
        return new user($result->fetch_assoc());
      }
    }

}
