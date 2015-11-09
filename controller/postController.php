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
}
