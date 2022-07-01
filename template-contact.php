<?php

/**
 * Template Name: Contact Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

get_header();


$contactDetails = get_field('contact_details', 'option');
$contactInfos = $contactDetails['contact_infos'];
$contactForm = get_field('contact_form', 'option');

?>

<!-- Breadcrumb Section -->
<?php get_template_part('/template-parts/content', 'breadcrumb'); ?>


<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="wrapper">
               <div class="row no-gutters">
                  <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                     <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4"><?php echo $contactForm['form_heading']; ?></h3>
                        <div id="contactForm" class="contactForm">
                           <?php echo do_shortcode($contactForm['form_shortcode']); ?>
                        </div>
                     </div>
                  </div>

                  <!-- Contact Infos -->
                  <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                     <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                        <h3><?php echo $contactDetails['contact_title']; ?></h3>
                        <p class="mb-4"><?php echo $contactDetails['contact_description']; ?></p>

                        <?php
                        if ($contactInfos) :
                           foreach ($contactInfos as $contactInfo) :
                        ?>
                              <div class="dbox w-100 d-flex align-items-center">
                                 <div class="icon d-flex align-items-center justify-content-center">
                                    <?php echo $contactInfo['icon']; ?>
                                 </div>
                                 <div class="text pl-3">
                                    <p><span><?php echo $contactInfo['title']; ?>:</span>


                                       <?php
                                       if ('Phone' == $contactInfo['title'] || 'phone' == $contactInfo['title']) : ?>
                                          <a href="tel:<?php echo esc_attr($contactInfo['content']) ?>"><?php echo $contactInfo['content']; ?></a>
                                       <?php
                                       elseif ('Email' == $contactInfo['title'] || 'email' == $contactInfo['title']) : ?>
                                          <a href="mailto:<?php echo esc_attr($contactInfo['content']) ?>"><?php echo $contactInfo['content']; ?></a>
                                       <?php
                                       elseif ('website' == $contactInfo['title'] || 'Website' == $contactInfo['title']) : ?>
                                          <a href="<?php echo esc_url($contactInfo['content']) ?>" target="_blank"><?php echo $contactInfo['content']; ?></a>
                                       <?php
                                       else :
                                          echo $contactInfo['content'];
                                       endif;

                                       ?>

                                    </p>

                                 </div>
                              </div>
                        <?php
                           endforeach;
                        endif;
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div id="map" class="map">
   <?php echo $contactForm['google_map']; ?>
</div>

<!-- CTA Section -->
<?php get_template_part('/template-parts/section/section', 'cta'); ?>


<?php get_footer(); ?>