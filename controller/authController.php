<?php

class authController{

  public currentUser = null;

  public function login(){
    $email = Flight::request()->data->email;
    $password = Flight::request()->data->password;

    $user = Flight::users()->getUserWithEmail($email);
    if($user == false){
      //Show error in Login View
    }else{
      if(password_verify($password, $user->password)){
        Flight::redirect("/");
      }else{
        //Show error in Login View
      }
    }
  }

}
