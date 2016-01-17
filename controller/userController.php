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

    public static function getUserWithEmail($email){
      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = Flight::db()->query($sql);
      if($result != false){
        return new user($result->fetch_assoc());
      }else {
        return false;
      }
    }

    public static function saveBio(){

        $currentUser = Flight::get('currentUser');

        $currentUser->bio = Flight::request()->data->bio;

        $result = $currentUser->update();

        if($result != false){
            $_SESSION['user'] = Flight::users()->getUserWithId(Flight::get('currentUser')->id);


            Flight::json(['success'=>true, 'user'=> $_SESSION['user']]);
        }else{
            Flight::json(['sucess' => false, "exception" => 'An error']);
        }
    }

}
