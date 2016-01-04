<div class="row">
  <div class="blog-header">
        <h1 class="blog-title">Blog Name</h1>
        <p class="lead blog-description">Blog Description</p>
  </div>
</div>
<div class="row">
  <div class="blog-main">
    <?php foreach($posts as $post): ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><a href="<?php Flight::link('/post/'.$post->id) ?>"><?php echo $post->title; ?></a></h2>
        <p class="blog-post-meta"><?php echo $post->posted; ?> by <a href="<?php Flight::link('/author/'.$post->user->id); ?>"><?php echo $post->user->fullName(); ?></a></p>
        <?php echo $post->getPreview(); ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
