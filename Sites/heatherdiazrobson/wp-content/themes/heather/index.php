<?php
/**
 * The main template file for Heather
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */

get_header(); ?>


  <main role="main" class="section" id="section">

    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'list' ); ?>

    <?php endwhile; ?>

      <?php echo adelle_theme_pagination_links(); ?>

    <?php else : get_template_part( 'content', 'none' ); endif; ?>

  </main><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>