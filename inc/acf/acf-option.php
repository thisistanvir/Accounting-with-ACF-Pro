<?php

/**
 * accounting option page
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package accounting
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
}


function acf_css()
{
?>
   <style>

   </style>
<?php
}
add_filter('wp_head', 'acf_css');

/**
 * Option Page
 */
add_action('acf/init', 'accounting_acf_op_init');
function accounting_acf_op_init()
{

   // Check function exists.
   if (function_exists('acf_add_options_page')) {

      // Add parent.
      $parent = acf_add_options_page(array(
         'page_title'  => __('Theme Settings', 'accounting'),
         'menu_title'  => __('Theme Settings', 'accounting'),
         'redirect'    => true,
      ));

      // Header Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('Header Settings', 'accounting'),
         'menu_title'  => __('Header Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));

      // Home Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('Home Settings', 'accounting'),
         'menu_title'  => __('Home Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));

      // About Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('About Settings', 'accounting'),
         'menu_title'  => __('About Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));

      // Services Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('Services Settings', 'accounting'),
         'menu_title'  => __('Services Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));

      // Contact Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('Contact Settings', 'accounting'),
         'menu_title'  => __('Contact Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));

      // Footer Settings
      $child = acf_add_options_page(array(
         'page_title'  => __('Footer Settings', 'accounting'),
         'menu_title'  => __('Footer Option', 'accounting'),
         'parent_slug' => $parent['menu_slug'],
      ));
   }
}















// ACF Jason Save
add_filter('acf/settings/save_json', 'accounting_acf_json_save_point');
function accounting_acf_json_save_point($path)
{

   // update path
   $path = get_stylesheet_directory() . '/inc/acf/acf-jason';


   // return
   return $path;
}


// ACF Jason Load
add_filter('acf/settings/load_json', 'accounting_acf_json_load_point');
function accounting_acf_json_load_point($paths)
{

   // remove original path (optional)
   unset($paths[0]);


   // append path
   $paths[] = get_stylesheet_directory() . '/inc/acf/acf-jason';


   // return
   return $paths;
}
