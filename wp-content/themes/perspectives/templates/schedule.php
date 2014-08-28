<?php /* Template Name: Schedule */ ?>
<main style="background:#eae2df;">
	<header class="page-header">
  	<div class="row">
  		<h1>Schedule</h1>
  	</div>
	</header>
	<section class="schedule row">
	<div class="large-6 column">
		<ul class="tile-4 small-tile-1">
			<li class="day">
				<div class="day-container">
				<h3>Thursday</h3>
				<h3>16 OCT</h3>
				<h4>GV Vivocity</h4>
				<?php 
				$args = array(
					'post_type'		=> array('film', 'workshop'),
					'meta_key'	=> 'date',
					'meta_value' => '16 October'
				);

				$wp_query = new WP_Query( $args );

				while( $wp_query->have_posts() ) {
					$wp_query->the_post();
				?>

				<a href="<?php the_permalink(); ?>" alt="<?php the_field('title'); ?>">
					<article class="event" style="margin-bottom:0">
						<div class="<?php the_field('avatar_color') ?>">
							<img src="<?php the_field('avatar') ?>">
						</div>
						<p class="title"><?php the_field('title'); ?></p>
						<p><?php the_field('time'); ?></p>
						<?php if( get_field('subtitle') ): ?>
							<p><em><?php the_field('subtitle') ?></em></p>
						<?php endif; ?>
					</article>
				</a>

				<?php } endwhie; wp_reset_query(); ?>
				</div>
			</li>
			<li class="day">
				<div class="day-container">
				<h3>Friday</h3>
				<h3>17 OCT</h3>
				<h4>GV Vivocity</h4>
				<?php 
				$args = array(
					'post_type'		=> array('film', 'workshop'),
					'meta_key'	=> 'date',
					'meta_value' => '17 October'
				);

				$wp_query = new WP_Query( $args );

				while( $wp_query->have_posts() ) {
					$wp_query->the_post();
				?>

				<a href="<?php the_permalink(); ?>" alt="<?php the_field('title'); ?>">
				<article class="event" style="margin-bottom:0">
					<div class="<?php the_field('avatar_color') ?>">
						<img src="<?php the_field('avatar') ?>">
					</div>
					<p class="title"><?php the_field('title'); ?></p>
					<p><?php the_field('time'); ?></p>
					<?php if( get_field('subtitle') ): ?>
						<p><em><?php the_field('subtitle') ?></em></p>
					<?php endif; ?>
				</article>
				</a>

				<?php } endwhie; wp_reset_query(); ?>
				</div>
			</li>
			<li class="day">
				<div class="day-container">
				<h3>Saturday</h3>
				<h3>18 OCT</h3>
				<h4>NMS</h4>
				<?php 
				$args = array(
					'post_type'		=> array('film', 'workshop'),
					'meta_query' => array(
				        array(
				            'key' => 'chron_order',
				            'value' => array(3,6),
				            'compare' => 'BETWEEN',
				            'type' => 'NUMERIC'
				        )
				    ),
				    'meta_key' => 'chron_order',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC' 
				);

				$wp_query = new WP_Query( $args );

				while( $wp_query->have_posts() ) {
					$wp_query->the_post();
				?>

				<a href="<?php the_permalink(); ?>" alt="<?php the_field('title'); ?>">
				<article class="event">
					<div class="<?php the_field('avatar_color') ?>">
						<img src="<?php the_field('avatar') ?>">
					</div>
					<p class="title"><?php the_field('title'); ?></p>
					<p><?php the_field('time'); ?></p>
					<?php if( get_field('subtitle') ): ?>
							<p><em><?php the_field('subtitle') ?></em></p>
						<?php endif; ?>
				</article>
				</a>

				<?php } endwhie; wp_reset_query(); ?>
				</div>
			</li>
			<li class="day">
				<div class="day-container">
				<h3>Sunday</h3>
				<h3>19 OCT</h3>
				<h4>NMS</h4>
				<?php 
				$args = array(
					'post_type'		=> array('film', 'workshop'),
					'meta_query' => array(
				        array(
				            'key' => 'chron_order',
				            'value' => array(7,9),
				            'compare' => 'BETWEEN',
				            'type' => 'NUMERIC'
				        )
				    ),
				    'meta_key' => 'chron_order',
				    'orderby' => 'meta_value_num',
				    'order' => 'ASC' 
				);

				$wp_query = new WP_Query( $args );

				while( $wp_query->have_posts() ) {
					$wp_query->the_post();
				?>

				<a href="<?php the_permalink(); ?>" alt="<?php the_field('title'); ?>">
				<article class="event">
					<div class="<?php the_field('avatar_color') ?>">
						<img src="<?php the_field('avatar') ?>">
					</div>
					<p class="title"><?php the_field('title'); ?></p>
					<p><?php the_field('time'); ?></p>
					<?php if( get_field('subtitle') ): ?>
						<p><em><?php the_field('subtitle') ?></em></p>
					<?php endif; ?>
				</article>
				</a>

				<?php } endwhie; wp_reset_query(); ?>
				</div>
			</li>
		</ul>
	</div>
	</section>

	<header class="page-header">
  	<div class="row">
  		<h1>Ticketing</h1>
  	</div>
	</header>
	<section class="ticketing row">
		<div class="large-3 columns">
			<h3 class="red">Films</h3>
			<?php the_field('films_copy'); ?>
		</div>
		<div class="large-3 columns">
			<h3 class="yellow">Workshops</h3>
			<?php the_field('workshops_copy'); ?>
		</div>
	</section>
</main>