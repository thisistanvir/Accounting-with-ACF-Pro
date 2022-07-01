<?php

/**
 * The template for displaying better comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */


if (!function_exists('better_comments')) :
  function better_comments($comment, $args, $depth)
  {
?>
    <li class="comment">

      <?php if ($comment->comment_approved == '0') : ?>
        <em><?php esc_html_e('Your comment is awaiting moderation.', 'accounting') ?></em>
        <br />
      <?php endif; ?>

      <div class="vcard bio" id="li-comment-<?php comment_ID() ?>">
        <?php echo get_avatar($comment); ?>
      </div>
      <div class="comment-body">
        <h3><?php echo get_comment_author(); ?></h3>
        <div class="meta"><?php echo get_comment_date(); ?></div>

        <?php comment_text(); ?>


        <p><?php comment_reply_link(array_merge(
              $args,
              array(
                'reply_text' => __('<span class="reply">Reply</span>', 'accounting'),
                'depth'      => $depth,
                'max_depth'  => $args['max_depth'],
              )
            )); ?></p>
        <?php edit_comment_link(); ?>
      </div>

    </li>
<?php
  }
endif;
