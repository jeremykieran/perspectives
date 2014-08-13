<?php
  $posts = Post::find();
?>

<div class="row">
  <div class="large-6 column large-centered">
    <?php if($posts->have_posts() ): while($posts->have_posts() ): $posts->the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; endif; ?>
  </div>
</div>