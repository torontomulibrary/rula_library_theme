<?php
/**
 * The template for the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main clear" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(array('content-section', 'blurb')); ?>>
          <?php get_template_part( 'library-partials/library', 'search' ); ?>

          <?php get_template_part( 'library-partials/library', 'news' ); ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->

          <footer class="entry-footer">
            <?php edit_post_link( esc_html__( 'Edit', 'underscores' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->    
    
  </div><!-- #primary -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
