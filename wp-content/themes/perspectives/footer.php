<footer class="basement">
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