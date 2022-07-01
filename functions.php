<?php

/**
 * accounting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}



/**
 * ACF Options
 */
if (class_exists('ACF')) {
   include_once('inc/acf/acf-option.php');
}


/**
 * Better Comments
 */
include_once('inc/better-comments.php');



/**
 * TGM Plugin Activator
 */
if (!class_exists('TGM_Plugin_Activation')) {
   include_once('inc/tgm-plugin-activation.php');
   include_once('inc/required-plugins.php');
}


/**
 * Define theme version
 */
if (!defined('Accounting_VERSION')) {
   // Replace the version number of the theme on each release.
   define('Accounting_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('accounting_supports')) :
   function accounting_supports()
   {

      /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
      load_theme_textdomain('accounting', get_template_directory() . '/languages');

      /**
       * Add default posts and comments RSS feed links to head.
       * */
      add_theme_support('automatic-feed-links');

      /*
      * Let WordPress manage the document title.
      */
      add_theme_support('title-tag');

      /*
      * Enable support for Post Thumbnails on posts and pages.
      */
      add_theme_support('post-thumbnails');

      /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
      add_theme_support(
         'html5',
         array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
         )
      );

      /*
      * Enable support for Post Formats.
      *
      * See: https://codex.wordpress.org/Post_Formats
      */
      add_theme_support('post-formats', array(
         'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
      ));

      /**
       * Set up the WordPress core custom background feature.
       */
      add_theme_support(
         'custom-background',
         apply_filters(
            'demo_custom_background_args',
            array(
               'default-color' => 'ffffff',
               'default-image' => '',
            )
         )
      );

      /**
       * Add theme support for selective refresh for widgets.
       */
      add_theme_support('customize-selective-refresh-widgets');



      /**
       * This theme uses wp_nav_menu() in one location.
       */
      register_nav_menus(
         [
            'main-menu'   => __('Primary menu', 'accounting'),
         ]
      );
   }
endif;
add_action('after_setup_theme', 'accounting_supports');


/**
 * Enqueue scripts and styles.
 */
function accounting_files()
{
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', [], '1.0.0', 'all');
   wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', [], '1.0.0', 'all');
   wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', [], '1.0.0', 'all');
   wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', [], '1.0.0', 'all');
   wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', [], '1.0.0', 'all');
   wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', [], '1.0.0', 'all');
   wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], Accounting_VERSION, 'all');
   wp_enqueue_style('accounting-style', get_stylesheet_uri());

   wp_enqueue_script('migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], Accounting_VERSION, true);

   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }
}
add_action('wp_enqueue_scripts', 'accounting_files');

/**
 * Register Custom Post Type
 */
add_action('init', 'accounting_custom_post');
function accounting_custom_post()
{
   // Register Custom Post for Sliders
   register_post_type(
      'sliders',
      array(
         'labels' => array(
            'name' => __('Sliders', 'accounting'),
            'singular_name' => __('Slide', 'accounting'),
            'add_new' => __('Add New Slide', 'accounting'),
            'add_new_item' => __('Add New Slide', 'accounting'),
         ),
         'supports' => array('title', 'thumbnail'),
         'public'       => false,
         'show_ui'      => true,
         'show_in_rest' => false,
         'menu_icon'    => 'dashicons-slides',
      )
   );

   // Register Custom Post for Testimonials
   register_post_type(
      'testimonials',
      array(
         'labels' => array(
            'name' => __('Testimonials', 'accounting'),
            'singular_name' => __('Testimonial', 'accounting'),
            'add_new' => __('Add New Testimonial', 'accounting'),
            'add_new_item' => __('Add New Testimonial', 'accounting'),
         ),
         'supports' => array('title'),
         'public'       => false,
         'show_ui'      => true,
         'show_in_rest' => false,
         'menu_icon'    => 'dashicons-testimonial',
      )
   );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function accounting_widgets_init()
{
   register_sidebar(
      array(
         'name'          => esc_html__('Main Sidebar', 'accounting'),
         'id'            => 'main-sidebar',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="sidebar-box ftco-animate %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
      )
   );
   register_sidebar(
      array(
         'name'          => esc_html__('Footer One', 'accounting'),
         'id'            => 'footer-1',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="footer-heading">',
         'after_title'   => '</h2>',
      )
   );
   register_sidebar(
      array(
         'name'          => esc_html__('Footer Two', 'accounting'),
         'id'            => 'footer-2',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="footer-heading">',
         'after_title'   => '</h2>',
      )
   );
   register_sidebar(
      array(
         'name'          => esc_html__('Footer Three', 'accounting'),
         'id'            => 'footer-3',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="footer-heading">',
         'after_title'   => '</h2>',
      )
   );
   register_sidebar(
      array(
         'name'          => esc_html__('Footer Four', 'accounting'),
         'id'            => 'footer-4',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="footer-heading">',
         'after_title'   => '</h2>',
      )
   );
   register_sidebar(
      array(
         'name'          => esc_html__('Footer Consult', 'accounting'),
         'id'            => 'footer-consult',
         'description'   => esc_html__('Add widgets here.', 'accounting'),
         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h2 class="footer-heading">',
         'after_title'   => '</h2>',
      )
   );
}
add_action('widgets_init', 'accounting_widgets_init');


/**
 * Excerpt Length
 */
function accounting_excerpt_length($length)
{
   return 20;
}
add_filter('excerpt_length', 'accounting_excerpt_length', 999);

// post excerpt more
function accounting_excerpt_more($more)
{
   return '...';
}
add_filter('excerpt_more', 'accounting_excerpt_more');


/**
 * One Click Demo Import
 */
function accounting_import_files()
{
   return array(
      array(
         'import_file_name'             => esc_html__('Accounting Demo Import', 'accounting'),
         'local_import_file'            => trailingslashit(get_template_directory()) . '/inc/demo-data/content.xml',
         'local_import_widget_file'     => trailingslashit(get_template_directory()) . '/inc/demo-data/widgets.wie',
         'local_import_customizer_file' => trailingslashit(get_template_directory()) . '/inc/demo-data/customizing.dat',
         'import_preview_image_url'     => get_template_directory_uri() . '/screenshot.png',
         'import_notice'                => esc_html__('After import demo, just set static homepage from settings > reading, Check widgets and menu. You will be done! :-)', 'accounting'),
         'preview_url'                  => 'http://itanvir.epizy.com/accounting/',
      ),
   );
}
add_filter('ocdi/import_files', 'accounting_import_files');



/**
 * custom comments form order
 */
function accounting_comment_field($fields)
{
   $comment = $fields['comment'];
   $author  = $fields['author'];
   $email   = $fields['email'];
   $url     = $fields['url'];
   $cookies = $fields['cookies'];

   unset($fields['comment']);
   unset($fields['author']);
   unset($fields['email']);
   unset($fields['url']);
   unset($fields['cookies']);

   $fields['author']  = $author;
   $fields['email']   = $email;
   $fields['url']     = $url;
   $fields['comment'] = $comment;
   $fields['cookies'] = $cookies;

   return $fields;
}
add_action('comment_form_fields', 'accounting_comment_field');
