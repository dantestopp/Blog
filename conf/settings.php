<?php
Flight::path("model/");

Flight::path("controller/");

Flight::register('db','mysqli',array('localhost', 'root', '', 'blog'));

Flight::regitser("util","util");
