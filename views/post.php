<div class="row">
  <div class="blog-main">
      <div class="blog-post">
        <h1 class="blog-post-title"><?php echo $post->title; ?></h1>
        <p class="blog-post-meta"><time datetime="<?php echo $post->posted; ?>"><?php echo $post->posted; ?></time> by <a href="<?php Flight::link('/author/'.$post->getAuthor()->id); ?>"><?php echo $post->getAuthor()->fullName(); ?></a></p>
        <?php echo $post->content; ?>
      </div>
  </div>
</div>
