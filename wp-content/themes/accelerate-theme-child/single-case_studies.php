<?php
/**
 * The template for displaying case studies
 *
 
 *
 * @package WordPress
 * @subpackage Acelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1> This is my case studies page </h1>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>