<?php

class indexController{
  public static function index(){
    Flight::util()->render("index");
  }
}
