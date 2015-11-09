<?php

class indexController{
  public static function index(){
    $posts = new postController();
    $posts = $posts->getAllPosts();
    Flight::util()->render("index",array("posts"=>$posts));
  }

  public static function post($id){
    $posts = new postController();
    $post = $posts->getPostWithId($id);
    Flight::util()->render("post",array("post"=>$post));
  }
}
