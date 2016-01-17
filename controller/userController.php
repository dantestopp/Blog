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

        if(isset(Flight::request()->query->bio)){
            $currentUser->bio = Flight::request()->data->bio;
        }else if(isset(Flight::request()->query->password)){
            if(!isset(Flight::request()->data->passwordold) || !isset(Flight::request()->data->passwordnew1) || !isset(Flight::request()->data->passwordnew2)){
                Flight::json(['success' => false, 'exception' => 'Empty fields']);
            }

            if($currentUser->password === hash("sha256", Flight::request()->data->passwordold)){
                if(Flight::request()->data->passwordnew1 == Flight::request()->data->passwordnew2){
                    $currentUser->password = hash("sha256", Flight::request()->data->passwordnew1);
                }else{
                    Flight::json(['success' => false, 'exception' => 'New passwords are not the same']);
                }
            }else{
                Flight::json(['success' => false, 'exception' => 'Old password is not correct ']);
            }
        }

        $result = $currentUser->update();

        if($result != false){
            $_SESSION['user'] = Flight::users()->getUserWithId(Flight::get('currentUser')->id);


            Flight::json(['success' => true]);
        }else{
            Flight::json(['sucess' => false, 'exception' => 'An error']);
        }
    }

}
