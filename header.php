<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Accounting
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <!-- acf options -->
    <?php
    $topHeader = get_field('top_header', 'option');
    $headerSocials = $topHeader['header_socials'];

    $headerLogo = get_field('header_logo', 'option');
    $chooseLogo = $headerLogo['choose_logo'];

    ?>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-wrap">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <p class="mb-0 phone pl-md-2">
                                    <?php if ($topHeader['header_phone']) : ?>
                                        <a href="tel:<?php echo esc_url($topHeader['header_phone']); ?>" class="mr-2"><span class="fa fa-phone mr-1"></span> <?php echo $topHeader['header_phone']; ?></a>
                                    <?php endif;
                                    if ($topHeader['header_email']) : ?>
                                        <a href="mailto:<?php echo esc_url($topHeader['header_email']); ?>"><span class="fa fa-paper-plane mr-1"></span> <?php echo $topHeader['header_email'] ?></a>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <?php if ($headerSocials) : ?>
                                        <p class="mb-0 d-flex">
                                            <?php foreach ($headerSocials as $social) : ?>
                                                <a href="<?php echo esc_url($social['social_link']); ?>" class="d-flex align-items-center justify-content-center">
                                                    <?php echo $social['social_icon'] ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">

                <?php if ('text' == $chooseLogo) :

                    echo $headerLogo['text_logo'];

                elseif ('image' == $chooseLogo) :                    ?>

                    <img src="<?php echo esc_url($headerLogo['image_logo']); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>">

                <?php endif; ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="<?php echo esc_attr('fa fa-bars') ?>"></span> <?php echo esc_html__('Menu', 'accounting'); ?>
            </button>

            <!-- wp nav menu -->
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'container_class' => 'collapse navbar-collapse',
                'container_id'  => 'ftco-nav',
                'menu_class' => 'navbar-nav ml-auto'

            ])
            ?>

        </div>
    </nav>