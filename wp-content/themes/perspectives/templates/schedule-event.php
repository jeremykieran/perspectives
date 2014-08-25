<a href="<?php the_permalink(); ?>" alt="<?php the_field('title'); ?>">
	<article class="event">
		<div class="<?php the_field('avatar_color') ?>">
			<img src="<?php the_field('avatar') ?>">
		</div>
		<p class="title"><?php the_field('title'); ?></p>
		<p><?php the_field('time'); ?></p>
	</article>
</a>