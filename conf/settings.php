<?php

Flight::path("model/");

Flight::path("controller/");

Flight::register('db','mysqli',[$config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['databasename']]);

Flight::register("util","util");
