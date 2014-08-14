<?php /* Template Name: Landing */ ?>

<main class="landing">
<?php $films = Film::find(); if( $films->have_posts() ) : while( $films->have_posts() ): $films->the_post(); ?>
	<article class="film <?php the_field('avatar_color') ?>" data-film-id="<?php the_ID(); ?>">
		<?php if( get_field('avatar') ): ?>
			<img class="avatar" src="<?php the_field('avatar') ?>">
		<?php endif; ?>
		<?php if( get_field('custom') ): ?>
			<?php the_field('custom') ?>
		<?php endif; ?>
	</article>
	<div class="modal" data-modal-id="<?php the_ID(); ?>">
		<div class="still" style="background-image:url(<?php the_field('still') ?>);"></div>
		<div class="meta">
			<a class="modal-close">&times;</a>
			<h2><?php the_field('title') ?></h2>
			<p class="details">
				<?php $date = get_field('date'); echo date('n F'); ?>, <?php the_field('time') ?><br>
				<?php // $venue = get_field('venue'); echo $venue['address']; ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="button <?php the_field('avatar_color') ?>">Details</a>
		</div>
	</div> 
<?php endwhile; endif; ?>
</main>