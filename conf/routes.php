<?php
Flight::route('GET /',['viewController','index']);

Flight::route('GET /post/@post_id',['viewController','viewPost']);

Flight::route('GET /create',['viewController','createPost']);

Flight::route('POST /create',['postController','createPost']);

Flight::route('GET /profile',['viewController','author']);

Flight::route('GET /author/@user_id',['viewController','author']);

Flight::route('GET /login',['viewController','login']);

Flight::route('POST /login',['authController','login']);

Flight::route('GET /logout',['authController','logout']);

Flight::route('POST /saveprofile',['userController','saveProfile']);
