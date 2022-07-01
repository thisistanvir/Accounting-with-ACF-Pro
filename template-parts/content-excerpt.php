<?php

/**
 * Template part for displaying the post excerpt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

?>

<div class="col-md-4 d-flex ftco-animate">
   <div <?php post_class('blog-entry align-self-stretch'); ?> id="post-<?php the_ID(); ?>">
      <a href="<?php the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
      </a>
      <div class="text p-4">
         <div class="meta mb-2">
            <div><?php the_time('F j, Y') ?></div>
            <div><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
            <div class="meta-chat"><span class="fa fa-comment"></span> <?php echo get_comments_number(); ?></div>
         </div>
         <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div>
   </div>
</div>