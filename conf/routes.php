<?php
Flight::route('/',['indexController','index']);

Flight::route('/post/@post_id',['indexController','post']);
