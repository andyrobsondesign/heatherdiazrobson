<?php

/**
 * The template for displaying the About Page
* Template Name: About Page Template
*Description: Template for the custom about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
	<section class="hero-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="hero-text">
				<h3><?php the_content(); ?></h3>
					</div>
					<?php endwhile; // end of the loop. ?>
			</section>

			<div class="site-content">
			<div class="about">	
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.  Here is a brief overview of our services offered.</p>
</div><!-- .site-content -->
<div>
	<section class="site-content">
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
		<?php echo wp_get_attachment_image( $image_1, $size ); ?>
	</div>
	<div class="content-strategy">
		<h2>Content Strategy</h2> 
		<p><?php echo $content_strategy; ?></p>
		
	</div>
</section>

<section class="about-section">
	<div class="image-2 align-right">
		<?php echo wp_get_attachment_image( $image_2, $size ); ?>
	</div>
	<div class="influencer-mapping">
		<h2>Influencer Mapping</h2>
		<p><?php echo $influencer_mapping; ?></p>
	</div>
</section>

<section class="about-section">
	<div class="image-3 align-left">
		<?php echo wp_get_attachment_image( $image_3, $size ); ?>
	</div>
	<div class="social-media-strategy">
		<h2>Social Media Strategy</h2>
		<p><?php echo $social_media_strategy; ?></p>
	</div>
</section>
	
<section class="about-section">
	<div class="image-4 align-right">
		<?php echo wp_get_attachment_image( $image_4, $size ); ?>
	</div>
	<div class="Design_and_Development">
		<h2>Design & Development</h2>
		<p><?php echo $design_and_development; ?></p>	
		</div>
	</div>
	</section>

	<?php endwhile; //end of the loop /?>
	<div>
  
	<section class="site-content">
	      <div class="about-tag">
			
	      <h2>Interested in working with us?<?php echo $contact_us; ?></h2>
			  <br>
<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		  </div>
	      </div><!-- about-tag -->
	    </div><!-- #content -->

	<?php get_footer(); ?>
	