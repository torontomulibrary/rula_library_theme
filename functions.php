<?php
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  if ( is_front_page() ) {
    wp_enqueue_style( 'frontpage-style', get_stylesheet_directory_uri() . '/css/frontpage.css' );
    wp_enqueue_style( 'summon-style', get_stylesheet_directory_uri() . '/css/summon.css' );

    wp_enqueue_script( 'frontpage-script', get_stylesheet_directory_uri() . '/js/front-page.js', array('jquery'), '20151123', true );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
