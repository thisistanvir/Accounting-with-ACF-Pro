<?php

/**
 * This section displaying Testimonial Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


$homeTestimonial = get_field('home_testimonial', 'option');
?>


<section class="ftco-section testimony-section bg-light">
   <div class="overlay"></div>
   <div class="container">
      <?php if ($homeTestimonial) : ?>
         <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
               <span class="subheading"><?php echo $homeTestimonial['section_subtitle']; ?></span>
               <h2><?php echo $homeTestimonial['section_title']; ?></h2>
            </div>
         </div>
      <?php endif;


      $args = array(
         'posts_per_page' => -1,
         'post_type' => 'testimonials',
         'order' => 'DESC'
      );
      $loop = new WP_Query($args);

      if ($loop->have_posts()) :
      ?>
         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">
                  <?php

                  while ($loop->have_posts()) : $loop->the_post(); ?>
                     <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4"><?php echo the_field('description'); ?></p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(<?php echo esc_url(the_field('user_image')); ?>)"></div>
                                 <div class="pl-3">
                                    <p class="name"><?php the_title(); ?></p>
                                    <span class="position"><?php echo the_field('designation'); ?></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endwhile;
                  wp_reset_postdata(); ?>
               </div>
            </div>
         </div>
      <?php endif; ?>
   </div>
</section>