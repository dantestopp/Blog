<?php
/**
* View Controller
*
* @author happyoniens
* @author coeci
*
*/

class viewController{

  public static function index(){
    $posts = new postController();
    $posts = $posts->getAllPosts();
    Flight::util()->render("index",["posts"=>$posts]);
  }

  public static function viewPost($id){
    $posts = new postController();
    $post = $posts->getPostWithId($id);
    Flight::util()->render("post",["post"=>$post]);
  }

  public static function createPost(){
    if(Flight::has('currentUser')){
      Flight::util()->render('postEditor');
    }else{
      Flight::redirect('/');
    }
  }

  public static function editPost($id){
    if(Flight::has('currentUser')){
      $post = Flight::posts()->getPostWithId($id);
      Flight::util()->render('postEditor',['post'=>$post]);
    }else{
      Flight::redirect('/');
    }
  }
  public static function login(){
    Flight::util()->render("login");
  }

  public static function author($id = null){
      if($id == null){
          $user = Flight::get('currentUser');
      }else{
          $user = Flight::users()->getUserWithId($id);
      }

      Flight::util()->render('profile',['user'=>$user]);


  }
}
