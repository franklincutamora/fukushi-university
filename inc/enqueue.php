<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package FUKUSHI UNIVERSITY
 */

 /*
* ----------------------------------------------------------------------------------------
*  ADMIN ENQUEU FUNCTIONS 
* ----------------------------------------------------------------------------------------
*/
function theme_options_load_admin_scripts( $hook )
{
   if( 'toplevel_page_rbr-theme-options' == $hook ){

      wp_register_style('theme_options_admin', get_template_directory_uri() . '/assets/css/admin/styles.css', '1.0.0', 'all');
      wp_enqueue_style('theme_options_admin');

      wp_enqueue_media();

      
      wp_register_script('theme_options_admin_scripts', get_template_directory_uri() . '/assets/js/admin/script.js', array('jquery'), '1.0.0', true );
      wp_enqueue_script('theme_options_admin_scripts');

   } else if( 'theme-options_page_rbr-theme-options-css' == $hook ){

      wp_register_style('theme_options_admin', get_template_directory_uri() . '/assets/css/admin/styles.css', '1.0.0', 'all');
      wp_enqueue_style('theme_options_admin');
      wp_enqueue_style('ace-css', get_template_directory_uri() . '/assets/css/admin/ace.css', '1.0.0', 'all');
      wp_enqueue_script('ace-js', get_template_directory_uri() . '/assets/js/ace/ace.js', array('jquery'), true, true);
      wp_enqueue_script('theme-options-js', get_template_directory_uri() . '/assets/js/admin/custom.js', array('jquery'), '1.0.0', true);

   } else if( 'theme-options_page_rbr-theme-options-js' == $hook ){

      wp_register_style('theme_options_admin', get_template_directory_uri() . '/assets/css/admin/styles.css', '1.0.0', 'all');
      wp_enqueue_style('theme_options_admin');
      wp_enqueue_style('ace-css', get_template_directory_uri() . '/assets/css/admin/ace.css', '1.0.0', 'all');
      wp_enqueue_script('ace-js', get_template_directory_uri() . '/assets/js/ace/ace.js', array('jquery'), true, true);
      wp_enqueue_script('theme-options-js', get_template_directory_uri() . '/assets/js/admin/custom2.js', array('jquery'), '1.0.0', true);

   }
   else{
      return;
   }
}
add_action( 'admin_enqueue_scripts', 'theme_options_load_admin_scripts' );


/*
* ----------------------------------------------------------------------------------------
*  ENQUEU THE STYLE
* ----------------------------------------------------------------------------------------
*/
function zeroten_styles(){

   // Font Awesome CDN
   wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

   // Material Icon CDN
   wp_enqueue_style( 'materialicon', 'https://fonts.googleapis.com/icon?family=Material+Icons' );

   // Animate Css
   wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/lib/animate.css' );

   // Owl Carousel CSS
   wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/css/lib/owl-carousel.min.css' );

   // Slick CSS
   wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/lib/slick.css' );
   wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/lib/slick-theme.css' );

   // Custom CSS
   wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/styles.css' );
   wp_enqueue_style( 'connect-css', get_template_directory_uri() . '/assets/css/style-connect.css' );

   // Main
   wp_enqueue_style( 'style-css', get_stylesheet_uri() );

}
add_action ('wp_enqueue_scripts', 'zeroten_styles');


/*
* ----------------------------------------------------------------------------------------
*  ENQUEU THE SCRIPT
* ----------------------------------------------------------------------------------------
*/
function zeroten_scripts(){

   // Owl Carousel JS
   // wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/lib/owl-carousel.js', array( 'jquery' ), true, true );
   wp_enqueue_script( 'owl-lazyload-js', get_template_directory_uri() . '/assets/js/lib/owl-lazyload.js', array( 'jquery' ), true, true );

   // Yoshida API
   wp_enqueue_script( 'yapi-lib-js', get_template_directory_uri() . '/assets/js/lib/ylib.js', array( 'jquery' ), true, true );
   wp_enqueue_script( 'yapi-js', get_template_directory_uri() . '/assets/js/lib/yapi.js', array( 'jquery' ), true, true );

   // Slick JS
   wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/lib/slick.min.js', array( 'jquery' ), true, true );

   // Custom JS
   wp_enqueue_script( 'rob-js', get_template_directory_uri() . '/assets/js/rob.js', array( 'jquery' ), true, true );
   wp_enqueue_script( 'jhn-js', get_template_directory_uri() . '/assets/js/jhn.js', array( 'jquery' ), true, true );
   wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), true, true );

}
add_action ('wp_enqueue_scripts', 'zeroten_scripts');