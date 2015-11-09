<?php

class postController{
  public function getAllPosts(){
    $sql = "SELECT * FROM post";
    $result = Flight::db()->query($sql);
    $posts = array();
    while($row = $result->fetch_assoc()){
      $posts[] = new post($row);
    }
    return $posts;
  }

  public function getPostWithId($id){
    $sql = "SELECT * FROM post WHERE id = '$id'";
    $result = Flight::db()->query($sql);
    if($result != false){
      return new post($result->fetch_assoc());
    }
  }
}
