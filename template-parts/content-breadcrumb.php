<?php

/**
 * Template part for displaying the breadcrumb
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_html__('Home', 'accounting'); ?> <i class="fa fa-arrow-right"></i></a></span> <span> <?php the_title(); ?></span></p>
        <h1 class="mb-0 bread"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>