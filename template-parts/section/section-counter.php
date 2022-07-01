<?php

/**
 * This section displaying Counter Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


$homeCounters = get_field('home_counter', 'option');
?>
<?php
if ($homeCounters) : ?>
   <section class="ftco-counter" id="section-counter">
      <div class="container">
         <div class="row">
            <?php foreach ($homeCounters as $counter) : ?>
               <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                     <div class="text">
                        <strong class="number" data-number="<?php echo esc_attr($counter['counter_data']) ?>"><?php echo $counter['counter_data'] ?></strong>
                     </div>
                     <div class="text">
                        <span><?php echo $counter['counter_title']; ?></span>
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
<?php endif; ?>