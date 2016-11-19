<?php
/**
 * The template for displaying food page
*Template Name;Food Page
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */

get_header(); ?>
<section class="food-page">		
	<div class="content">
		<?php query_posts('posts_per_page=3&post_type=food'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "medium";
			?>
	
	</div>
	
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>