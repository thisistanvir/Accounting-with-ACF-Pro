<?php

/**
 * This section displaying FAQs Section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


$homeFaq = get_field('home_faq', 'option');
$faqs = $homeFaq['faqs'];
?>

<?php if ($homeFaq) : ?>
   <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="img-faqs w-100">
                  <?php if ($homeFaq['image_1']) : ?>
                     <div class="img mb-4 mb-sm-0" style="background-image:url(<?php echo esc_url($homeFaq['image_1']); ?>);"> </div>
                  <?php endif;
                  if ($homeFaq['image_2']) : ?>
                     <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo esc_url($homeFaq['image_2']); ?>);"> </div>
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
               <div class="heading-section mb-5 mt-5 mt-lg-0">
                  <span class="subheading"><?php echo $homeFaq['subtitle']; ?></span>
                  <h2 class="mb-3"><?php echo $homeFaq['title']; ?></h2>
                  <p><?php echo $homeFaq['description']; ?></p>
               </div>
               <?php if ($faqs) : ?>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                     <?php
                     $i = 0;
                     foreach ($faqs as $faq) :
                        $i++;
                     ?>
                        <div class="card">
                           <div class="card-header p-0" id="heading<?php echo $i; ?>">
                              <h2 class="mb-0">
                                 <button href="#collapse<?php echo $i; ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" <?php if ('1' == $i) : ?>aria-expanded="true" <?php endif; ?> aria-controls="collapse<?php echo $i; ?>">
                                    <p class="mb-0"><?php echo $faq['title']; ?></p>
                                    <i class="fa" aria-hidden="true"></i>
                                 </button>
                              </h2>
                           </div>
                           <div class="collapse <?php if ('1' == $i) {
                                                   echo 'show';
                                                } ?>" id="collapse<?php echo $i; ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                              <div class="card-body py-3 px-0">
                                 <?php printf(esc_html__('%s', 'accounting'), $faq['description']); ?>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>