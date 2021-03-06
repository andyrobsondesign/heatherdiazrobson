<?php
/**
 * Custom Contact Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<div class="narrow-contact">
	
	<?php 
		$success_title = get_field('success_title');
		$success_body = get_field('success_body');
	?>
	
		<?php $method = $_SERVER['REQUEST_METHOD']; ?> 

			<div class="contact-form"> 

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
					<?php //the_meta(); ?>

					<!-- Upon submission, show this message and hide the title and text of the page -->
					<?php if ($method == 'POST' ){ ?> 
					<div class="reply-contact">
					
						<h2><?php echo $success_title; ?></h2>

						<p><?php echo $success_body; ?></p>

					</div>

					<?php } else { ?> 

					<h3><?php the_title(); ?></h3> 

					<?php the_content(); ?> 

					<?php } ?> 

				<?php endwhile; endif; ?> 

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
