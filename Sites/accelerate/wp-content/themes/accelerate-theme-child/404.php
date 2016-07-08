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
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<div class="site-content">
            
                <div class="map">
                    <img src="http://localhost/accelerate/wp-content/uploads/2016/06/map.png" alt="map">
                </div>
			    
                <div class="fourohfour">
                
                <h2>Whoops, took a wrong turn...</h2>

                <p>Sorry, this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
                <p>Feel free to take a look around our <a href="http://localhost/accelerate/blog">blog</a> or some of our featured <a href="http://localhost/accelerate/case-studies">work</a>.</p>
                
                <hr>
                                                
                <p>Or search the site using the box below.</p>
                
                <?php get_search_form(); ?> 
                
                </div>
                
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>