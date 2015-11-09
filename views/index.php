<h1>Hello World</h1>
<ul>
<?php foreach($posts as $post): ?>
  <li><?php echo $post->title; ?><?php echo $post->getPreview(); ?></li>
<?php endforeach; ?>
</ul>
