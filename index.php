<?php
require_once("flight/Flight.php");

require_once("conf/config.php");

require_once("conf/settings.php");

session_start();

Flight::set('currentUser',isset($_SESSION['user'])?$_SESSION['user']:null);

require_once("conf/routes.php");


Flight::start();
