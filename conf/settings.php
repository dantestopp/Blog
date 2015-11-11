<?php
Flight::path("model/");

Flight::path("controller/");

Flight::register('db','mysqli',['localhost', 'root', '', 'blog']);

Flight::register("util","util");
