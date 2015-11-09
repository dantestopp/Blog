<?php

class indexController{
  public function index(){
    $posts = new postController();
    $posts = $posts->getAllPosts();
    Flight::util()->render("index",array("posts"=>$posts));
  }
}
