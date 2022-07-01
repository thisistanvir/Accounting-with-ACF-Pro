<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package accounting
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
get_header(); ?>

<!-- BreadCrumb Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/bg_2.jpg'); ?>');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_html__('Home', 'accounting'); ?> <i class="fa fa-arrow-right"></i></a></span> <span> <?php esc_html_e('404 Error', 'accounting'); ?></span></p>
        <h1 class="mb-0 bread"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'accounting'); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 text-center">
        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'accounting'); ?></p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary px-2 py-3"><?php esc_html_e('go back to Home', 'accounting'); ?></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>