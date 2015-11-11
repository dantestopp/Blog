<?php
/**
* Post Controller
*
* @author happyoniens
* @author coeci
*
*/
class postController{

  /**
  * Get all Posts from Database in Array
  * @return Array Array with all Posts
  */
  public function getAllPosts(){
    $sql = "SELECT * FROM post";
    $result = Flight::db()->query($sql);
    $posts = [];
    while($row = $result->fetch_assoc()){
      $posts[] = new post($row);
    }
    return $posts;
  }

  public function getPostWithId($post_id){
    $sql = "SELECT * FROM post WHERE id = '$post_id'";
    $result = Flight::db()->query($sql);
    //Todo: Better error handling
    if($result != false){
      return new post($result->fetch_assoc());
    }
  }
}
