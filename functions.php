<?php
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_register_style('rula-tabs-style', get_stylesheet_directory_uri() . '/css/rula_tabs.css');

  wp_register_script('rula-tabs-plugin', get_stylesheet_directory_uri() . '/js/rula_tabs.js', array('jquery'), '20151124', true );

  // Register scripts and styles for the slick jQuery plugin
  wp_register_style('slick-styles', get_stylesheet_directory_uri() . '/lib/slick-1.5.9/slick/slick.css' );
  wp_register_style('slick-theme', get_stylesheet_directory_uri() . '/lib/slick-1.5.9/slick/slick-theme.css', array('slick-styles') );
  wp_register_script('slick-plugin', get_stylesheet_directory_uri() . '/lib/slick-1.5.9/slick/slick.min.js', array('jquery'), '1.5.9', true );

  if ( is_front_page() ) {
    wp_enqueue_style( 'frontpage-style', get_stylesheet_directory_uri() . '/css/front-page.css', array('rula-tabs-style', 'slick-theme') );
    wp_enqueue_script( 'frontpage-script', get_stylesheet_directory_uri() . '/js/front-page.js', array('rula-tabs-plugin', 'slick-plugin'), '20151124', true );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
