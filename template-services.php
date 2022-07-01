<?php

/**
 * Template Name: Services Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();

$serviceCounter = get_field('service_counter_section', 'option');
$serviceAbout = get_field('service_welcome_section', 'option');
$servicePricing = get_field('service_pricing_section', 'option');
$serviceCta = get_field('service_cta_section', 'option');
?>

<!-- Breadcrumb Section -->
<?php get_template_part('/template-parts/content', 'breadcrumb'); ?>

<!-- Services Section -->
<?php
if ($serviceCounter) :
   get_template_part('/template-parts/section/section', 'services');
endif;
?>

<!-- About Section -->
<?php
if ($serviceAbout) :
   get_template_part('/template-parts/section/section', 'about');
endif;
?>

<!-- Pricing Section -->
<?php
if ($servicePricing) :
   get_template_part('/template-parts/section/section', 'pricing');
endif;
?>

<!-- CTA Section -->
<?php
if ($serviceCta) :
   get_template_part('/template-parts/section/section', 'cta');
endif;
?>

<?php get_footer(); ?>