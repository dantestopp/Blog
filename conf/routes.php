<?php
Flight::route("/",array('indexController','index'));

Flight::route("/post/@id",array('indexController','post'));
