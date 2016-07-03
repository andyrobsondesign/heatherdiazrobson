<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div id="primary" class="site-content">
	<div id="content" role="main" class="<?php if (is_page('contact')) { echo 'narrow-contact'; } ?>">

	

			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
	</div> <!-- #content (if on conact page, also .narrow-contact. To target contact page only in CSS - use #content.narrow-contact) -->
</div>

<?php get_footer(); ?>