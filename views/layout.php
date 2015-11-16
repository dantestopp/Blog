<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="<?php Flight::link('/public/main.css') ?>" rel="stylesheet">
    <link href="<?php Flight::link('/public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  </head>
  <body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php Flight::link('/') ?>">Blog</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
		  <?php if(Flight::has('currentUser')): ?>
			<li><a href="<?php Flight::link('/create') ?>">New Post</a></li>
			<li><a href="<?php Flight::link('/profile') ?>">Profile</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<p class="navbar-text">Signed in as <?php echo Flight::get('currentUser')->prename." ".Flight::get('currentUser')->surname ?></p>
			<li><a href="<?php Flight::link('/profile') ?>">Logout</a></li>
		  </ul>
		  <?php endif; ?>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <div class="container">
      <?php echo $body_content; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php Flight::link('/public/bootstrap/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
