<?php
Flight::route('GET /',['viewController','index']);

Flight::route('GET /post/@post_id',['viewController','viewPost']);

Flight::route('GET /create',['viewController','createPost']);

Flight::route('POST /create',['postController','createPost']);

Flight::route('GET /edit/@id',['viewController','editPost']);

Flight::route('POST /edit',['postController','editPost']);

Flight::route('GET /login',['viewController','login']);

Flight::route('POST /login',['authController','login']);

Flight::route('GET /logout',['authController','logout']);
