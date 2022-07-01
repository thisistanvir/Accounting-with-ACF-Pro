<?php

/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php
  // You can start editing here -- including this comment!
  if (have_comments()) :
    $accounting_comment_count = get_comments_number();
  ?>
    <!-- <h2 class="comments-title">
			<h5><?php echo $accounting_comment_count . ($accounting_comment_count === '1' ? ' comment' : ' comments'); ?></h5>
		</h2> -->
    <!-- .comments-title -->

    <?php the_comments_navigation(); ?>

    <!-- Comments List -->
    <ul class="comment-list">
      <?php
      wp_list_comments(
        array(
          'style'      => 'ul',
          'short_ping' => true,
          'callback' => 'better_comments'
        )
      );
      ?>
    </ul>
    <!-- end: comments list -->

    <?php
    the_comments_navigation();

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open()) :
    ?>
      <p class="no-comments"><?php esc_html_e('Comments are closed.', 'accounting'); ?></p>
  <?php
    endif;

  endif; // Check for have_comments().

  comment_form([
    'fields' => [
      'author' => '
            <div class="form-group">
              <label for="author">Name *</label>
              <input type="text" name="author" id="author" class="form-control" required="required">
            </div>',

      'email' => '
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" class="form-control" required="required">
              </div>',

      'url' => '
              <div class="form-group">
                <label for="url">Website</label>
                <input type="text" name="url" id="url" class="form-control">
              </div>'
    ],
    'comment_field' => '
              <div class="form-group">
                <label for="comment">Message *</label>
                <textarea name="comment" id="comment" cols="30" rows="7" class="form-control" required="required"></textarea>
              </div>',
    'submit_field'         => '<div class="form-group">%1$s %2$s</div>',
    'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn py-3 px-4 btn-primary %3$s">%4$s</button>',
    'title_reply' => '<div class="title mb-5"><h4>Leave a Comment</h4></div>',

    'class_form' => 'form-contact comment_form comment-form',
    'comment_notes_before' => sprintf(
      '<p class="comment-notes">%s%s</p> <div class="p-5 bg-light">',
      sprintf('<span id="email-notes">%s</span>', __('Your email address will not be published.', 'accounting')),
      sprintf('<span class="required-field-message">%s <span class="required" >%s</span></span>', __('Required fields are marked', 'accounting'), __('*', 'accounting'))
    ),
    'comment_notes_after'  => '</div>'

  ]);
  ?>

</div><!-- #comments -->