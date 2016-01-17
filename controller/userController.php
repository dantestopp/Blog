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

    /**
     * Save properties of the user profile
     * @return [JSON] Success or error message
     */
    public static function saveProfile(){

        $currentUser = Flight::get('currentUser');

        $currentUser->bio = Flight::request()->data->bio;
        $currentUser->password = hash("sha256", Flight::request()->data->password);

        $result = $currentUser->update();
        
        if($result != false){
            $_SESSION['user'] = Flight::users()->getUserWithId(Flight::get('currentUser')->id);


            Flight::json(['success'=>true, 'user'=> $_SESSION['user']]);
        }else{
            Flight::json(['sucess' => false, "exception" => 'An error']);
        }
    }

}
