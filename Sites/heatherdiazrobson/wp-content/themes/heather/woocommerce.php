<?php
/**
 * The template for woocommerce page
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) :
<?php woocommerce_content(); ?>
<?php endif; ?>