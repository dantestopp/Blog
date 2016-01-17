<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
			$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
			$(this).removeClass("btn-default").addClass("btn-primary");
		});

		$("#updateBio").click(function(){
			$("#bio-edit").text($("#bio").hide().text()).show().width("90%").height("100px");
			$("#tab2 button").toggle();
		});

		$("#saveBio").click(function(){
			$("#tab2 button").toggle();
			$.ajax({
				url: "<?php Flight::link("/savebio"); ?>",
				method: 'POST',
				data: {
					bio: $("#bio-edit").text()
				}
			}).success(function(d){
				if(d.success == true){
					$("#bio").text($("#bio-edit").hide().val()).show();
				}else{
					alert(d.exception);
				}

			}).error(function(err){
				alert(err);
			});
		});

		$("#cancelBio").click(function(){
			$("#bio").show();
			$("#bio-edit").hide();
			$("#tab2 button").toggle();
		});
	});
</script>

<div class="">
	<h1>Author</h1>
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/g/100/100/">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $user->fullName(); ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                <div class="hidden-xs">Information</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                <div class="hidden-xs">Bio</div>
            </button>
        </div>
		<?php if(Flight::get("currentUser")->id == $user->id): ?>
	        <div class="btn-group" role="group">
	            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
	                <div class="hidden-xs">Password</div>
	            </button>
	        </div>
		<?php endif; ?>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
			<h3>Name: <?php echo $user->fullName(); ?></h3><br>
			<a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
        </div>
        <div class="tab-pane fade in" id="tab2">
			<p id="bio"><?php echo $user->bio; ?></p>
			<textarea id="bio-edit" style="display:none"></textarea>
			<button id="updateBio" type="button" class="btn btn-success">Update</button>
			<button id="saveBio" type="button" class="btn btn-success" style="display:none">Save</button>
			<button id="cancelBio" type="button" class="btn btn-danger" style="display:none">Cancel</button>
        </div>
		<?php if(Flight::get("currentUser")->id == $user->id): ?>
	        <div class="tab-pane fade in" id="tab3">
	          <h3>Password</h3>
	        </div>
		<?php endif; ?>
      </div>
    </div>
</div>
