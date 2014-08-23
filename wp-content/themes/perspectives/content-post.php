<main <?php post_class(); ?>>
<?php if(have_posts() ): while (have_posts() ) : the_post(); ?>
<article class="film-single">
  <header class="page-header">
  	<div class="row">
  		<h1 data-animate="fadein"><?php the_field('title'); ?></h1>
  		<p data-animate="fadein" class="meta"><?php the_field('meta'); ?></p>
  		<figure><img data-animate="fadein" src="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url ?>"></figure>
  	</div>
  </header>
  
  <section class="row content">
  	<div class="large-4 column synopsis">
	  	<h2 data-animate="fadein">Synopsis</h2>
	  	<p data-animate="fadein"><?php the_field('synopsis'); ?></p>
  	</div>
  	<aside class="large-2 column sidebar">
	  	<div class="screening">
	  		<h3 data-animate="fadein-left">Screening</h3>
  			<!-- <label>Date</label> -->
  			<p class="detail" data-animate="fadein">
	  			<strong>Date: </strong>
	  			<?php the_field('date'); ?> 2014
  			</p>
  		
  			<!-- <label>Time</label> -->
  			<p class="detail" data-animate="fadein"><strong>Time: </strong><?php the_field('time'); ?></p>
	  		
	  		<!-- <label>Venue</label> -->
	  		<p class="detail" data-animate="fadein"><strong>Venue: </strong><?php the_field('location') ?></p>
	  	</div>
	  	<div class="cta hide" data-animate="fadein-up">
  			<a href="#" class="big button">Get Your Tickets Now</a>
  		</div>
  		
  		<div class="cta hide" data-animate="fadein-up">
  			<a href="#" class="big button">Festival Pass</a>
  		</div>
	  	<div class="schedule">
	  		<h3 data-animate="fadein-left">Schedule</h3>
	  			<div class="show" data-animate="fadein">
	  				<div class="lefty">
	  					<label>Thursday</label>
		  				<p>7:30PM</p>
		  				<label>Friday</label>
		  				<p>7:30PM</p>
		  				<label>Saturday</label>
		  				<p>1:30PM</p>
		  				<p>4:30PM</p>
		  				<p>7:30PM</p>
		  				<label>Sunday</label>
		  				<p>1:30PM</p>
		  				<p>4:30PM</p>
	  				</div>
	  				<div class="righty">
	  					<label>Thursday</label>
		  				<p>Short Term 12</p>
		  				<label>Friday</label>
		  				<p>Salaam Bombay!</p>
		  				<label>Saturday</label>
		  				<p>Walkabout</p>
		  				<p>Suzhou River</p>
		  				<p>Hedwig and the Angry Inch</p>
		  				<label>Sunday</label>
		  				<p>Sin Nombre</p>
		  				<p>Ali: Fear Eats the Soul</p>
	  				</div>
	  			</div>
	  	</div>
  	</aside>
  </section>
  
</article>
<?php endwhile; endif; ?>
</main>