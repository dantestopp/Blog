<?php
Flight::route('/',['indexController','index']);

Flight::route('/post/@id',['indexController','post']);
