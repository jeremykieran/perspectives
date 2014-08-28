<?php /*Template Name: Festival Events */ ?>

<header class="page-header">
  <div class="row">
  	<h1>Festival Events</h1>
  </div>
</header>

<main class="row festival-events">
	<section class="large-3 column" style="padding-right:15px;">
		<h3 class="yellow">Pre-Festival</h3>
		<div class="content">
			<?php the_field('pre-festival'); ?>
		</div>
	</section>

	<section class="large-3 column" style="padding-left:15px;">
		<h3 class="red">Festival</h3>
		<div class="content">
			<?php the_field('festival'); ?>
		</div>
	</section>
</main>