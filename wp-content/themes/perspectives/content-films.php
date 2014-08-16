<main>
<?php if(have_films() ): while (have_films() ) : the_film(); ?>
<article class="film-single">
  <header>
  <h1><?php the_title(); ?></h1>
  </header>
    <figure>
      <?php the_post_thumbnail(); ?>
    </figure>

  <?php the_content(); ?>


</article>
<?php endwhile; endif; ?>
</main>