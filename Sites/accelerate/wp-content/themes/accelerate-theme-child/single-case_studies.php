<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			
			$services = get_field('services'); 
			$client = get_field('client_name'); 
			$link = get_field('client_site_link'); 
			$image1 = get_field('image_1'); 
			$image2 = get_field('image_2');
			$image3 = get_field('image_3');
			$size1 = "full"; 
			$size2 = "medium"; 
			$size3 = "thumbnail"; 
	
			?>
			
			<article class="case-study">
				<aside class="case-study-sidebar">
					
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<?php the_content(); ?>
					<h6 class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site</a></h6>
					
				</aside>

				<div class="case-study-images">
					
					<?php 	if ($image1) { 						
						echo wp_get_attachment_image ( $image1, $size1 ); } ?>
						
					<?php if ($image2) { 						
						 echo wp_get_attachment_image ( $image2, $size1 ); } ?>
						
					<?php if ($image3) { 						
							echo wp_get_attachment_image ( $image3, $size1 ); } ?>

				</div>
			</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>