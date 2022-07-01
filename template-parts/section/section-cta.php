<?php

/**
 * This section displaying CTA Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

$homeCta = get_field('home_cta', 'option');

if ($homeCta) : ?>
   <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-7 d-flex align-items-center">
               <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;"><?php echo $homeCta['title']; ?></h2>
            </div>
            <div class="col-md-5 d-flex align-items-center">
               <?php echo do_shortcode($homeCta['form_shortcode']); ?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>