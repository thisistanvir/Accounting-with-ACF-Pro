<?php

/**
 * This section displaying Pricing Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


$homePricing = get_field('home_pricing', 'option');
$pricePlans = $homePricing['price_plan'];

?>
<?php if ($homePricing) : ?>
   <section class="ftco-section bg-light">
      <div class="container">
         <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
               <span class="subheading"><?php echo $homePricing['subtitle']; ?></span>
               <h2><?php echo $homePricing['title']; ?></h2>
            </div>
         </div>
         <?php if ($pricePlans) : ?>
            <div class="row">
               <?php foreach ($pricePlans as $pricePlan) : ?>
                  <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="block-7">
                        <div class="text-center">
                           <span class="excerpt d-block"><?php echo $pricePlan['heading']; ?></span>
                           <span class="price"><sup><?php echo esc_html('$'); ?></sup> <span class="number"><?php echo $pricePlan['price']; ?></span> <sub><?php printf(esc_html__('/ %s', 'accounting'), $pricePlan['payment']); ?></sub></span>

                           <?php
                           $features = $pricePlan['features'];
                           if ($features) :
                           ?>
                              <ul class="pricing-text mb-5">
                                 <?php foreach ($features as $feature) : ?>
                                    <li><span class="<?php echo esc_attr('fa fa-check mr-2'); ?>"></span> <?php echo $feature; ?></li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                           <a href="<?php echo esc_url($pricePlan['button_link']); ?>" class="btn btn-primary d-block px-2 py-3"><?php echo $pricePlan['button_text']; ?></a>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         <?php endif; ?>
      </div>
   </section>
<?php endif; ?>