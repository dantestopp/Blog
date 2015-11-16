<?php
Flight::route('GET /',['viewController','index']);

Flight::route('GET /post/@post_id',['viewController','post']);

Flight::route('GET /login',['viewController','login']);

Flight::route('POST /login',['authController','login']);
