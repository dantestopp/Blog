<?php

class indexController{
  public function index(){
    Flight::util()->render("index");
  }
}
