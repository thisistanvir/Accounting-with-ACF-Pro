<?php

/**
 * Template Name: About Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();

$welcomeSection = get_field('welcome_section', 'option');
$counterSection = get_field('counter_section', 'option');
$testimonialSection = get_field('testimonial_section', 'option');
$faqSection = get_field('faq_section', 'option');
$ctaSection = get_field('cta_section', 'option');
?>

<!-- Breadcrumb -->
<?php get_template_part('/template-parts/content', 'breadcrumb'); ?>


<!-- about section -->
<?php
if ($welcomeSection) :
   get_template_part('/template-parts/section/section', 'about');
endif;
?>

<!-- counter section -->
<?php
if ($counterSection) :
   get_template_part('/template-parts/section/section', 'counter');
endif;
?>

<!-- testimonial section -->
<?php
if ($testimonialSection) :
   get_template_part('/template-parts/section/section', 'testimonial');
endif;
?>

<!-- FAQs Section -->
<?php
if ($faqSection) :
   get_template_part('/template-parts/section/section', 'faq');
endif;
?>

<!-- CTA Section -->
<?php
if ($ctaSection) :
   get_template_part('/template-parts/section/section', 'cta');
endif;
?>

<?php get_footer(); ?>