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
  public static function getAllPosts(){
    $sql = "SELECT * FROM post ORDER BY posted DESC";
    $result = Flight::db()->query($sql);
    $posts = [];
    while($row = $result->fetch_assoc()){
      $posts[] = new post($row);
    }
    return $posts;
  }
  /**
  * Gets Post with given Id
  * @param Int Id of searched post
  * @return post Post with the given Id
  * @todo Better error handling
  */
  public static function getPostWithId($post_id){
    $sql = "SELECT * FROM post WHERE id = '$post_id'";
    $result = Flight::db()->query($sql);
    //Todo: Better error handling
    if($result != false){
      return new post($result->fetch_assoc());
    }
  }
}
