<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Breadcrumb Section -->
<?php get_template_part('/template-parts/content', 'breadcrumb'); ?>

<!-- Blog Details -->

<?php if (have_posts()) : ?>
   <section class="ftco-section ftco-degree-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 ftco-animate">
               <?php

               if (have_posts()) :
                  get_template_part('/template-parts/content', 'single');

               else : ?>
                  <h2><?php esc_html_e('Nothing Found', 'accounting'); ?></h2>
               <?php endif; ?>

            </div>
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
               <?php get_sidebar(); ?>
            </div>
         </div>
      </div>
   </section>
<?php else : ?>
   <h2><?php esc_html_e('Nothing Found', 'accounting'); ?></h2>
<?php endif; ?>


<!-- CTA Section -->
<?php get_template_part('/template-parts/section/section', 'cta'); ?>

<?php get_footer(); ?>