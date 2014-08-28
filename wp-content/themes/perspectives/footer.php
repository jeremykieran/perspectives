<footer class="basement">
	<div class="row">
		<div class="large-2 column">
			<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php img(); ?>/perspectives-film-festival-2014-logo.png" width="100"></a>
		</div>
		<div class="large-2 column">
			<p class="copy">&copy; Perspectives Film Festival 2014</p>
		</div>
		<div class="large-2 column text-right">
			<a href="#" class="button film-yellow">Download Brochure</a>
		</div>
	</div>
</footer>

<!-- JAVASCRIPT LIBRARY -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
  // Fallback if Google's one doesn't load
  if (!window.jQuery) {
    document.write("<script src='<?php js(); ?>/vendor/jquery.min.js'><\/script>");
  }
</script>
<script src="<?php js(); ?>/vendor/fastclick.min.js"></script>
<script src="<?php js(); ?>/app.js"></script>

<?php wp_footer(); ?>
</body>
</html>