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
				url: "<?php Flight::link("/saveprofile"); ?>?bio",
				method: 'POST',
				data: {
					bio: $("#bio-edit").val()
				}
			}).success(function(d){
				if(d.success == true){
					$("#bio").html(nl2br($("#bio-edit").hide().val())).show();
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

		function nl2br (str, is_xhtml) {
		    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
		    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
		}

		$("#savePassword").click(function(){

			$.ajax({
				url: "<?php Flight::link("/saveprofile"); ?>?password",
				method: 'POST',
				data: {
					passwordold: 	$("#passwordold").val(),
					passwordnew1:  $("#passwordnew1").val(),
					passwordnew2: 	$("#passwordnew2").val()
				}
			}).success(function(data){
				if(data.success == true){
					$("#passwordalert").text("Success").removeClass("alert-danger").addClass("alert-success").show();
					$("#passwordold").val('');
					$("#passwordnew1").val('');
					$("#passwordnew2").val('');
				}else{
					$("#passwordold").val('');
					$("#passwordnew1").val('');
					$("#passwordnew2").val('');
					$("#passwordalert").text(data.exception).removeClass("alert-success").addClass("alert-danger").show();
				}
			});
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
		<?php if(Flight::has('currentUser') && Flight::get("currentUser")->id == $user->id): ?>
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
			<h3>Joined: <time datetime="<?php echo $user->created;?>"><?php echo $user->created;?></time></h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
			<p id="bio"><?php echo $user->bio; ?></p>
			<?php if(Flight::has('currentUser') && Flight::get("currentUser")->id == $user->id): ?>
				<textarea id="bio-edit" style="display:none"></textarea>
				<button id="updateBio" type="button" class="btn btn-success">Update</button>
				<button id="saveBio" type="button" class="btn btn-success" style="display:none">Save</button>
				<button id="cancelBio" type="button" class="btn btn-danger" style="display:none">Cancel</button>
			<?php endif; ?>
        </div>
		<?php if(Flight::has('currentUser') && Flight::get("currentUser")->id == $user->id): ?>
	        <div class="tab-pane fade in" id="tab3">
				  <div id="passwordalert" style="display:none" class="alert alert-danger" role="alert"></div>
		          <h3>Change Password:</h3>
				  <div class="input-group">
					  <span class="input-group-addon" id="label-oldpassword">Old Password</span>
					  <input type="password" class="form-control" id="passwordold" placeholder="Old Password" aria-describedby="label-oldpassword">
				  </div>
				  <br>
				  <div class="input-group">
					  <span class="input-group-addon" id="label-new1password">New Password</span>
					  <input type="password" class="form-control" id="passwordnew1" placeholder="New Password" aria-describedby="label-new1password">
				  </div>
				  <br>
				  <div class="input-group">
					  <span class="input-group-addon" id="label-new2password">Repeat Password</span>
					  <input type="password" class="form-control" id="passwordnew2" placeholder="Repeat Password" aria-describedby="label-new2password">
				  </div>
				  <br>
				  <div class="input-group">
				  	<button id="savePassword" type="button" class="btn btn-success">Save</button>
			  	  </div>
	        </div>
		<?php endif; ?>
      </div>
    </div>
</div>
