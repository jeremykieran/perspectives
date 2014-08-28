<?php /*Template Name: About */ ?>

<header class="page-header">
  <div class="row">
  	<h1>About</h1>
  </div>
</header>

<main <?php post_class(); ?>>
	<section class="row about-copy">
		<div class="large-4 column">
			<?php the_field('about') ?>
		</div>

		<aside class="large-2 column">
			<?php the_field('sidebar') ?>
		</aside>
	</section>

	<section class="about-section festival-team hide">
		<header>
			<h2 class="row">Festival Team</h2>
		</header>
		<div class="row photos">
			<ul class="tile-4 small-tile-2">
			<?php if( have_rows('team') ) : while ( have_rows('team') ) : the_row(); ?>
				<li>
					<img src="<?php the_sub_field('photo'); ?>" alt="Perspectives Film Festival 2014 - Team - <?php the_sub_field('role'); ?>">
					<p><?php the_sub_field('role'); ?></p>
				</li>
			<?php endwhile; endif; ?>
			</ul>
		</div>
	</section>
  
</main>