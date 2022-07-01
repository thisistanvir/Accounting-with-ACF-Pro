<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Accounting
 */
if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
}

$copyrightText = get_field('copyright_text', 'option');
?>


<footer class="footer">
        <div class="container-fluid px-lg-5">
                <div class="row">
                        <div class="col-md-9 py-5">
                                <div class="row">
                                        <div class="col-md-4 mb-md-0 mb-4">
                                                <?php if (is_active_sidebar('footer-1')) :
                                                        dynamic_sidebar('footer-1');
                                                endif; ?>
                                        </div>
                                        <div class="col-md-8">
                                                <div class="row justify-content-center">
                                                        <div class="col-md-12 col-lg-10">
                                                                <div class="row">
                                                                        <div class="col-md-4 mb-md-0 mb-4">
                                                                                <?php if (is_active_sidebar('footer-2')) :
                                                                                        dynamic_sidebar('footer-2');
                                                                                endif; ?>
                                                                        </div>
                                                                        <div class="col-md-4 mb-md-0 mb-4">
                                                                                <?php if (is_active_sidebar('footer-3')) :
                                                                                        dynamic_sidebar('footer-3');
                                                                                endif; ?>
                                                                        </div>
                                                                        <div class="col-md-4 mb-md-0 mb-4">
                                                                                <?php if (is_active_sidebar('footer-4')) :
                                                                                        dynamic_sidebar('footer-4');
                                                                                endif; ?>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row mt-md-5">
                                        <div class="col-md-12">
                                                <p class="copyright">
                                                        <?php echo $copyrightText; ?>
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                                <?php if (is_active_sidebar('footer-consult')) :
                                        dynamic_sidebar('footer-consult');
                                endif; ?>
                        </div>
                </div>
        </div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
</div>






<?php wp_footer(); ?>

</body>

</html>