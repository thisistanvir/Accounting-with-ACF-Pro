<?php

/**
 * This section displaying Blog Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

$homeBlog = get_field('home_blog', 'option');
?>
<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading"><?php echo $homeBlog['section_subtitle']; ?></span>
            <h2><?php echo $homeBlog['section_title']; ?></h2>
         </div>
      </div>
      <div class="row d-flex">
         <?php
         if (have_posts()) :
            $args = [
               'posts_per_page' => 3,
               'post_type' => 'post',
               'order' => 'DESC'
            ];
            $blog = new WP_Query($args);
            while ($blog->have_posts()) : $blog->the_post();

               get_template_part('/template-parts/content', 'excerpt');
            endwhile;
            wp_reset_postdata();
         else : ?>
            <h2><?php esc_html_e('Nothing Found', 'accounting'); ?></h2>
         <?php endif; ?>
      </div>
   </div>
</section>