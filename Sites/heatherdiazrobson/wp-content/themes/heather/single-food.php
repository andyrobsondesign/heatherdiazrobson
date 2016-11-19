<?php
/**
 * The template for displaying the custom post type food
 *
 * @package WordPress
 * @subpackage Heather
 * @since Heather Starter 1.0
 */

get_header(); ?>
	
	<div class="site-content">
		<div id= 'content' role='main'>
		<?php while ( have_posts() ) : the_post(); 
			$food = get_field('food'); 
			$recipie = get_field('recipie'); 
			$image1 = get_field('image_1'); 
			$image2 = get_field('image_2'); 
			$image3 = get_field('image_3'); 
			$size1 = "full"; 
			$size2 = "medium"; 
			$size3 = "thumbnail"; 
	
			?>
			<div='food-content'>
		
			<article class="food">
				<aside class="food-sidebar">
					<?php if is_page('food')?>
					<h2><?php the_title(); ?></h2>
					<h3>Recipie:<?php echo $recipie; ?>
				<?php the_content(); ?>
			</article>
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
		<?php endwhile; ?>
	</div>
	
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>