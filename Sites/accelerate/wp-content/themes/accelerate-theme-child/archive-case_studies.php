<?php
/**
<<<<<<< HEAD
 * The template for displaying the case studies archive page
=======
 * The template for displaying case studies archive page
>>>>>>> case-studies-archive-page
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
                $size = "full";
            ?>		
				
				<article class="case-study">
                    <aside class="case-study-info">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h4><?php echo $services; ?></h4>
                    <?php the_excerpt(); ?>
                    <strong><a href="<?php the_permalink(); ?>">View Project &raquo;</a></strong>
                    </aside>
                    <div class="case-study-imgs">
                            <a href="<?php the_permalink(); ?>">
                               <?php if($image1) { 
                                echo wp_get_attachment_image( $image1, $size ); } ?>
                        </a>
                    </div><!-- .case-study-imgs -->
				</article><!-- .case-study -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>