<?php

/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header(); ?>


<!-- Breadcrumb -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/bg_2.jpg'); ?>');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end">
         <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_html__('Home', 'accounting'); ?> <i class="fa fa-arrow-right"></i></a></span> <span> <?php single_post_title(); ?></span></p>
            <h1 class="mb-0 bread"><?php single_post_title(); ?></h1>
         </div>
      </div>
   </div>
</section>

<!-- Blog Area -->
<?php if (have_posts()) : ?>

   <section class="ftco-section">
      <div class="container">
         <div class="row d-flex">

            <?php while (have_posts()) : the_post();

               get_template_part('/template-parts/content', 'excerpt');

            endwhile;
            wp_reset_postdata(); ?>

         </div>
         <div class="row mt-5">
            <div class="col text-center">
               <div class="block-27">
                  <!-- Post Pagination -->
                  <?php the_posts_pagination(
                     [
                        'screen_reader_text' => ' ',
                        'prev_text' => '<span class="fa fa-angle-left"></span>',
                        'next_text' => '<span class="fa fa-angle-right"></span>',
                        'class' => 'pagination justify-content-center'
                     ]
                  );
                  ?>
               </div>
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