<?php

/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}


get_header(); ?>

<main id="primary" class="site-main content-block">

  <?php if (have_posts()) : ?>

    <?php get_template_part('/template-parts/content', 'breadcrumb'); ?>

    <section class="section">
      <div class="section-container">

        <div class="internal-content-wrap <?php if (is_active_sidebar('main-sidebar')) {
                                            esc_html_e('sidebar', 'accounting');
                                          } ?>">
          <?php get_template_part('/template-parts/content'); ?>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </section> <!-- .section -->

  <?php else : ?>
    <h2><?php esc_html_e('Nothing Found', 'accounting'); ?></h2>
  <?php endif; ?>

</main> <!-- #main -->
<?php wp_link_pages(); ?>

<?php get_footer(); ?>