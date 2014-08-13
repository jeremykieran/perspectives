<ul>
  <?php if (have_posts() ): ?>
    <?php while (have_posts() ): the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </li>
    <?php endwhile; ?>
  <?php else: ?>
    <li>
      <a>Not found</a>
    </li>
  <?php endif; ?>
</ul>