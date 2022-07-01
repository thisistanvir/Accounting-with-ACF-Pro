<?php

/**
 * This section displaying Services Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}

$homeServices = get_field('home_services', 'option');

?>
<?php if ($homeServices) : ?>
   <section class="ftco-section">
      <div class="container">
         <div class="row">
            <?php foreach ($homeServices as $service) : ?>
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <?php echo $service['icon']; ?>
                     </div>
                     <div class="media-body">
                        <h3 class="heading"><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
<?php endif; ?>