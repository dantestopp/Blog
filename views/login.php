 <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
	<div class="panel panel-default" >
		<div class="panel-heading">
			<div class="panel-title text-center">Login</div>
		</div>  
		
		<div class="panel-body" >
			<form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php Flight::link('/login') ?>">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input id="email" type="email" class="form-control" name="emale" value="" placeholder="E-Mail">                                        
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password">
				</div>        
				<div class="row">
					<div class="col-sm-9 controls">
						<?php if(isset($error)):?>
							<div class="alert alert-danger" role="alert">E-Mail or password wrong!</div>
						<?php endif; ?>
					</div>
					<div class="col-sm-2 controls">
						<button type="submit" href="#" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> Login</button>                          
					</div>
				</div>
			</form>     
		</div>                     
	</div>  
</div>   