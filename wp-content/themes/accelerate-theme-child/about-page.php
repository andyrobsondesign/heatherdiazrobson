<?php
/*
Template Name: about-page
*/
?>
<?php
/**
 * The template for displaying the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>


<div class="about-us-header">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
</div><!-- .about-us-header -->


<div class="site-content">	
			<div class="about-content">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.  Here is a brief overview of our services offered.</p>
</div><!-- .site-content -->

<?php while ( have_posts() ) : the_post();
	$image_1 = get_field('content_image');
	$content_strategy = get_field('content_strategy');
	$influencer_mapping = get_field('influencer_mapping');
	$image_2 = get_field('influencer_image');
	$social_media_strategy = get_field('social_media_strategy');
	$image_3 = get_field('social_image');
	$design_and_development = get_field('design_and_development');  
	$image_4 = get_field('design_image'); 
	$size = "medium"; 
	$contac_us = get_field('contact_us'); ?>

<section class="about-section">
	<div class="image-1 align-left">
		<?php echo wp_get_attachment_image( $image_1, $medium ); ?>
	</div>
	<div class="content-strategy">
		<h2>Content Strategy</h2> 
		<p><?php echo $content_strategy; ?></p>
		
	</div>
</section>

<section class="about-section">
	<div class="image-2 align-right">
		<?php echo wp_get_attachment_image( $image_2, $medium ); ?>
	</div>
	<div class="influencer-mapping">
		<h2>Influencer Mapping</h2>
		<p><?php echo $influencer_mapping; ?></p>
	</div>
</section>

<section class="about-section">
	<div class="image-3 align-left">
		<?php echo wp_get_attachment_image( $image_3, $medium ); ?>
	</div>
	<div class="social-media-strategy">
		<h2>Social Media Strategy</h2>
		<p><?php echo $social_media_strategy; ?></p>
	</div>
</section>
	
<section class="about-section">
	<div class="design-and-development">
		<h2>Design & Development</h2>
		<p><?php echo $design_and_development; ?></p>
	</div>
	<div class="image-2 align-right">
			<?php echo wp_get_attachment_image( $image_4, $medium ); ?>
		</div>
	</section>

	<?php endwhile; //end of the loop /?>
	
	<section class="site-content">
	      <div class="about-tag">
			
	          <h2>Interested in working with us?<?php echo $contact_us; ?></h2>
	          <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	      </div><!-- about-tag -->
	    </div><!-- #content -->

	<?php get_footer(); ?>
	