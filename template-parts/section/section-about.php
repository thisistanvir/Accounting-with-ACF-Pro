<?php

/**
 * This section displaying About Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

$homeAbout = get_field('home_about', 'option');
$aboutFeatures = $homeAbout['about_features'];
?>

<section class="ftco-section ftco-no-pt bg-light">
   <div class="container">
      <div class="row d-flex no-gutters">
         <div class="col-md-6 d-flex">
            <?php if ($homeAbout['image']) : ?>
               <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo esc_url($homeAbout['image']);  ?>);">
               <?php endif; ?>
               </div>
         </div>
         <div class="col-md-6 pl-md-5 py-md-5">
            <div class="heading-section pl-md-4 pt-md-5">
               <span class="subheading"><?php echo $homeAbout['section_subtitle']; ?></span>
               <h2 class="mb-4"><?php echo $homeAbout['section_title']; ?></h2>
            </div>

            <?php if ($aboutFeatures) :
               foreach ($aboutFeatures as $feature) :
            ?>
                  <div class="services-2 w-100 d-flex">
                     <div class="icon d-flex align-items-center justify-content-center"><?php echo $feature['icon']; ?></div>
                     <div class="text pl-4">
                        <h4><?php echo $feature['tittle']; ?></h4>
                        <p><?php echo $feature['description']; ?></p>
                     </div>
                  </div>
            <?php endforeach;
            endif; ?>
         </div>
      </div>
   </div>
</section>