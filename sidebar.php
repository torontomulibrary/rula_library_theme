<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//   return;
// }
?>

<div id="secondary" class="widget-area" role="complementary">
  <?php get_template_part( 'library-partials/library', 'hours' ); ?>
  <?php get_template_part( 'library-partials/library', 'news' ); ?>
  
  <?php //dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
