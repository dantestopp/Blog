<?php

Flight::path("model/");

Flight::path("controller/");

Flight::register('db','mysqli',[$config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['databasename']]);

Flight::register("util","util");

Flight::set("flight.base_url",$config['web']['base_url']);

Flight::map('link',function($url){
  echo Flight::get('flight.base_url').$url;
});
