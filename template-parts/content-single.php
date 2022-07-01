<?php

/**
 * The template for displaying all single posts content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
} ?>


<p>
   <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-fluid">
</p>
<h2 class="mb-3"><?php the_title(); ?></h2>

<?php the_content(); ?>

<div class="tag-widget post-tag-container mb-5 mt-5">
   <div class="tagcloud">
      <?php the_tags('', ' ', ''); ?>
   </div>
</div>
<div class="about-author d-flex p-4 bg-light">
   <?php
   $author_id = $post->post_author;
   $author_name = get_the_author_meta('display_name', $author_id);
   $author_description = get_the_author_meta('description', $author_id);
   $author_url = get_author_posts_url($author_id);
   $author_image = get_avatar_url($author_id);
   ?>
   <div class="bio mr-3">
      <img src="<?php echo $author_image; ?>" alt="Image placeholder" class=" mb-4">
   </div>
   <div class="desc">
      <h3><?php echo $author_name; ?></h3>
      <p><?php echo $author_description; ?></p>
   </div>
</div>
<div class="pt-5 mt-5">
   <div id="post_comments">
      <?php
      if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
         comments_template();
      }
      ?>
   </div>
</div>