<?php if(have_posts() ): while (have_posts() ) : the_post(); ?>
  
  <h1><?php the_title(); ?></h1>

  <?php if(has_post_thumbnail() ): ?>
    <figure>
      <?php the_post_thumbnail(); ?>
    </figure>
  <?php endif; ?>

  <?php the_content(); ?>

  <?php comments_template(); ?>

<?php endwhile; endif; ?>