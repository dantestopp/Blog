<form action="<?php Flight::link('/create'); ?>" method="POST">
    <div class="input-group">
      <span class="input-group-addon" id="title">Title</span>
      <input type="text" class="form-control" name="title" placeholder="Title" aria-describedby="title">
    </div>
    <br>
    <textarea name="content" id="content"></textarea>

<script>
$('#content').summernote({
     height: 500
});
</script>

<input type="submit" class="btn btn-primary">
</form>
