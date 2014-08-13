<?php // If not page, comment allowed, and comment supported
if(!is_page() && comments_open() && post_type_supports(get_post_type(), "comments") ): ?>

  <?php if(have_comments() ): ?>
    <h2><?php comments_number(); ?></h2>

    <ul>
      <?php foreach($comments as $comment): ?>
        <li>
          <?php comment_text(); ?>
          
          <cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></cite>

          <?php if ($comment->comment_approved == "0") : ?>
            <p>Your comment is awaiting approval</p>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php comment_form(); ?>

<?php endif; ?>
