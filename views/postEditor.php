<textarea id="content">

</textarea>
<script>
$('#content').summernote();
<?php if(isset($post)): ?>
  $(".summernote").summernote("insertText",'<?php echo $post->content ?>');
<?php endif; ?>
</script>
