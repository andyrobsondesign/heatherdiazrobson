<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */

get_header(); ?>
    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/CreativeWork">

      <header class="post-header">
        <div class="post-date radius-100 updated" itemprop="dateModified"><span itemprop="datePublished" content="<?php the_time( get_option( 'date_format' ) ); ?>"><a href="<?php the_permalink(); ?>"><?php echo get_the_date( 'd' ) ?></span><br /><?php echo get_the_date( 'M' ) ?><br /><?php echo get_the_date( 'Y' ) ?></a></div>
        <h2 class="post-title entry-title" itemprop="headline"><a itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark', 'adelle' ); ?>"><?php the_title(); ?></a></h2>
        <div class="post-category"><?php _e( 'categories', 'adelle' ); ?>: <?php the_category( ', ' ); ?></div>
      </header>

      <article class="post-content entry-content" itemprop="text">

        <?php the_content(); ?>

        <?php echo adelle_theme_get_link_pages(); ?>

        <footer class="post-footer">
          <ul class="footer-navi">
            <?php previous_post_link( __( '<li class="previous">&laquo; %link</li>', 'adelle' ) ); ?>
            <?php next_post_link( __( '<li class="next">%link &raquo;</li>', 'adelle' ) ); ?>
          </ul>

        </footer><!-- .post-footer -->

        <?php comments_template( '/comments.php',true ); ?>

      </article><!-- .post-content -->

    </article><!-- .article -->