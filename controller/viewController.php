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

  public static function post($id){
    $posts = new postController();
    $post = $posts->getPostWithId($id);
    Flight::util()->render("post",["post"=>$post]);
  }

}
