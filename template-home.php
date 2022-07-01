<?php

/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();



?>

<!-- start: Slider -->
<?php
$args = array(
   'posts_per_page' => -1,
   'post_type' => 'sliders',
   'order' => 'DESC'
);
$loop = new WP_Query($args);

if ($loop->have_posts()) :
?>
   <div class="hero-wrap">
      <div class="home-slider owl-carousel">
         <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="slider-item" style="background-image:url(<?php echo esc_url(the_post_thumbnail_url()); ?>);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="row no-gutters slider-text align-items-center justify-content-center">
                     <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                           <h2><?php echo the_field('slide_subtitle'); ?></h2>
                           <h1 class="mb-4"><?php echo the_title(); ?></h1>
                           <p><a href="<?php echo esc_url(the_field('button_link')); ?>" class="btn btn-white"><?php echo the_field('button_text'); ?></a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile;
         wp_reset_postdata(); ?>
      </div>
   </div>
<?php endif;  ?>
<!-- end: Slider -->

<!-- start: About -->
<?php get_template_part('/template-parts/section/section', 'about'); ?>
<!-- end: About -->

<!-- start: Services -->
<?php get_template_part('/template-parts/section/section', 'services'); ?>
<!-- end: Services -->

<!-- start: Counter -->
<?php get_template_part('/template-parts/section/section', 'counter'); ?>
<!-- end: Counter -->

<!-- start: Testimonial -->
<?php get_template_part('/template-parts/section/section', 'testimonial'); ?>
<!-- end: Testimonial -->

<!-- start: FAQs -->
<?php get_template_part('/template-parts/section/section', 'faq'); ?>
<!-- end: FAQs -->

<!-- start: Blog -->
<?php get_template_part('/template-parts/section/section', 'blog'); ?>
<!-- end: Blog -->

<!-- start: CTA -->
<?php get_template_part('/template-parts/section/section', 'cta'); ?>
<!-- end: CTA -->

<!-- start: Pricing -->
<?php get_template_part('/template-parts/section/section', 'pricing'); ?>
<!-- end: Pricing -->


<?php get_footer(); ?>