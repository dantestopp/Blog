<?php

class authController{

  public $currentUser = null;

  /**
   * Login with email and password
   */
  public static function login(){
    $email = Flight::request()->data->email;
    $password = Flight::request()->data->password;

    $user = Flight::users()->getUserWithEmail($email);
    if($user == false){
      Flight::util()->render('login',['error'=>'login']);
    }else{
      if(hash("sha256",$password) == $user->password){
        $_SESSION['user'] = $user;
        Flight::redirect("/");
      }else{
        Flight::util()->render('login',['error'=>'login']);
      }
    }
  }
  /**
   * Logout function
   * Destroy session und redirect to root
   */
  public static function logout(){
    unset($_SESSION['user']);
    Flight::redirect('/');
  }

}
